<?php
session_start();
require_once('configure.php');
if(!isset($_COOKIE["currentAdmin"])){
  header("location:login.php");
}
?>
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
   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
  </head>
  <body>
  <section class="header">

<a href="home.php" class="logo">চলো ঘুরতে যাই</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
   <a href="book.php">book</a>
   <a href="logout_core.php">Logout</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<section>
    <h1 class='text-center'>DASHBOARD</h1>
</section>
<div class='container'>
    <div class='bookingList'>
    <span class=''>Booking List <i class="fa-solid fa-chevron-down"></i></span>
    </div>
</div>
<section>
    <div class='tableSection'>
    <table class="table table-bordered text-">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">where to</th>
      <th scope="col">how many</th>
      <th scope="col">arrivals</th>
      <th scope="col">leaving</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      
    $selectQuery="SELECT * FROM `booking_info`";
    $runQuery=mysqli_query($con,$selectQuery);
    while($row=mysqli_fetch_assoc($runQuery)){?>
        <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['guests']?></td>
      <td><?php echo $row['arrivals']?></td>
      <td><?php echo $row['leaving']?></td>
      <td><a class='btn btn-danger' href='delete_main.php?id=<?php echo $row['id']?>'>Delete</a></td>
    </tr>

    <?php

    }
      
    ?>
  </tbody>
</table>
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