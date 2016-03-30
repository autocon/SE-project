<?php
  session_start();
  if($_SESSION['sid']!=session_id())
  {
    header("location:signin.php");
  }
   $conn=new mysqli("localhost","root","","icdcit");
  if ($conn->connect_error) {
    die("Error");
  }
  $name;
  $query="select * from student where email='rajat@gmail.com';";
  $res=$conn->query($query);
  if($res->num_rows==0){
    echo "Nothing Found";
  }else{
    while ($row=$res->fetch_array(MYSQLI_ASSOC)) {
      $name=$row['name'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap2.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div id="wrap">

  <div id="main">

    <!-- Navigation Bar starts! -->

        <nav class="navbar navbar-default" style="margin: 0px">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><span style="font-family: 'Lobster', cursive;">13<sup>th</sup></span><span style="font-family: 'Ubuntu', sans-serif;"> International Conference on Distributed Computing and Internet Technology</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><button type="button" class="btn btn-default navbar-btn btn-danger"><a href="logout.php" style="color: white">Log Out</a></button></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <!-- Navigation Bar ends! -->

        <div id="container">
          <div id="row">
            <div class="col-lg-3" style="margin-left: -75px">
              <div class="well well-md" style="margin-top: 10px;margin-bottom: 10px;">
                  <img src="image.jpg" alt="..." class="img-thumbnail" style="width: 200px;height: 200px;float: none;margin-left: 50px">
                  <h4 style="margin-left: 50px;margin-top: 20px"><?php echo $name; ?></h4>
                  <ul class="nav nav-pills nav-stacked" style="margin-left: 50px;margin-top: 20px">
                    <li role="presentation"><a href="studenthome.php">Home</a></li>
                    <li role="presentation" class="active"><a href="studentprofile.php">Profile</a></li>
                    <li role="presentation"><a href="studentattendance.html">Attendance</a></li>
                    <li role="presentation"><a href="studentdownloads.html">Downloads</a></li>
                    <li role="presentation"><a href="studentshop.html">Shop</a></li>
                    <li role="presentation"><a href="studentquery.html">Query and FAQ</a></li>
                    <li role="presentation"><a href="studentfeedback.html">Feedback</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="panel panel-default panel-success" style="margin-top: 20px">
                  <div class="panel-heading">
                    <h3 class="panel-title ">Live Feed</h3>
                  </div>
                  <div class="panel-body">
                      <div class="media" >
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/kiit.svg" alt="..." style="width: 50px;height: 50px">
                          </a>
                        </div>
                        <div class="media-body" >
                          <h4 class="media-heading">Team ICDCIT</h4>
                          Make merry with colors on Holi and rest of the days with color of love. Happy Holi !!
<a>#HOLI #ICDCIT http://fb.me/7ZQeyz2mj </a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/team/romsha.jpg" alt="..." style="width: 50px;height: 50px">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Romsha</h4>
                          A very informative talk delivered by our speaker <a>@ShriramKMurthi.</a> He will be delivering a tutorial at 6:00 P.M IST. Join us. <a>>#icdcit</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/team/satya.jpg" alt="..." style="width: 50px;height: 50px">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Satya</h4>
                          Feeling Inspired <a>#ICDCIT</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="img/kiit.svg" alt="..." style="width: 50px;height: 50px">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Team ICDCIT</h4>
                          The Evening Session is going to be held in Seminar Hall - 2 near Kunjaban. We will start by 2:30p.m after lunch.
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="asaf.png" alt="..." style="width: 50px;height: 50px">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Assaf Schuster</h4>
                          Great People! Great Conference! Great Time! <a>#LovingIndia</a>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="panel panel-default panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">Post on Feed!</h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-inline">
                      <div class="form-group">
                        <textarea class="form-control" rows="3" style="width: 800px;float: none" ></textarea>
                      </div>
                      <button type="submit" class="btn btn-default btn-success" style="margin-left:10px ">Post</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
       
  </div>

  </div>

  <div id="footer">

      <!-- Footer Starts -->

     <footer class="footer" style="float: none;margin-top: 10px;align-content: left">
      <div class="container">
       <p><span class="text-muted pull-left" style="text-align: left;align-content: center;">© Copyrights ICDCIT 2017. All Rights Reserved</span>

                                                                        <span class="text-muted pull-right" style="text-align: right;">Website Designed and Maintained by KIIT University</span></p>
      </div>
    </footer>

    <!-- Footer Ends -->

  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>