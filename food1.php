<?php
include('config.php');
session_start();
if(isset($_SESSION['ids'])){
	$sqlf = "select * from availability where ids=1";
	$resultf= $conn->query($sqlf);	
	while($rowf = $resultf->fetch_assoc()){
	echo $rowf['quantity'];
}
}
else
{
    header("location: loginsignup.php");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Food - Banana</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        
        <style>
        li.main{
         display:block;
         height:30%;
         width:80%;
        text-align:center;
        }
            .time-left
            {
                display:inline;
                width: 30%;
                font-size:1.7em;
            }
        .map-container
            {
            display:inline;
             height:inherit;
             width:30%;
            }
            .food-info{
                display:inline;
            }
            
        </style>
	</head>
	<body>
		<!-- Page Wrapper -->
		<div id="page-wrapper">
			<!-- Header -->
			<header id="header">
				<h1>
					<a href="index.html">Banana</a>
				</h1>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
			<!-- Menu -->
			<nav id="menu">
				<div class="inner">
					<h2>Menu</h2>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
					</ul>
					<a href="#" class="close">Close</a>
				</div>
			</nav>
			<!-- Wrapper -->
			<section id="wrapper">
				<header>
					<div class="inner">
						<h2>Food</h2>
						<p>What is around here?</p>
						<a href="#food">Add Food</a>
					</div>
					<div>
					</header>
					<!-- Content -->
					<section id="three" class="wrapper alt style1">
					
					<div class="inner">
						<h2 class="major">Feed 1</h2>
						<p>The players need a lot of poverty, the pain is pure consequences to the average person, it is a lot of carton lakes in the earth. But the element and the bow. The author of the bills</p>
                        <progress id="progressBar" max="100" value="80"></progress>
						<section class="feed">
							<?php
								$sqlf = "select * from availability where ids=1";
								$resultf= $conn->query($sqlf);
								while($rowf = $resultf->fetch_assoc()){
									
							?>
							<li class="main">
							<div class="map-container">
							<iframe src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                <div class="food-info"> 
									<?php 
										echo $rowf['quantity'];
										echo $rowf['type'];
										if($rowf['confirm']==0)
											echo 'No requests';
										else
											echo 'Requested';
										//print food code here 
									?></div>
                                <div class="time-left"><?php $time=new DateTime($rowf['timestampf']);
								$time->sub(new DateInterval('PT'.$rowf['duration'].'H'));
								echo $time->format('H-i-s') . "\n";
								?></div>
							</li>
							</br></br>
							<?php } ?>
						</section>
					</div> 
				</section>
				</section>
				<!-- Footer -->
				<section id="footer">
					<div class="wrapper spotlight style1">
						<section id="one" class="wrapper spotlight style1">
							<div class="inner">
								<div class="content">
									<div class="form">
										<div class="tab-content">
											<div id="food">
												<h1>Add food</h1>
												<form action="insertAvail.php" method="post" >
													<div class="top-row">
														<div class="field-wrap">
															<label>
											Type of food
																		
																<span class="req">*</span>
															</label>
															<select name="type">
										                      <option name="veg" value="veg">Vegetarian</option>
                                                                <option name="nonveg" value="nonveg">Non-Vegetarian</option>
																
                                                            </select>
																<div class="field-wrap">
																	<label>
											Quantity
																		
																		<span class="req">*</span>
																	</label>
																	<input type="text" placeholder="Enter Quantity" required autocomplete="off" name="quantity" required/>
																</div>
																<div class="field-wrap">
																	<label>
											Pickup Before
																		
																		<span class="req">*</span>
																	</label>
																	<input type="text" placeholder="Enter Duration" required autocomplete="off" name="duration" required/>
																</div>
																<div class="field-wrap">
																	<button type="submit" class="button button-block"/>Get Started</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<!-- tab-content -->
										</div>
										<!-- /form -->
									</div>
								</div>
							</section>
							
							
							<div class="inner">
								<ul class="copyright">
									<li>&copy; Banana Inc. All rights reserved.</li>
								</ul>
							</div>
						</section>
					</div>
					<!-- Scripts -->
					<script src="assets/js/skel.min.js"></script>
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/jquery.scrollex.min.js"></script>
					<script src="assets/js/util.js"></script>
					<script src="assets/js/main.js"></script>
				</body>
			</html>
