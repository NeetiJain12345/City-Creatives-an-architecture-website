<?php
include('include/header.php') ;
?>

<section>
	<div class="container">
		<h1 class="mt-5" style="text-align:center;">Contact Form</h1>
		<div class="row">
			<form action="post" method="controller/controller.php" enctype="multipart/form-data">
			<div class="col-md-6 offset-3">
				<div class="form-group mt-5 mb-3">
					<label>Full Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter your name">
				</div>
				<div class="form-group mt-5 mb-3">
					<label>Address</label>
					<input type="text" name="address" placeholder="Enter your current address" class="form-control">
				</div>
				<div class="form-group mt-5 mb-3">
					<label>Email</label>
					<input type="email" name="email" placeholder="Enter the email id" class="form-control">
				</div>
				<div class="form-group mt-5 mb-3">
					<label>Contact Number</label>
					<input type="number" name="contact" placeholder="Enter the contact number" class="form-control">
				</div>
				<div class="form-group mt-5 mb-3">
					<button class="btn btn-success btn-lg w-100" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
</section>

<?php 
include('include/footer.php') ;
?>