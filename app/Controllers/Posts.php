<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PostModel;
 
class Posts extends Controller
{
 
    public function index()
    {    
        
        $model = new PostModel();
 
        $data['posts'] = $model->orderBy('id', 'DESC')->findAll();
        echo view('templates/header', $data);
        echo view('posts', $data);
        echo view('templates/footer', $data);
    }    
 
    public function create()
    {    
        echo view('templates/header');
        echo view('create-post');
        echo view('templates/footer');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new PostModel();
 
        $data = [
 
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('posts') );
    }
 
    public function edit($id = null)
    {
    
     $model = new PostModel();
     
     $data['post'] = $model->find($id);
     echo view('templates/header');
     echo view('edit-post', $data);
     echo view('templates/footer');
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new PostModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
 
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('posts') );
    }
 
    public function delete($id = null)
    {
 
     $model = new PostModel();
 
     $data['post'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('posts') );
    }
}