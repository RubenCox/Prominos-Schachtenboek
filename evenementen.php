<!DOCTYPE html>
<html lang="en">
  <?php
	include "html/head.html";
  ?>
      <!-- Placed at the end of the document so the pages load faster -->


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
                        if($user['Admin'] > 9)
                            include 'html/logout_nav_admin.html';
                        else
                            include 'html/logout_nav.html';
					
						if(isset($_GET['edit'])){
							include 'html/success_edit_evenement.html';
						}
						if(isset($_GET['add'])){
							include 'html/success_new_evenement.html';
						}

						
						include 'php/evenementen/evenementen_info.php';
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
                            if($user['Admin'] > 9)
                                include 'html/logout_nav_admin.html';
                            else
								include 'html/logout_nav.html';
                            include 'html/success_login.html';
							
							
							if(isset($_GET['edit'])){
							include 'html/success_edit_evenement.html';
							}
							if(isset($_GET['add'])){
								include 'html/success_new_evenement.html';
							}
                            include 'php/evenementen/evenementen_info.php';
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
