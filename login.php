<?php include "menu.php";?>

<form method="POST" action="login.php">
<TABLE BORDER=0>
	<tr><td>tunnus</td> <td><input type="text" name=tunnus"></td></tr>
	<tr><td>salasana</td> <td><input type="password" name=sala></td></td></tr>

	<tr><td></td><td><input type="submit" name="nappi" value="Kirjaudu">

</TABLE<
</form>

<?php
$oikeatunnus="jeppe";
$oikeasalasana="test";
if($_POST['tunnus']==$oikeatunnus)
	{
		if($_POST['sala']==$oikeasalasana)
			//oikea tunnus ja salasana
		{
			header('location:oma.php');
		}
	}
	else
	{
		echo "Tunnus ja salasana eivät täsmää";
	}

?>

<?php include "footer.php";?>