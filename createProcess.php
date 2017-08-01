<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="main">
	    <h1 class="text-center"></h1>

		<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			//QUERY
			if((trim($name) != "") && (trim($email) != "") && (trim($password) != "")){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$create = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
					$result = mysqli_query($connection, $create);
					if(!$result) {
						die("<h3>Registration Failed</h3><p>User Was Not Added to Database</p>" .mysqli_error($connection));
						echo "<a href=\"create.php\" class=\"btn btn-default\">try again</a>";
					}
					else{
						echo "<h3>Registration Successful</h3>";
						echo "<p>User added to database:</p>";
						echo "<p>Name: {$name}</p><p>Email: {$email}</p>";
						echo "<a href=\"index.php\" class=\"btn btn-default\">Ok</a>";
					}
				}
				else{
					echo "<h3>Update Failed</h3>";
					echo "<p>Invalid email address.</p>";
					echo "<p>Please enable your javascript to improve user experience within this site.</p>";
					echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";					
				}
			}
			else{
				echo "<h3>Registration Failed</h3>";
				echo "<p>Kindly fill-in all forms.</p>";
				echo "<p>Please enable your javascript to improve user experience within this site.</p>";
				echo "<a href=\"create.php\" class=\"btn btn-default\">try again</a>";
			}
		?>

	</div>
</div>

<?php include 'footer.php'; ?>
<?php mysqli_close($connection); ?>