<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <a href="<?= base_url() ?>Ajax_practise/manage"><input type="button" class="btn btn-info" value="Mange" name=""></a>
  <form action="/action_page.php">
   <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" id="btn_save" class="btn btn-default">Submit</button>
  </form>
</div>



<script type="text/javascript">
$(document).ready(function(){

          $('#btn_save').on('click',function(){
            var name = $('#name').val();
            var email = $('#email').val();
            var pwd        = $('#pwd').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ajax_practise/save')?>",
                dataType : "JSON",
                data : {name:name , email:email, pwd:pwd},
                success: function(data){
                    $('[name="name"]').val("");
                    $('[name="email"]').val("");
                    $('[name="pwd"]').val("");
                    alert('Data has been Added Successfully');
                }
            });
            return false;
        });

          });
</script>