<?php 
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bag Store</title>

	<!-- bootsrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- bootsrap 5 Js bundle CDN-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div>
	<?php 
	

	 ?>
</div>


<div class="wrapper">
	<form action="registration.php" method="post">
		<div class="container">

			<div class="row">
				<div class="col-s m-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="middlename"><b>Middle Name</b></label>
					<input class="form-control" id="middlename" type="text" name="middlename" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname" type="text" name="lastname" required>

					<label for="gender"><b>Gender</b></label>
					<input class="form-control" id="gender" type="text" name="gender" required>

					<label for="username"><b>User Name</b></label>
					<input class="form-control" id="username" type="text" name="username" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password" type="password" name="password" required>

					<label for="confirmpass"><b>Confirm Password</b></label>
					<input class="form-control" id="confirmpass" type="password" name="confirmpass" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Submit">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();


			if(valid){

			var firstname 		= $('#firstname').val();
			var middlename 		= $('#middlename').val();
			var lastname		= $('#lastname').val();
			var gender 			= $('#gender').val();
			var username 		= $('#username').val();
			var password 		= $('#password').val();
			var confirmpass 	 = $('#confirmpass').val();

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, middlename: middlename, lastname: lastname, gender: gender, username: username, password: password, confirmpass: confirmpass},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
					},
					error: function(data){
					Swal.fire({
								'title': 'Erors',
								'text': 'There were errors whil saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			


			
		});	

		
		
		
	});
</script>
</body>
</html>