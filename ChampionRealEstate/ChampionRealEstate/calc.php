<?php 

session_start();
include("config.php");

// codeing

if(isset($_REQUEST['calc']))
{
	$amount=$_REQUEST['amount'];
	$mon=$_REQUEST['month'];
	$int=$_REQUEST['interest'];
	
	$interest = $amount * $int/100;
	$pay = $amount + $interest;
	$month = $pay / $mon;

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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>EMI</b></h2>
                    </div>
                </div>
            </div>
        </div>
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-white">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                        </div>
					</div>
					<center>
					<table class=" col-lg-6 table table-bordered table-dark table-hover" >
                        <thead>
                             <tr>
                                <th class="text-white px-4 py-4">Price</th>
                                <th class="text-white px-4 py-4">Amount</th>
                             </tr>
                        </thead>
                        <tbody>
												
                            <tr class="text-white text-center">
                                <td class="text-capitalize px-4 py-4" scope="row">Enter Amount</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $amount ; ?></td>
                            </tr>
							<tr class="text-center">
                                <td class="text-capitalize px-4 py-4">Enter Month</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $mon ; ?></td>
                            </tr>
							<tr class="text-center">
                                <td class="text-capitalize px-4 py-4">Enter Interest Rate</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $int ; ?></td>
                            </tr>
							<tr class="text-center">
                                <td class="text-capitalize px-4 py-4">Total Interest</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $interest ; ?></td>
                            </tr>
							<tr class="text-center">
                                <td class="text-capitalize px-4 py-4">Total Amount</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $pay ; ?></td>
                            </tr>
							<tr class="text-center">
                                <td class="text-capitalize px-4 py-4">Pay Per Month (EMI)</td>
                                <td class="text-capitalize px-4 py-4"><?php echo $month ; ?></td>
                            </tr>
							
                        </tbody>
                    </table> 
					</center>
            </div>
        </div>

		<?php include("include/footer.php");?>

    </div>
</div>

</body>
</html>