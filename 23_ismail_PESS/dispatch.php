<?php
// Initialise variable to respective form data
$callerName = $_POST['callerName'];
$contactNo = $_POST['contactNo'];
$locationofIncident = $_POST['locationofIncident'];					
$typeofIncident = $_POST['typeofIncident'];
$descriptionofIncident = $_POST['descriptionofIncident'];

?>

<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Dispatch</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container" style="width: 80%;">
			<!-- Links to header image and navigation bar from nav.php -->
			<?php require_once 'nav.php': ?>

			<!-- Create section container to place web form -->
			<section style="margin-top: 20px;">
				<form action="dispatch.php" method="post">

					<!-- Row to display Caller's Name -->
					<div class="form-group row">
						<label for="callerName" class="col-sm-4 col-form-label"> Caller's Name</label>
						<div class="col-sm-8">
							<?php echo $callerName; ?>
							<input type="hidden" name="callerName" id="callerName" value="">
							<?php echo $callerName;?>
						</div>
					</div>

					<!-- Row to display Contact Number -->
					<div class="form-groip row">
						<label for="contactNo" class="col-sm-4 col-form-label">Contact Number</label>
						<div class="col-sm-8">
							<?php echo $contactNo; ?>
							<input type="hidden" name="contactNo" id="contactNo" value="">
							<?php echo $contactNo; ?>
						</div>
					</div>
					
					<!-- Row to display Location of Incident -->
					<div class="form-group row">
						<label for="locationofIncident" class="col-sm-4 col-form-label">Location of Incident</label>
						<div class="col-sm-8">
							<?php echo $locationofIncident; ?>
							<input type="hidden" name="locationofIncident" id="locationofIncident" value="<?php echo $locationofIncident;?>">
						</div>
					</div>

					<!-- Row to display Type of Incident -->
					<div class="form-group row">
						<label for="typeofIncident" class="col-sm-4 col-form-label">Type of Incident</label>
						<div class="col-sm-8">
							<?php echo $typeofIncident; ?>
							<input type="hidden" name="typeofIncident" id="typeofIncident" value="<?php echo $typeofIncident;?>">
						</div>
					</div>

					<!-- Row to display Description of Incident -->
					<div class="form-group row">
						<label for="descriptionofIncident" class="col-sm-4 col-form-label">Description of Incident</label>
						<div class="col-sm-8">
							<?php echo $descriptionofIncident; ?>
							<input type="hidden" name="descriptionofIncident" id="descriptionofIncident" value="<?php echo $descriptionofIncident;?>">
						</div>
					</div>

					<!-- Row to display Patrol Cars to dispatch -->
					<div class="form-group row">
						<label for="patrolCars" class="col-sm-4 col-form-label">Choose Patrol Cars(s)</label>
						<div class="col-sm-8">
							<table class="table table-striped">
								<tbody>
									<tr>
										<th scope="col">Car's Number</th>
										<th scope="col">Car's Status</th>
										<th scope="col"></th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


					<!-- Row to display Dispatch button -->
					<div class="form-group row">
						<div class="col-sm-8"></div>
						<div class="col-sm-8" style="text-align: center;">
							<input type="submit" name="btnDispatch" class="btn btn-primary" value="Dispatch">
						</div>
					</div>

					<!-- End of web form -->
				</form>
				<!-- End of section -->
			</section>

			<!--Footer-->
			<footer class="page-footer font-small blue pt-4 footer-copyright text-center py-3">
				&copy;2021 Copyright
				<a href="www.ite.edu.sg">ITE</a>
			</footer>
			<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
			<script type="text/javascript" src="js/popper.min.js"></script>
			<script type="text/javascript" src="js/bootstrap"></script>
		</div>
	</body>
	</html>