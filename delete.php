<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="main">
	    <h1 class="text-center"></h1>

	<?php

		$idRequest = $_REQUEST['ID'];
		$query = "SELECT * FROM Users WHERE id = '$idRequest'";
		$result = mysqli_query($connection, $query);
		$datas = array();

	    while($row = mysqli_fetch_assoc($result)){
			$datas[] = $row;
		}
		
		foreach ($datas as $data) :
			$id = $data['ID'];
			$name = $data['name'];
		endforeach;

		echo "<h1 class=\"text-center\">Delete User</h1><p>Are you sure you want to delete the user named: {$name}?</p>";
	
	?>
		<!--Dummmy the value for JS validation. You can fetch the actual values if you want,
			but all you really need is the ID to delete the user-->
		<form action="deleteProcess.php" method="POST" class="form-horizontal">
			<input type="hidden" name="newID" value="<?php echo $id; ?>">
			<input type="hidden" name="newname" id="jsName" value="dummyName"><!-- dummmy the value. for JS validation -->
			<input type="hidden" name="newEmail" id="jsEmail" value="dummy@gmail.com"><!-- dummmy the value. for JS validation -->
			<input type="hidden" name="newPassword" id="jsPassword" value="dummyPassword"><!-- dummmy the value. for JS validation -->
			<div class="form-group">		
				<div class="col-lg-6">
					<button class="btn btn-default form-control" type="submit" name="submit" id="jsSubmit">Yes</button>
				</div>
				<div class="col-lg-6">
					<a href="read.php" class="btn btn-default form-control">No</a>
				</div>
			</div>
		</form>

	</div>
</div>

<?php include 'footer.php'; ?>
<?php mysqli_close($connection); ?>