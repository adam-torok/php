<?php 
$tomb =array(1,2,3,4,5); $t =array(array(1,2,3,4,5),
                              array("Éva","Józsi",4,3),
                              array("alma","körte","szilva"));
  
for ($i=0; $i < count($t); $i++) { 
   echo $tomb[$i]."<br>";
    for($j=0; $j < sizeof($t[$i]); $j++){
            echo $t[$i][$j]."<br>";
    }
    echo "<br>";
}
foreach ($t as $v) {
   foreach($v as $k){
    echo $k.",";
   }
}
$z = rand(1,5);

echo "<br>";

$nestedArr = [
   [1,2,3],
   [5,6,7],
   [9,11,50]
];

foreach($nestedArr as $v){
   foreach($v as $k){
      echo $k.",";
   }
   echo "<br>";
}
echo $nestedArr[1][0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>dad</title>
</head>
<body>
<?php $tombRand = [];

for ($i=0; $i < 100; $i++) { 
   $tombRand[$i] = rand(-30,30);
}
   echo "<table style='border:1px solid black; border-collapse:collapse;'>";
         for ($i=0; $i < count($tombRand); $i++) { 
            if($i % 10 == 0){
               echo "<tr style='border:1px solid red;'>";
               }
               
               if($tombRand[$i] == 0){
                  echo "<td style='border:1px solid blue; background-color:green;'>".$tombRand[$i]."</td>";
               }
               else if($i % 11 == 0){
                  echo "<td style='border:1px solid blue; background-color:yellow;'>".$tombRand[$i]."</td>";
               }
               else if($tombRand[$i] > 0){
                  echo "<td style='border:1px solid blue; background-color:red;'>".$tombRand[$i]."</td>";
               }
               else if($tombRand[$i] < 0){
                  echo "<td style='border:1px solid blue; background-color:blue;'>".$tombRand[$i]."</td>";
               }
         
                  
         }  
         if($i % 10 == 9){
            echo "</tr>";
         }
   echo "</table>";
   

?>
</body>
</html>


