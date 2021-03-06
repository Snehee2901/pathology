<?php
    session_start();
    include 'connection.php';
    $as="SELECT * FROM patient";
    $ab=mysqli_query($conn,$as);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Patients</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
    <style type="text/css">
        .navbar-dark{
            background-color: black;
        }

        .nav-item{
            margin-left: 15px;
            margin-right: 15px;
        }
        .nav{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.html" class="navbar-brand mr-auto"><img src="img/stethescope.jpg" height="30" width="51"></a>
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto col-md-9">
               <li class="nav-item"><a href="<?php echo $a?>" class="nav-link">Home</a></li>
               <li class="nav-item "><a href="about.html" class="nav-link">About Us</a></li> 
               <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li> 
               <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li> 
               <!--li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li--> 
               
            </ul>
            <ul class="navbar-nav mr-auto col-md-9">
                 <ul class="nav navbar-right">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" data-toggle="dropdown">My Profile</a>
                  <div class="dropdown-menu">
                    <a href="account.php" class="dropdown-item">View Profile</a>
                    <a href="edit_temp.html" class="dropdown-item">Edit Profile</a>
                    <a href="delete.php" class="dropdown-item">Delete Profile</a>
                  </div>
                </li>
                <li class="nav-item" style="float: right;"><a href="logout.php" class="nav-link">Logout</a></li>
                <div class="col-sm-2 d-none d-lg-block appoint">
                        <button class="btn btn-info">Book Appointment</button>
                   </div>
            </ul>
          </ul>
        </div>
        </div>
        
    </nav>
<br><br><br>
<h1 align="center">View Patients</h1>
  
<table class="table table-bordered">
<tr>
    <th>Pid</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
</tr>

<?php
    if ($ab) {
        while ($row=mysqli_fetch_assoc($ab)) {
            $pid = $row["pid"];
            $name = $row["name"];
            $email = $row["email"];
            $phone= $row["phone"];?>
        <tr> 
                   <td><?php echo $pid?></td>
                  <td><?php echo $name?></td>
                  <td><?php echo $email?></td>
                  <td><?php echo $phone?></td>
                 
          </tr>
<?php
}
}
?>
</table><br><br>
<form action="add.php" method="POST" style="text-align: center;"><input type="submit" name="add" value="Add"  class="btn btn-primary"></form><br>
 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        A One Labs is a leading pharma company at which we provide the patients with maximum facilities and reducing expenses. 
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global pharmacy. </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Marthandam (K.K District) <br>
                        Tamil Nadu, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">aonelabs@bluedart.in</a><br>
                        Web: <a href="#" class="">www.aonelabs.in</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>