<?php
include('include/header.php') ;
?>
<section>
<div class="container">
	<form method="post" action="controller/controller.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6 offset-3" >
			
				<h2 class="signin-title" style="margin:90px;">Sign in here</h2>
					<div class="form-group mb-3">
						<label>Full name <span class="required">*</span></label>
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label>Contact number</label>
						<input type="text" name="contact" placeholder="Contact number" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Enter email id">
					</div>
					<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" placeholder="**********" >
					</div>
					<div class="form-group mb-3">
						<label>Confirm Password</label>
						<input type="password" name="cpass" class="form-control" placeholder="**********" >
					</div>
					<div class="form-group mb-3">
						<button type="submit" class="btn btn-warning btn-lg w-100" name="signin">Submit</button>
					</div>
						<?php
						$con=mysqli_connect('localhost','root','','signin') ;
						if(isset($_POST['signin'])){
							$name=$_POST['name'];
							$email=$_POST['email'] ;
							$contact=$_POST['contact'] ;
							$query="INSERT INTO register(Name,Contact,Email)VALUES('$name','$email','$contact') ";
							$run=mysqli_query($con,$query);

						}
						?>
			</form>
		</div>
	</div>
</div>
</section>
<?php 
include('include/footer.php') ;
?>