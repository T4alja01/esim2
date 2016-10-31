<?php include 'menu.php'; ?>
<h1>Testataan get-metodia</h1>
<form method="get" action="get.php">
<label>Etunimi</label>
<input type="text" name="en" required>
<br>
<label>Sukunimi</label>
<input type="text" name="sn" required>
<br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(isset($_GET['nappi']))
{
	$enimi=$_GET['en'];
	$snimi=$_GET['sn'];
	echo "Terve $enimi $snimi";
}
?>




<p>text</p>

<?php include 'footer.php'; ?>