<div class="container ex-margin-bottom">
<center><h1>All Blog Posts</h1></center>
     <table class="table table-bordered" id="posts">
       <thead>
          <tr>
             <th>Blog Posts</th>
             <th>Edit</th>
             <th>Delete</th>
          </tr>
       </thead>
       <tbody>
          <?php if($posts): ?>
          <?php foreach($posts as $post): ?>
          <tr>
             <td>
             <h3><?php echo $post['title']; ?></h3>  
             <?php echo $post['description']; ?></td>
             <td>
              <a href="<?php echo base_url('posts/edit/'.$post['id']);?>" class="btn btn-sm btn-success">Edit</a>
          </td>
          <td>
              <a href="<?php echo base_url('posts/delete/'.$post['id']);?>" class="btn btn-sm btn-danger">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
</div>