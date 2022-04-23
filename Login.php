

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- google font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <style>
   #popup {
   margin-top: 15px;
   font-size: 13px;
   color: red;
   text-align: center;
   }
    </style>
  </head>
  <body>
  <section class="header">

<a href="home.php" class="logo">চলো ঘুরতে যাই</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
   <a href="book.php">book</a>
   <a href="login.php">Login</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<section>
    <h1 class='text-center'>LOGIN</h1>
</section>

<section>
    <div class='container'>
        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
                
            <form action='login_core.php' method='post'>
                <div class="form-group">
                    <label class="exampleInput">Email address</label>
                    <input type="email" name='email' class="form-control" style="text-transform: none;" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="exampleInput">Password</label>
                    <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
            <div id='popup'>
            <?php
                if(isset($_REQUEST['wrong'])){
                    echo "Email Or Password Wrong !";
                }
            ?>
            </div>
            </div>
            <div class='col-md-4'></div>
        </div>
    </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!-- swiper js link  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>