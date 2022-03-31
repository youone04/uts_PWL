
<?php

//fetch.php

include('function.php');

/*This $_GET variable received in Ajax Request Url*/

//"start"			-	the data offset
$startGET = filter_input(INPUT_GET, "start", FILTER_SANITIZE_NUMBER_INT);
$start = $startGET ? intval($startGET) : 0;

//"length"			-	the length of the returning data
$lengthGET = filter_input(INPUT_GET, "length", FILTER_SANITIZE_NUMBER_INT);
$length = $lengthGET ? intval($lengthGET) : 10;

//"searchQuery"		- 	the search text
$searchQuery = filter_input(INPUT_GET, "searchQuery", FILTER_SANITIZE_STRING);
$search = empty($searchQuery) || $searchQuery === "null" ? "" : $searchQuery;

//"sortColumn"  	-	the index of the to sorted column
$sortColumnIndex = filter_input(INPUT_GET, "sortColumn", FILTER_SANITIZE_NUMBER_INT);

//"sortDirection"	-	the sorting direction (asc or desc)
$sortDirection = filter_input(INPUT_GET, "sortDirection", FILTER_SANITIZE_STRING);
$tahunAjaran = filter_input(INPUT_GET, "tahunAjaran", FILTER_SANITIZE_STRING);

$column = array("kode_kelas", "nama_kelas", "kode_matakuliah", "nama_matakuliah","sks","tahun_ajaran");

$query = "SELECT * FROM matakuliah";

// $query .= '
// 	WHERE ta LIKE "%'.$search.'%" 
// 	OR nama_kelas LIKE "%'.$search.'%" 
// 	OR kode_matakuliah LIKE "%'.$search.'%" 
// 	OR nama_matakuliah LIKE "%'.$search.'%" 
// 	OR sks LIKE "%'.$search.'%"
// ';

$query .= '
	WHERE tahun_ajaran = "'.$tahunAjaran.'" 
	
';



if($sortColumnIndex != '')
{
	$query .= 'ORDER BY ' . $column[$sortColumnIndex].' '.$sortDirection . ' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($length != -1)
{
	$query1 = 'LIMIT ' . $start . ', ' . $length;
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();

	$sub_array[] = $row['kode_kelas'];

	$sub_array[] = $row['nama_kelas'];

	$sub_array[] = $row['kode_matakuliah'];

	$sub_array[] = $row['nama_matakuliah'];

	$sub_array[] = $row['sks'];

	$data[] = $sub_array;
}

$output = array(
	'recordsTotal'			=>	count_all_data($connect),
	'recordsFiltered'		=>	$number_filter_row,
	'data'					=>	$data
);

echo json_encode($output);

?>