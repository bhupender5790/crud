<?php
 include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>crud opration</title>
</head>
<body>
    
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php"class="text-light">add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">oprations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "SELECT * FROM `crud`";
    $result=mysqli_query($con, $sql);
        if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            
           echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td><'.$password.'</td>
             <td>
                <button class="btn btn-primary"><a href="update.php?
                updateid='.$id.'"class="text-light">update</a></button>
                <button class="btn btn-danger"><a href="delete.php?
                deleteid='.$id.'"class="text-light">delete</a></button>
            </td>
          </tr>';

        }
    }
?>
   
  </tbody>
</table>

</div>


</body>
</html>