<div class="container ex-margin-bottom">
<center><h1>All Blog Posts</h1></center>
     <table class="table table-bordered" id="posts">
       <thead>
          <tr>
             <th>Id</th>
             <th>Title</th>
             <th>Description</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($posts): ?>
          <?php foreach($posts as $post): ?>
          <tr>
             <td><?php echo $post['id']; ?></td>
             <td><?php echo $post['title']; ?></td>
             <td><?php echo $post['description']; ?></td>
             <td>
              <a href="<?php echo base_url('posts/edit/'.$post['id']);?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?php echo base_url('posts/delete/'.$post['id']);?>" class="btn btn-sm btn-danger">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
</div>