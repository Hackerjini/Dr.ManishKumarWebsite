<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <!-- <p class="hd">Dr.Manish Kumar</p> -->
    <div class="topnav" id="myTopnav">
    <a class="navbar-brand " href="https://www.iiita.ac.in/">
    <img src="iiitalogo.jpg" alt="logo" style="width:40px; height:40px; margin-top:-10px; margin-bottom:-15px">
  </a>
  <a href="home.php" >Home</a>
  <a href="education.php" >Education</a>
  <a href="invited.php" >Invited Talks</a>
  <a href="publication.php"  >Publication</a>
  <a href="work.php" class="active">Work Experience</a>
  <a href="student.php">Students</a>
  <a href="project.php">Projects</a>
  <a href="courses.php">Courses</a>
  <a href="activities.php">Professional Activites</a>
  <a href="resume.php">Resume</a>
  <a href="personal.php">Personal Info</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="overlay2" style="padding-bottom:300px; padding-top:50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12" style="font-size:18px;" >
            <p style="font-size:25px;"><b>Work Experience</b></p>
            <?php     
      
       include 'connection.php' ; 
       $selectquery ="select * from workexperience"; 
       $query=mysqli_query($con,$selectquery); 
       $nums=mysqli_num_rows($query); 
       $i=1;
       while($res=mysqli_fetch_array($query)) 
       { 
           echo "(".$i.") ".$res['workExperience']."<br><br>";
           $i++;
       }
       ?>
            </div>           
        </div>
</div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
        
        <script src="" async defer></script>
    </body>
</html>