<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['student_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

   <a href="student.php" class="logo">Skill Boost</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php echo $_SESSION['student_name'] ?></h3>
         <p class="role">Student</p>
         <a href="profile.php" class="btn">view profile</a>
         <a href="../logout.php" class="btn">Log Out</a>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $_SESSION['student_name'] ?></h3>
      <p class="role">Student</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="student.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="teachers">

   <h1 class="heading">expert teachers</h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box offer">
         <h3>become a tutor</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, itaque ipsam fuga ex et aliquam.</p>
         <a href="../register.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Gouransh Agrawal</h3>
               <span>Full Stack Developer</span>
            </div>
         </div>
         <p>total playlists : <span>2</span></p>
         <p>total videos : <span>20</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile_gouransh.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Heeral Gandhi</h3>
               <span>Backend Developer</span>
            </div>
         </div>
         <p>total playlists : <span>2</span></p>
         <p>total videos : <span>20</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile_heeral.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Eshita Upadhyaya</h3>
               <span>Frontend Developer</span>
            </div>
         </div>
         <p>total playlists : <span>1</span></p>
         <p>total videos : <span>10</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile_eshita.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Aryan Jha</h3>
               <span>Frontend Developer</span>
            </div>
         </div>
         <p>total playlists : <span>1</span></p>
         <p>total videos : <span>10</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile_aryan.php" class="inline-btn">view profile</a>
      </div>

      

      
      

   </div>

</section>








<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>