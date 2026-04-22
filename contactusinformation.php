<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" href="hlogo.png" type="image/x-icon">
</head>
<body>
   <div class="container my-5">
   <a href="display.php" class="btn btn-primary">Main Page</a>
    </div>
    <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Destination</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

<?php
$sql="select * from users2";
$result=mysqli_query($con,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $email=$row['Destination'];
    $sex=$row['message'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$sex.'</td>
    <td>
    <a href="deletemessage.php? deleteid='.$id.'" class="btn btn-danger">Delete</a>
    </td>
  </tr>';
   }
}
?>
</div> 
</body>
</html>