<html>
    <body>
      <head>
      <title>Home page</title>  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      </head>  

<?php
$user = new User();
$users = $user->getAll();

?>
<h1><center>Listing page</center></h1>
<table class="table table-striped">
        <th>First name</th>
        <th>Last name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Edit</th>
    <?php
    foreach($users as $item):?>
                <tr>
                <td><?=$item['fname']?></td>
                <td><?=$item['lname']?></td>
                <td><?=$item['phone']?></td>
                <td><?=$item['email']?></td>
                <td><a href="index.php?resource=user&resourceid=<?=$item['id']?>&action=edit" class='btn btn-success'>Edit</a></td>
                </tr><?php
    endforeach;?>
    </body>
</html>
