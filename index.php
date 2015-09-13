<!DOCTYPE html>
<html lang="en">
  <?php
	include "html/head.html";
  ?>

  <body onload="start();">

  

<?php
                    session_start();
                    require_once 'php/medoo.min.php';
                    $database = new medoo();
                    /* Check if user is previously logged in */
                    if(isset($_SESSION['username'], $_SESSION['password']))
                    {
                        $user = $database->get(
                                    "Schachtenmeesters", "*", [
                                    "AND" => [
                                    "LoginNaam" => $_SESSION['username'],
                                    "LoginWachtwoord" => $_SESSION['password']
                                    ]]);
                       $admin = $database->get("Schachtenmeesters", "Admin", [
									"LoginNaam" => $_SESSION['username']
								]);
                        include 'html/logout_nav.html';
							if($_SESSION['username'] == 'Admin')
                                include 'home_admin.php';
                            else
								include 'home.php';
                    }
                    /* User is not logged in yet */
                    /* Check if any post data is send */
                    else if(isset($_POST['myUsername'], $_POST['myPassword']))
                    {
                        $database = new medoo();

                        $username = $_POST['myUsername'];
                        $password = md5($_POST['myPassword']);

                        /* Check for correct username and password */
                        $dblogin = $database->count("Schachtenmeesters", [
                                    "AND" => [
                                    "LoginNaam" => $username,
                                    "LoginWachtwoord" => $password
                                    ]]);

                        /* Incorrect username and / or password */
                        if($dblogin == 0)
                        {
                            include 'html/login_nav.html';
                            include 'html/failed_login.html';
                            include 'html/login.html';
                        }
                        else
                        {
                            $_SESSION['username'] = $username;
                            $_SESSION['password'] = $password;

                            $user = $database->get(
                                    "Schachtenmeesters", "*", [
                                    "AND" => [
                                    "LoginNaam" => $username,
                                    "LoginWachtwoord" => $password
                                    ]]);
							$admin = $database->get("Schachtenmeesters", "Admin", [
									"LoginNaam" => $_SESSION['username']
								]);
							include 'html/logout_nav.html';
                            include 'html/success_login.html';
                            
							if($_SESSION['username'] == 'Admin')
                                include 'home_admin.php';
                            else
								include 'home.php';
							
                        }
                    }
                    /* User has not logged in yet and has not send any post data */
                    else
                    {
                        include 'html/login_nav.html';
                        if(isset($_GET['regOk']))
                        {
                            include 'html/regOk.html';
                        }
                        include 'html/login.html';
                    }
                ?>

  <?php
	include "html/footer.html";
  ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
