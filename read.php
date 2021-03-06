<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
  <div class="main">
    <h1 class="text-center">View, Edit, and Delete Users</h1>

	<?php	
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);
		$datas = array();

		if(mysqli_num_rows($result) > 0){
			
			while($row = mysqli_fetch_assoc($result)){
				$datas[] = $row;
			}
			
			//DISPLAY RESULT
			echo "<table class=\"table table-striped\">";
		    echo "<thead>";
			echo "<tr>";
		    echo "<th>Name</th>";
		    echo "<th>Email</th>";
			echo "</tr>";
		    echo "</thead>";
		    echo "<tbody>";

			foreach($datas as $data) :

				$id = $data['ID'];
				$name = $data['name'];
				$email = $data['email'];
				$password = $data['password'];
				
				echo "<tr><td>$name</td><td>$email</td><td><a href=\"edit.php?ID=$id\">edit</a></td><td><a href=\"delete.php?ID=$id\">delete</a></td></tr>";

			endforeach;
			
			echo "</tbody>";
			echo "</table>";
		}
	?>

  </div>
</div>

<?php include 'footer.php'; ?>
<?php mysqli_close($connection); ?>