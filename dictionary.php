<!DOCTYPE html>
<html>
<head>
    <title>Webster Unabridged Dictionary </title>
	<meta charset="utf-8" />
	<script>



	</script>
</head>
<body>



    <?PHP
$key = $_GET["key"];

$var=strtoupper($key);
$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); 


if (array_key_exists($var,$json))
  {
  echo "<h2>Meaning of $key: </h2><br/> " . $json[$var];
  echo "<br/>";
  }
else
  {
  echo "Searched word does not exist in current Dictionary";
  }
$arrayKeys=array_keys($json);
  foreach($arrayKeys as $item ){
	  if(strpos($item,$var)!=0){
		echo "<h2>Meaning of $item: </h2><br/> " . $json[$item];
		echo "<br/>";
		
	  }

  }
?> 
  
</body>
</html>
