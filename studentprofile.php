<?php
  $conn=new mysqli("localhost","root","","icdcit");
  if ($conn->connect_error) {
    die("Error");
  }
  $name;
  $num;
  $institute;
  $address;
  $query="select * from student where email='rajat@gmail.com';";
  $res=$conn->query($query);
  if($res->num_rows==0){
    echo "Nothing Found";
  }else{
    while ($row=$res->fetch_array(MYSQLI_ASSOC)) {
      $name=$row['name'];
      $num=$row['num'];
      $institute=$row['institute'];
      $address=$row['address'];
    }
  }
    $query="UPDATE student SET name='Rajat Das' where email='rajat@gmail.com';";
    $stmt=$conn->prepare($query);
    $stmt->execute();
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
                <li><button type="button" class="btn btn-default navbar-btn btn-danger"><a href="index.html" style="color: white">Log Out</a></button></li>
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
                  <h4 style="margin-left: 50px;margin-top: 20px">Student</h4>
                  <ul class="nav nav-pills nav-stacked" style="margin-left: 50px;margin-top: 20px">
                    <li role="presentation"><a href="studenthome.php">Home</a></li>
                    <li role="presentation" class="active"><a href="#">Profile</a></li>
                    <li role="presentation"><a href="studentattendance.html">Attendance</a></li>
                    <li role="presentation"><a href="studentdownloads.html">Downloads</a></li>
                    <li role="presentation"><a href="studentshop.html">Shop</a></li>
                    <li role="presentation"><a href="studentquery.html">Query and FAQ</a></li>
                    <li role="presentation"><a href="studentfeedback.html">Feedback</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-lg-9">
                <div class="well well-lg" style="margin-top: 30px">
                <h1 style="margin-bottom: 20px">Profile</h1>
                    <form id="form" method="post" action="studentprofile.php"class="form-horizontal">
                    <fieldset id="field" disabled>
                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value=<?php echo $name; ?>>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputContact3" class="col-sm-2 control-label">Mobile Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputContact3" value=<?php echo $num; ?>>
                  </div>
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Profile Picture</label>
                  <input type="file" id="exampleInputFile" style="display: inline-block;margin-left:18px ">
                </div>-->
                <div class="form-group">
                  <label for="inputInstitution3" class="col-sm-2 control-label">Institution</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputInstitution3" value=<?php echo $institute; ?>>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress3" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="inputAddress3"><?php echo $address; ?></textarea>
                  </div>
                 </div>
                 </fieldset>
                 <div class="form-group" style="margin-top: 10px">
                  <div class="col-lg-offset-3 col-lg-1">
                    <button type="submit" id="save" name="submit" value="submit" disabled class="btn btn-default btn-primary">Save Changes</button>
                  </div>
                  <div class="col-lg-offset-3 col-lg-1">
                    <button type="submit" id="edit" name="submit" class="btn btn-default btn-primary">Edit Profile</button>
                  </div>
                 </div>                
                </form>
              </div>
            </div>
          </div>
        </div>
       
  </div>

  </div>
  <script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
  document.getElementById('form').addEventListener('submit',check);
  function check(e){
    e.preventDefault();
    document.getElementById("field").disabled = false;
    document.getElementById("save").disabled = false;
    document.getElementById('form').addEventListener('submit',check1);
    function check1(e){
      e.preventDefault();
      document.getElementById("save").disabled = true;
      document.getElementById("field").disabled = true;
      alert("Profile Updated!");
    }
  }
</script>
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