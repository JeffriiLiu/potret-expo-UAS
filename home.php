<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: login-user.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Potret</title>
      <link rel="stylesheet" href="home.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     
   </head>
     
   <body>
      <nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
           Potret
         </div>

         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>

         <form method="post" action="">
            <input type="text" name="keyword" placeholder="Search">
            <button type="submit" class="fas fa-search" name="cari"></button>
         </form>
      
         <div class="nav-items">
            <div class="upload">
               <li><a href="form.php">Upload Image</a></li>
            </div>
            <li><a class="active" a href="home.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a onclick="return confirm('Are you sure?');"
             href="login-user.php" class="geser">Logout</a></li>        
         </div>
      </nav>

      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>

<div class="flex-container"> 
<?php
$sgambar = query("SELECT * FROM gambar");
   if(isset($_POST ["cari"])) {
   $sgambar = cari($_POST["keyword"]);
   }
?>

<?php foreach( $sgambar as $gam) : ?>
<div class="flex-item">
   <img src="images/<?php echo $gam["nama"]; ?>"/>
</div>

<?php endforeach; ?>

</div>

<!-- <footer>Copyrights © 2022 by Potret</footer> -->

   </body>
</html>