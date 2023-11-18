<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>table</title>
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">categorie</th> 
    </tr>
  </thead>
  <?php
           require "connection.php";
           $sql = "SELECT * FROM contact";
           $result = $conn->query($sql); //tatmchi l dataabse o tat execute sql
           if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
           ?>
  <tbody>

    <tr>
      <th scope="row"><?php  echo $row['id'] ?></th>
      <td><?php  echo $row['firstname'] ?></td>
      <td><?php  echo $row['lastname'] ?></td>
      <td><?php  echo $row['email'] ?></td>
      <td><?php  echo $row['catégorie'] ?></td>
    </tr>
  </tbody>
  <?php }
           }
           ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>