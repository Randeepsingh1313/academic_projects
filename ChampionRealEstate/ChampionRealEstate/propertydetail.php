<?php 

session_start();
include("config.php");
								
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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                </div>
            </div>
        </div>
        

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,
                                            "SELECT property.*, user.* 
                                            FROM property,user 
                                            WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                                                   
                                  
                                    <div style="object-fit: cover;background position: center;filter: contrast(80%);    width: 100%;height: 60%;margin-left:10px;"> <img  src="admin/property/<?php echo $row['17'];?>" class="ls-bg" alt="" /> </div>
                             
                              
                     
                        </div>
                        
                        <div class="row mb-4 mt-4">
                            <div class="col-md-6">
                                <div class="SaleBtn">For <?php echo $row['5'];?></div>
                                <h5 class="mt-4 text-dark text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize">
                                    
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-success" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>  
                                    
                                    &nbsp;<?php echo $row['14'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-dark h5 my-2 text-md-right">$<?php echo $row['13'];?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        
                        
                        <div class="property-details">        
                             <div  class="table font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>Sqft</td>
                                            <td class="text-capitalize"><?php echo $row['12'];?></td>
                                            <td>Bedroom</td>
                                            <td class="text-capitalize"><?php echo $row['6'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Bathroom</td>
                                            <td class="text-capitalize"><?php echo $row['7'];?></td>
                                            <td>Balcony</td>
                                            <td class="text-capitalize"><?php echo $row['8'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Hall</td>
                                            <td class="text-capitalize"><?php echo $row['10'];?></td>
                                            <td>Kitchen</td>
                                            <td class="text-capitalize"><?php echo $row['9'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            
                            <h4 class="text-dark mt-5 mb-4">Description</h4>
                            <p><?php echo $row['2'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-dark">Property Summary</h5>
                            <div  class="table font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>BHK :</td>
                                            <td class="text-capitalize"><?php echo $row['4'];?></td>
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                        
                                            <td>Total Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['11'];?></td>
                                        </tr>
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['16'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                
            
							
                            

                            <h5 class="mt-5 mb-4 text-dark position-relative">Contact Agent</h5>
                            
                            <div class="pt-60">
                                <div class="row">
                                   
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="text-dark mt-sm-20">
                                            <h6 class="text-dark text-capitalize">
                                                <?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>                                           
                                        </div>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
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
								$query=mysqli_query($con,
                                "SELECT * 
                                FROM property 
                                ORDER BY date DESC LIMIT 6");
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
</body>
</html>