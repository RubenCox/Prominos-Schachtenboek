<?php
                    ob_start();
                    require_once 'medoo.min.php';
					
					if(isset($_POST['myUsername'], $_POST['myPassword']))
                    {
                        $database = new medoo();

                        $username = $_POST['myUsername'];
                        $password = $_POST['myPassword'];

                        /* Check for correct username and password */
                        $dblogin = $database->count("Schachtenmeesters", [
                                    "AND" => [
                                    "LoginNaam" => $username,
                                    "LoginWachtwoord" => $password
                                    ]]);

                        /* Incorrect username and / or password */
                        if($dblogin == 0)
                        {
							header("location:../index.php");
							echo "Wrong Username or Password";
							
                        }
                        else
                        {
							$_SESSION['username'] = $username;
                            $_SESSION['password'] = $password;
							
							header("location:login_success.php");                           
                        }
                    }
                    /* User has not logged in yet and has not send any post data */
                    else
                    {
                        header("location:../index.php");
                    }
					ob_end_flush();
                ?>