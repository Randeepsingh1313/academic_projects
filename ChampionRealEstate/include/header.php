<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
           
            <div class="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> 
                                <a class="navbar-brand position-relative" href="index.php"> 
                                <img class="nav-logo" src="images/logo/logo.png" alt="home" style="width:100px; height: 100px;"></a>
                                
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        
                                        <li class="nav-item dropdown"><a class="nav-link" href="index.php">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="property.php">Properties</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a></li>
                                        
                                         
                                        
                                        	
										
									
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										
												<li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
												<li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
                                        
									
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Login/Register</a> </li>
										<?php } ?>
										
										
                                    </ul>
                                    
									
									<a class="btnHead" href="submitproperty.php" style="background-color: #A81313; color: #FFFFFF; border-radius: 4px; padding: 10px 20px;" >Submit Property</a> 
                                    
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>