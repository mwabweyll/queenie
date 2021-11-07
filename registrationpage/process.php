<?php 
require_once('config.php');
 ?>
<?php 

if(isset($_POST)){

		$firstname 		= $_POST['firstname'];
		$middlename 	= $_POST['middlename'];
		$lastname 		= $_POST['lastname'];
		$gender 		= $_POST['gender'];
		$username 		= $_POST['username'];
		$password 		= $_POST['password'];
		$confirmpass 	= $_POST['confirmpass'];

		 
		$sql = "INSERT INTO users (firstname, middlename, lastname, gender, username, password, confirmpass ) VALUES (?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $middlename, $lastname, $gender, $username, $password, $confirmpass]);
		if($result){
			echo 'Registered successfullly';
		}else{
			echo 'There were errors while saving the data.';

		}
}else{
	echo 'No data';
}
