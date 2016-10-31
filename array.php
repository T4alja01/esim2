<?php include 'menu.php'; ?>
<h1>Php-array</h1>
<?php
$asiakkaat=array(
	array("en"=>'Mikko','sn'=>'Virtanen'),
	array("en"=>'Liisa','sn'=>'Kuusinen'),
	array("en"=>'Jussi','sn'=>'Pitkänen'),
	array("en"=>'Jonna','sn'=>'Järvinen')
	);
echo "<h2>Print_r</h2>";
print_r($asiakkaat);
?>
<h2>Tulostus foreach-loopilla</h2>
<?php
foreach ($asiakkaat as $rivi) 
{
	echo 'Etunimi '.$rivi['en'],' sukunimi '.$rivi['sn'].'<br>';
}
?>
<h2>Tulostus taulukkona</h2>
<TABLE border=2 >
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
	<?php
	foreach ($asiakkaat as $rivi)
	{
		echo '<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
	}
	?>
</TABLE>

