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
    
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Champion Real Estate</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>	
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/cover.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; min-height: 70vh;">
            
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mt-4 mt-12"><br>Find your dream house</h1>
                            
                            <form method="POST" action="propertygrid.php">
                                
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
												<option value="appartment">Appartment</option>
												<option value="flat">Flat</option>
												<option value="bunglow">Bunglow</option>
												<option value="house">House</option>
												<option value="villa">Villa</option>
												<option value="office">Office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn"  style="background-color: #A81313; color: #FFFFFF; border-radius: 4px; padding: 10px 20px;font-size: 14px;
	                                       font-weight: 500;font-family: 'Comfortaa', cursive;line-height: 28px;">Search Property</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row bg-gray" style="background-color: #DCDCDC";>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-dark text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center "> 
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
  <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
</svg>
                                
                               
                                <h5 class="text-dark  py-3 m-0">Selling Service</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center  mb-4 "> 
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg>
                                

								
                                <h5 class="text-dark hover-text-primary py-3 m-0">Rental Service</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
								
                                <h5 class="text-dark py-3 m-0">Property Listing</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 single-box-do">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
								
                                <h5 class="text-dark hover-text-primary py-3 m-0">Legal Investment</h5>
                                <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-dark text-center mb-4">Recent Property</h2>
                    </div>
                    
                    <div class="col-md-12">
                       
                            
                                <div class="row">
								
									<?php $query=mysqli_query($con,
                                                              "SELECT property.*, user.uname,user.utype,user.uimage 
                                                              FROM property,user WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-4 col-lg-3 card mx-5 my-4 single-box">
                                        <div class=" mb-4 card-deck ">
                                            <div class="overflow-hidden position-relative"> 
                                                <img class="img-area" src="admin/property/<?php echo $row['17'];?>" alt="pimage"
                                                     style="object-fit: cover;background position: center;filter: contrast(80%);    width: 100%;height: 100%;">
                                                
                                                      
                                            </div>
                                            
                                             <div class="p-2 col-lg-11">
                                                 
                                                  <div class="float-left sub-heading col-lg-4"> New</div>
                                                 
                                                 <div class=" float-right SaleBtn">For <?php echo $row['5'];?></div> 
                                                    
                                    
                                                 
                                            </div>
                                            
                                            
                                            
                                            <div class="col-lg-12">
                                                <div class="pb-2">
                                                    <h5 class="text-dark text-capitalize">
                                                        <a style="color: #222222;" href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-success" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>                
                                                    <span class="text-capitalize">
                                                        <?php echo $row['14'];?></span> </div>
                                               
                                                
                     <div  class="table-striped font-14 px-2 text-center ">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td >Sqft</td>
                                            <td class="text-capitalize  py-2 "><?php echo $row['12'];?></td>
                                            <td>Bedroom</td>
                                            <td class="text-capitalize py-2"><?php echo $row['6'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Bathroom</td>
                                            <td class="text-capitalize"><?php echo $row['7'];?></td>
                                            <td>Balcony</td>
                                            <td class="text-capitalize py-2"><?php echo $row['8'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Hall</td>
                                            <td class="text-capitalize py-2"><?php echo $row['10'];?></td>
                                            <td>Kitchen</td>
                                            <td class="text-capitalize py-2"><?php echo $row['9'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                                 <div class="p-4 d-inline-block w-100">
                                                    
                                                    <div class="float-left text-capitalize" style=" font-family: 'Comfortaa', cursive;
                                                    font-size: 13px;line-height: 28px;">
                                                        
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#C81313" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                        
                                                        By : <?php echo $row['uname'];?></div>
                                     
    
                                                    
                                                    <div class="float-right" style=" font-family: 'Comfortaa', cursive;font-size: 13px;line-height: 28px;">                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#C81313" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                                                        </svg>
                                                        
                                                        6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                      
                            
                            
                           
                       
                    </div>
                </div>
            </div>
        </div>
		
 
        
        
         <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/pic.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;opacity: .9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-dark">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-dark d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-dark" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Because of the critical role our agents play in our success, we always strive to provide them with the latest tools and technologies. We offer them strong support with timely information and market data they need plus state-of-the-art marketing tools.</p>
									</div>
                                </li>
                                <li class="mb-4 text-dark d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-dark" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>With almost 18,000 agents in more than 600 locations from coast-to-coast, no matter whether you live in a big city or in the country, you’ll find a Champion Real Estateagent ready and equipped to help you.</p>
									</div>
                                </li>
                                <li class="mb-4 text-dark d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-dark" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Not only is Champion Real Estate dedicated to our agents and clients, we also care deeply about the communities in which our agents live and work. We are dedicated to fundingwomen’s shelters and violence prevention and education programs across Canada.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
	
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mb-5">  
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      
		<?php include("include/footer.php");?>
        
 


</body>

</html>