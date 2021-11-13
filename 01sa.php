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

echo "<style> table,td,th{font-size:15pt; border: 2px solid black;border-collapse: collapse;} body{font-size:17pt; text-align:center;} </style>
<body>
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

echo "Number of elements in the array is ", count($Pabon) * count($Pabon[0]), "<br><br>";

$favorite = $Pabon[5][1];

echo "My Favorite Pokemon in the list is ",$favorite,"<br><br>";

echo "<b>List of Pokemon Names on the list</b> <br>";
	foreach($Pabon as $Species){
		echo $Species[1];
		echo '<br>';
	}
?>