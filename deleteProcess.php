<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="main">
	    <h1 class="text-center"></h1>

		<?php
			
			$id = $_POST['newID'];
			$name = $_POST['newname'];
			
			$delete = "DELETE FROM users WHERE ID='$id'";
			$result = mysqli_query($connection, $delete);
			if(!$result) {
				die("<h3>Delete Failed</h3><p>User was not deleted.</p>" .mysqli_error($connection));
				echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
			}
			else{
				echo "<h3>Delete Successful</h3><p>User has been deleted.</p>";
				echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
			}
		?>

	</div>
</div>

<?php include 'footer.php'; ?>
<?php mysqli_close($connection); ?>