    
    <?php
    include 'connect.php';
    if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $password=md5($_POST['password']);

      $sql ="INSERT INTO `crud`(name, email, mobile, password) VALUES('$name' , '$email' , '$mobile' , '$password')";
      if(mysqli_query($con, $sql)){
        header('location:display.php');
    } else{
        echo "error";
    }

    }
    
    ?>
    
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>crud</title>
    </head>
    <body>
            <!-- <h1 {text-align: center;}>crud opration</h1> -->
            <div class="container my-5">
            <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name"name="name" autocomplete="off"placeholder="enter your name">

            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email"  autocomplete="off" placeholder="enter your email">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile"  autocomplete="off" placeholder="enter your number">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"  autocomplete="off" placeholder="enter your password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
    </html>