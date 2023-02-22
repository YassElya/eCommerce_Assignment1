<html>
    <body>
        <head>
        <title>Edit User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <h1>Edit profile</h1>
        <?php 
        require(dirname(__DIR__)."\models\user.php");
        $id=$_GET['id'];
        $user=new User();
        $user1=$user->getById($id);
          if(isset($_POST['update'])){
          $editedUser=new User($id,$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['email']);
          $result=$editedUser->update();
          if($result){
            header('location:index.php');
          }else{
            echo "Error!";
          }
        }
        ?>
    <form class="needs-validation" method="post" novalidate>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name:</label>
      <input type="text" class="form-control" name="fname" value="<?= $user1[0]['fname']?>" autocomplete="off" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Last name:</label>
      <input type="text" class="form-control" name="lname" value="<?= $user1[0]['lname']?>" autocomplete="off" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Phone:</label>
      <input type="text" class="form-control" name="phone" value="<?= $user1[0]['phone']?>" autocomplete="off" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Email:</label>
      <input type="email" class="form-control" name="email" value="<?= $user1[0]['email']?>" autocomplete="off" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <button class="btn btn-primary" type="submit" name="update">Update</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    </body>
</html>