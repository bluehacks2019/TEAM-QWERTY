
<!DOCTYPE html>
<title>Private Journal</title>
<html>
<body>
<center>
<br> <br> <br> <b> <font size="5">
	<?php
	echo "Today is:     " . date("Y/m/d") . "<br>";
	?>
</b>
<style type="text/css"></style>

<style>
body{
	background-image: url("image/bg2.jpg");
	background-repeat: no-repeat;
	background-size: 1500px;

}
</style>

<br><br>
<h2> <font color="green" face="arial" size = "15px">YOUR PRIVATE JOURNAL</font></h2>



  <textarea name="message" rows="10" cols="30" style="width: 50%" placeholder="Type anything you want to say. Feel Free."></textarea required>
  <br><br>
 <a href="diary.php"><button onclick="myFunction()" style="font-size: 20px">Submit</button>
	
 <script>
function myFunction() {
  confirm("Success. Hope I gave you a better feelings!");
}
</script>
</center>

<a href="choose.php"> <button style="margin-left: 1100px">Go Back.</button>
</body>
</html>
