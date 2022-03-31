
<?php

//fetch.php

include('function.php');

//"searchQuery"		- 	the search text
$tahunAjaran = filter_input(INPUT_GET, "tahunAjaran", FILTER_SANITIZE_STRING);


$query = "SELECT * FROM matakuliah WHERE tahun_ajaran = '$tahunAjaran'";

$statement = $connect->prepare($query);

$statement->execute();
$data = $statement->rowCount();

$output = array(
	'data' =>	$data
);

echo json_encode($output);

?>