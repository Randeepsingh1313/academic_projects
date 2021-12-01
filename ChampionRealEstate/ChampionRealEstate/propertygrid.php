<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

///search code
	
?>
<!DOCTYPE html>
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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Filtered Properties</b></h2>
                    </div>
                </div>
            </div>
        </div>
      
        
        <!--	Property Grid
		===============================================================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<div class="col-lg-8">
                        <div class="row">
						
							<?php 
							
							if(isset($_REQUEST['POST']))
							{
								$type=$_REQUEST['type'];
								$stype=$_REQUEST['stype'];
								$city=$_REQUEST['city'];
								
								$sql="SELECT * FROM property WHERE type='{$type}' && stype='{$stype}' && city='{$city}'";
								
								$result=mysqli_query($con,$sql);
							
								if(mysqli_num_rows($result)>0)
								{
									if($result == true)
									{
										while($row=mysqli_fetch_array($result))
										{
							?>
									
                            <div class="col-md-4 col-lg-5 card mx-4 my-4 single-box-sml">
                                        <div class=" mb-4 card-deck">
                                            
                                            <div class="overflow-hidden position-relative"> 
                                                <img class="img-area" src="admin/property/<?php echo $row['17'];?>" alt="pimage"
                                                     style="object-fit: cover;background position: center;filter: contrast(80%);    width: 100%;height: 100%;">
                                                
                                                      
                                            </div>
                                            
                                             <div class="p-2 d-inline-block w-100">
                                                 
                                                  <div class="float-left sub-heading col-lg-4"> New</div>
                                                 
                                                 <div class=" float-right SaleBtn">For <?php echo $row['5'];?></div> 
                                                                                                    
                                            </div>
                                            
                                            
                                            
                                            <div class="col-12">
                                                <div class="p-2">
                                                    <h5 class="text-dark text-capitalize">
                                                        <a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                                    </h5>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-success" viewBox="0 0 16 16">
                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>  
                                                    <span class="location text-capitalize">
                                                        <?php echo $row['14'];?></span> </div>
                                               
                                                
                     
                                 <div class="p-2 d-inline-block w-100">
                                                    
                                                    <div class="float-left text-capitalize" style=" font-family: 'Comfortaa', cursive;
                                                    font-size: 15px;line-height: 28px;">
                                                        
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#C81313" class="bi bi-person-fill"  viewBox="0 0 16 16">
                                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                        
                                            
                                                        
                                                        By : <?php echo $row['uname'];?></div>
                                                    
                                                    <div class="float-right" style=" font-family: 'Comfortaa', cursive;font-size: 15px;line-height: 28px;">
                                                        
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#C81313" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                                                            </svg>
                                                        
                                                        6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php 		
										} 
					
									}
								}
								else {
									
									echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
								}
									
							}

							?>
                            

                        </div>
                    </div>
					
                     <div class="col-lg-4">
                        <h4 class=" text-dark position-relative pb-4 ml-5">Instalment Calculator</h4>
                        
                        <form class="d-inline-block w-100 ml-5" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                     <div class="input-group-text">Yr</div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-4 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="calcBtn">Calclute Instalment</button>
                        </form>
                       
                        
                         <div class="sidebar-widget mt-5 ml-5">
                            <h4 class="text-dark position-relative pb-4 mb-4">Recent Property Added</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM property ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['17'];?>" alt="pimage" style="object-fit: cover;background position: center;filter: contrast(80%);    width: 50%;height: 50%;">
                                    <h6 class="text-dark text-capitalize">
                                        <a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                   
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

		<?php include("include/footer.php");?>
		       
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 

<script src="js/custom.js"></script>
</body>

</html>