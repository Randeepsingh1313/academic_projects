<?php 
session_start();
include("config.php");

$error='';
$msg='';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $subject=$_POST['subject'];
	$mssg=$_POST['mssg'];
	
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($mssg))
	{
		
		$sql="INSERT INTO contact (u_name,email,phone,m_subject,message) 
              VALUES ('$name','$email','$phone','$subject','$mssg')";
        
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback Send Successfully</p> ";
               echo "Send";              
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Feedback Not Send Successfully</p> ";
                echo "Not Send";
               
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}								
?>
<html lang="en">
<head>

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Champion Real Estate</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 

		<?php include("include/header.php");?>
     
        <div class="banner-full-row page-banner" style="background-color: #181C21">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact</b></h2>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5" style="background-color: #222222">
                        <div class="contact-info">
                            <h3 class="mb-4 mt-4 text-white">Contacts</h3>
							
                            <ul>
                                <li class="mb-4">
                                    <div class="contact-address">
                                        <h5 class="text-white">Address</h5>
                                        <span class="text-secondary">15 Arcadia Road</span> 
										</div>
                                </li>
                                <li class="mb-4">
                                    <div class="contact-address">
                                        <h5 class="text-white">Call Us</h5>
                                        <span class="d-table text-secondary">+1 (437) 989 5713</span>
									</div>
                                </li>
                                <li class="mb-4">
                                    <div class="contact-address">
                                        <h5 class="text-white">Email Adderss</h5>
										<span class="d-table text-secondary">helpline@championrealestate.com</span>
										</div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-1"></div>
                    <div class="col-md-12 col-lg-7">
						<div class="container">
                        <div class="row">
							<div class="col-lg-12">
								<h2 class="text-secondary text-center mb-5">Get In Touch</h2>
                                
                               
				
							</div>
						</div>
					<div class="row">
							<div class="col-md-12">
								<form class="w-100" action="contact.php" method="post">
									<div class="row">
										<div class="row mb-4">
											<div class="form-group col-lg-6">
												<input type="text"  name="username" class="form-control" placeholder="Your Name*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="email" class="form-control" placeholder="Email Address*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="phone" class="form-control" placeholder="Phone" maxlength="10">
											</div>
											<div class="form-group col-lg-6">
												<input type="text" name="subject"  class="form-control" placeholder="Subject">
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="mssg" class="form-control" rows="5" placeholder="Type Comments..."></textarea>
												</div>
											</div>
										</div>
                                        
                                  
                                        
                                        	<button type="submit" value="Send Message" name="send" style="background-color: #A81313; color: #FFFFFF; border-radius: 4px; padding: 10px 20px; font-family: 'Comfortaa', cursive;">Send Message</button>
                                        
                                        
                                        
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
                </div>
            </div>
        </div>
   
        <iframe  src="https://maps.google.com/maps?q=15%20Arcadia%20Road%20Caledon,%20ON%20L7C%203V7&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

		<?php include("include/footer.php");?>

        
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>  

</body>
</html>