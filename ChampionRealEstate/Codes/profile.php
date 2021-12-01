<?php 
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

////// code
$error='';
$msg='';
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$content=$_POST['content'];
	
	
	if(!empty($name) && !empty($phone) && !empty($content))
	{
		
		$sql="INSERT INTO feedback (fname,fcontact,fdescription) VALUES ('$name','$phone','$content')";
        
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Feedback Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">

<!--	Title
	=========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        
		<?php include("include/header.php");?>
    
         <div class="banner-full-row page-banner" style="background-color: #181C21">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Profile</b></h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary text-center">Profile</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                    <form action="#" method="post">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback Form</h5>
				
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="user-id">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>                
                                
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone"  class="form-control" placeholder="Enter Phone" maxlength="10">
                                </div>

                                <div class="form-group">
                                    <label for="about-me">Description</label>
                                    <textarea class="form-control" name="content" rows="7" placeholder="Enter Description"></textarea>
                                </div>
                                <input type="submit" class="btnMg" name="insert" value="Send">
                            </div>
						
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 col-md-12">
								<?php 
									$uid=$_SESSION['uid'];
									$query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                                <div class="user-info mt-md-50"> 
                                
                                     <div class="col-lg-12 mb-5 " style="background-color: #222222">
                        <div class="contact-info">
                            <h3 class="m-4  pt-4 text-white">Personal Deails</h3>
							
                            <ul>
                                <li class="mb-4">
                                    <div class="contact-address p-4">
                                        <h5 class="text-white">Name</h5>
                                        <div class="mb-1 text-capitalize text-white">
                                            <?php echo $row['1'];?>
                                        </div>
                                        
                                        <h5 class="text-white">Email</h5>
                                        <div class="mb-1 text-capitalize text-white">
                                            <?php echo $row['2'];?>
                                        </div>
                                        
                                        <h5 class="text-white">Phone</h5>
                                        <div class="mb-1 text-capitalize text-white">
                                            <?php echo $row['3'];?>
                                        </div>
                                        
                                        <h5 class="text-white">Role</h5>
                                        <div class="mb-1 text-capitalize text-white">
                                            <?php echo $row['5'];?>
                                        </div>
                                        
										</div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                                    
                                    
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </form>
                
                    
                </div>            
            </div>
        </div>
	
        
		<?php include("include/footer.php");?>
  
    </div>
</div>


</body>
</html>