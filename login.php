<?php
 
session_start();
 
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';
require 'lib/password.php';
date_default_timezone_set('Asia/Manila');
if(isset($_POST['login'])){
    
    //Retrieve the field values from our login form.
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Retrieve the user account information for the given username.
    $sql = "SELECT User_id, Username, Password, Position FROM users WHERE STATUS = 'Active' AND Username = :username";
    $stmt = $db->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user
        echo "<script>alert('Incorrect username')</script>";
    } else{
        $valid = password_verify($password, $user['Password']);
        
        //If $validPassword is TRUE
        if($valid){

            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['User_id'];
            $_SESSION['position'] = $user['Position'];
            $_SESSION['logged_in'] = time();
            $log_id = $user['User_id'];

            //provide login logs for the system
            $fetch = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$log_id'";
            $stmtq = mysql_query($fetch);
            $res = mysql_fetch_array($stmtq);

            $date = date('Y-m-d H:i:s');
            $Fullname = $res['Fullname'];
            $postion = $res['Position'];
            $Act = "Logged in the system";

            $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
                $stmt->bindParam(1,$log_id);
                $stmt->bindParam(2,$Fullname);
                $stmt->bindParam(3,$date);
                $stmt->bindParam(4,$postion);
                $stmt->bindParam(5,$Act);
                $stmt->execute();

            //Redirect to protected page
            header('Location: index.php');
            exit;
            
        } else{
            //Passwords do not match.
            echo "<script>alert('incorrect password')</script>";
        }
    }
    
}
 
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Healthcare Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
    <div class = "#">
        <div class = "text-center">
        <h2 style = "color:white;"><b>SAINT EZEKIEL MORENO</b> <br><span style = "color:yellow;">HEALTHCARE MANAGEMENT SYSTEM</span></h2>
        </div>
      <form class="form-signin" action="login.php" method="POST">
        <h2 class="form-signin-heading"><strong>login</strong></h2>
        <div class="login-wrap">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="" autofocus >
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
            <label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" name="login" type="submit">Sign in</button>
        </div>

      </form>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Please contact the administrator to recovery account.</p>
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-success" type="button">Okay</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
