<?php
include"../config.php";

date_default_timezone_set("Asia/Kolkata");


ob_start();

session_start();

   unset($_SESSION['id']);

     if(isset($_POST['login']))

          {

		  $email=mysqli_real_escape_string($connection,$_POST['email']);

		 $psd=mysqli_real_escape_string($connection,$_POST['psd']);


		$cus_login="SELECT * FROM users WHERE userName='".$email."' and password='".md5($psd)."' and status='Active' and utype='ramfin-corp'";

                 
                $cus_run=mysqli_query($connection,$cus_login);

				$count=mysqli_num_rows($cus_run);


		         if($count=='1')

				    {

                  $row=mysqli_fetch_array($cus_run);
                   
				   //echo $row['email'];
				  // die();
				    
			  $_SESSION['email']=$row['email'];
			  $_SESSION['name']=$row['name'];
			   

		     $_SESSION['id']=$row['userID'];
			  $_SESSION['type']=$row['role'];
			     
                        // echo $_SESSION['id'];
					
				//$ldsv=mysqli_query($connection,"insert loginLogs set userID='".$row['userID']."',name='".$row['name']."',email='".$row['email']."',ip='".$_SERVER['REMOTE_ADDR']."',loginStart='".date("Y-m-d h:i:s")."',loginEnd=''");	
					
					//$logID=mysqli_insert_id($connection);
					
					//$_SESSION['logID']=$logID;
	
	
						
			       header("location:https://www.ramfincorp.com/newcrm/dashboard.php");
					}

					else

					{

					//header("location:index.php?error");

					echo "<script> window.location.href='index.php?error'; </script>";



					}

               }

	

	?>