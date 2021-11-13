<?php
//pokemon_Defense Functions starts in line 60
?>
<body>
<html>
<style> 
table,td,th{
	font-size:15pt; 
	border: 2px solid black;
	border-collapse: collapse;
} 
p{
	color: Red;
	font-size:12.5pt;
}
body{
	font-size:17pt; 
	text-align:center;
} 
input,text{
	font-size:14pt;
}
</style>

<?php
$Pabon = array(
				array('1','Bulbasaur','Grass','Poison','Overgrow','45','49','49'),
				array('2','Ivysaur','Grass','Poison','Overgrow','60','62','63'),
				array('3','Venusaur','Grass','Poison','Overgrow','80','82','83'),
				array('4','Charmander','Fire','N/A','Blaze','39','52','43'),
				array('5','Charmeleon','Fire','N/A','Blaze','58','64','58'),
				array('6','Charizard','Fire','Flying','Blaze','78','84','78'),
				array('7','Squirtle','Water','N/A','Torrent','44','48','65'),
				array('8','Wartortle','Water','N/A','Torrent','59','63','80'),
				array('9','Blastoise','Water','N/A','Torrent','79','83','100'),
				array('10','Caterpie','Bug','N/A','Shield Dust','50','20','55'),
);
echo "
<b>Pokemon</b>
<table align=center>
<tr>
<th>ID</th> <th>Species</th> <th>Type 1</th> <th>Type 2</th> <th>Ability</th> <th>HP</th> <th>Attack</th> <th>Defense</th>
</tr>";
for($i = 0; $i < count($Pabon); $i++){
	echo "<tr>";
	for($j = 0; $j < count($Pabon[0]); $j++){
		echo "<td>",$Pabon[$i][$j],"</td>";
	}
} 
echo "</table><br>";
?>
<form method="post">
	<text> Enter Limit Number for Defense: </text>
	<input type=text name="defenseValue" id="defenseValue" value=0 maxlength="3" size="3">
    <input type="submit" name="defbtn" id="defbtn" value="Submit" /><br/>
</form>

<?php

function pokemon_Defense($PokeArray,$limit_number){
	echo "Defense Limit Value is ".$limit_number."<br><br>";
	static $check = False;
	for($i = 0; $i < 10; $i++){
		if($PokeArray[$i][7] > $limit_number){
			echo $PokeArray[$i][1];
			echo " has greater defense value than ".$limit_number." Defense value<br>";
			$check = True;
		}
		if($PokeArray[$i][7] == $limit_number){
			echo $PokeArray[$i][1];
			echo " has equal defense value of ".$limit_number." Defense value<br>";
			$check = True;
		}
	}

	if($check == False){
		echo "Defense Value ".$limit_number." Over Powered all Pokemon on the list";
	}

	echo "<p>pokemon_Defense Function starts in line 60</p>";
}

if(array_key_exists('defbtn',$_POST)){
	$value = htmlentities($_POST['defenseValue']);

	if($value == ""){
		$value = "0";
	}

   	pokemon_Defense($Pabon,$value);
}
?>
</body>
</html>