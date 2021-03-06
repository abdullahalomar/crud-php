<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <title>crud-operation</title>
  </head>
  <body>
  <div class="text-center mt-5 ">
    <h1 class="hearder-text">CRUD <span>OPERATION</span></h1>
    </div>
  <div class="container">
      <button  class="btn btn-primary btn-lg my-5"><a href="user.php" id="add-user" class="text-light">Add User</a></button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="table-dark">Id</th>
      <th scope="col" class="table-dark">Name</th>
      <th scope="col" class="table-dark">Email</th>
      <th scope="col" class="table-dark">Password</th>
      <th scope="col" class="table-dark">Operation</th>
    </tr>
  </thead>
  <tbody>
 <?php
 
 $sql = "select * from `crud`";
 $result = mysqli_query($con,$sql);
 if ($result) {
     while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        echo '<tr>
        <th scope="row" class="table-warning">'.$id.'</th>
        <td class="table-primary">'.$name.'</td>
        <td class="table-danger">'.$email.'</td>
        <td class="table-secondary">'.$password.'</td>
        <td>
        <button class="btn btn-outline-success"><a href="update.php? updateid='.$id.'" class="update-button text-dark  ">Update</a></button>
        <button class="btn btn-outline-danger"><a href="delete.php? deleteid='.$id.'" class="delete-button text-dark ">Delete</a></button>
        </td>
      </tr>';
     }
 }

 ?>
     
  </tbody>
</table>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>