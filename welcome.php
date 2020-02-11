<?php
// Initialize the session
session_start();
 //?php //echo $_SESSION["firstname"]; 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<div align="center">
	<h4> Logged in user :  <?php echo $_SESSION["username"]; ?> </h4>
	<h5> Welcome <?php echo $_SESSION["firstname"]; ?> </h5>
	<h5> Lastname : <?php echo $_SESSION["lastname"]; ?></h5>
	<h5> Email : <?php echo $_SESSION["email"]; ?></h5>
	<h5> Filename : <?php echo $_SESSION["filename"]; ?></h5>
	<h5> WordCount : <?php echo $_SESSION["wordcount"]; ?></h5>
	<form action="upload.php" method="post" enctype="multipart/form-data">
   	 	Select file to upload:
    		<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload File" name="submit">
	</form>
	<p><a href="logout.php">Logout here</a>.</p>
</div>
</html>

