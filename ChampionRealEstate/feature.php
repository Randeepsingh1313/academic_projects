<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Your Listed Properties</b></h2>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
							<?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
					</div>
					<table class=" col-lg-12 table table-bordered table-dark table-hover">
                        <thead>
                             <tr>
                                <th class="text-white px-4 py-4">Properties</th>
                                <th class="text-white px-4 py-4">BHK</th>
                                <th class="text-white px-4 py-4">Reason</th>
                                <th class="text-white px-4 py-4">Added Date</th>
								<th class="text-white px-4 py-4">Status</th>
                            
								<th class="text-white font-weight-bolder">Delete</th>
                             </tr>
                        </thead>
                        
                        <tbody>
						
							<?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
								while($row=mysqli_fetch_array($query))
								{
							?>
                            <tr>
                                <td>
									<img src="admin/property/<?php echo $row['17'];?>" alt="pimage" style="object-fit: cover;background position: center;filter: contrast(80%);width: 50%;height: 50%;">
                                    <div class="property-info d-table">
                                        
                                        <div class="p-3"> 
                                            <h5 class="text-capitalize"><a style="color: #FFFFFF;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                            </h5>                              
                                        </div>
                                        
                                        <span class="font-14 text-capitalize">&nbsp; 
                                            <?php echo $row['14'];?></span>
                                        
                                        <div class="price">
											<span class="text-white ml-2">$&nbsp;<?php echo $row['13'];?></span>
										</div>
                                    </div>
								</td>
                                <td><?php echo $row['4'];?></td>
                                <td class="text-white">For <?php echo $row['5'];?></td>
                                <td><?php echo $row['20'];?></td>
								<td class="text-white"><?php echo $row['19'];?></td>
                               
								<td><a class="calcBtn" href="propertydelete.php?id=<?php echo $row['0'];?>">Delete</a></td>
                            </tr>
							<?php } ?>
							
                        </tbody>
                    </table>            
            </div>
        </div>

		<?php include("include/footer.php");?>
	
        
       
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
  
    </div>
</div>

</body>
</html>