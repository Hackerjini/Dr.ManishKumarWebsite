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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="">
        <style>
                table {
    border-collapse: collapse;
    margin: auto;
}

th,
td {
    border: 1px solid;
    padding: 8px 20px;
    text-align: center;
}
        </style>
    </head>
    <body>
    <!-- <p class="hd">Dr.Manish Kumar</p> -->
    <div class="topnav" id="myTopnav">
    <a class="navbar-brand " href="https://www.iiita.ac.in/">
    <img src="iiitalogo.jpg" alt="logo" style="width:40px; height:40px; margin-top:-10px; margin-bottom:-15px">
  </a>
  <a href="home.php" >Home</a>
  <a href="education.php">Education</a>
  <a href="invited.php">Invited Talks</a>
  <a href="publication.php">Publication</a>
  <a href="work.php">Work Experience</a>
  <a href="student.php" class="active">Students</a>
  <a href="project.php">Projects</a>
  <a href="courses.php">Courses</a>
  <a href="activities.php">Professional Activites</a>
  <a href="resume.php">Resume</a>
  <a href="personal.php">Personal Info</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="overlay3">
    <div class="container-fluid">
        <div class="row">
        <p style="font-size: 20px;"><b>PhD Students</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from currentstudents"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="4"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td rowspan="4"><?php echo '<img src="data:image;base64,'.base64_encode($res['image']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>
                <tr>
                    <td><?php echo "Enrollment Number" ?></td>
                    <td><?php echo $res['EnrollmentYear']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<p style="font-size: 20px;"><b>M.Tech Students</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from mtech"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="3"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['Name']; ?></td>
                    <td rowspan="3"><?php echo '<img src="data:image;base64,'.base64_encode($res['image']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>

                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<p style="font-size: 20px;"><b>Graduated 2018</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from cand2018"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="3"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['Name']; ?></td>
                    <td rowspan="3"><?php echo '<img src="data:image;base64,'.base64_encode($res['images']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>

                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>


<p style="font-size: 20px;"><b>Graduated 2017</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from cand2017"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="3"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['Name']; ?></td>
                    <td rowspan="3"><?php echo '<img src="data:image;base64,'.base64_encode($res['images']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>

                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>


<p style="font-size: 20px;"><b>Graduated 2016</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from cand2016"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="3"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['Name']; ?></td>
                    <td rowspan="3"><?php echo '<img src="data:image;base64,'.base64_encode($res['images']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>

                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>


<p style="font-size: 20px;"><b>Graduated 2015</b></p>
<div class="main-div">
    <div class="table-responsive">
        <table>
            <thread>
            </thread>
            <tbody>

           <?php
            include 'connection.php' ; 
            $selectquery ="select * from cand2015"; 
            $query=mysqli_query($con,$selectquery); 
            $nums=mysqli_num_rows($query); 
            $i=1;
            while($res=mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td rowspan="3"><?php echo $i ?></td>
                    <td ><?php echo "Name" ?></td>
                    <td><?php echo $res['Name']; ?></td>
                    <td rowspan="3"><?php echo '<img src="data:image;base64,'.base64_encode($res['image']).'" alt="Image" style="width: 100px; height: 100px;" >';?></td>
                </tr>

                <tr>
                    <td><?php echo "Thesis Title" ?></td>
                    <td><?php echo $res['ThesisTitle']; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Email" ?></td>
                    <td><?php echo $res['Email']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>

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