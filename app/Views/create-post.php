<div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
    <h1 class="center">Add a blog Post</h1>
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo base_url('posts/store'); ?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title">
          </div>
          <div class="form-group">
            <label for="email">Description</label>
            <textarea class="form-control" name="description" id="email" rows="3" placeholder="Please enter description"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    if ($("#post_form").length > 0) {
      $("#post_form").validate({
        rules: {
          title: {
            required: true,
          },
          description: {
            required: true,
          },
        },
        messages: {

          title: {
            required: "Please enter title",
          },
          description: {
            required: "Please enter description",
          },
        },
      })
    }
  </script>
