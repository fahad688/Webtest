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
  <h2>Basic Table</h2>
  <a href="<?= base_url() ?>Ajax_practise/index"><input type="button" class="btn btn-info" value="Add New" name=""></a>
              
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>email</th>
        <th>pasword</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($query->result() as $row) 
    {
       $name=$row->name;
       $email=$row->email;
       $pwd=$row->pwd;
     
     ?>
      <tr>
        <td><?= $name ?></td>
        <td><?= $email ?></td>
        <td><?= $pwd ?></td>
        <td>
         <a href="<?= base_url() ?>Ajax_practise/update?upd=<?= $row->id ?>"><input type="button" class="btn btn-success" value="update" name=""></a>
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>