<?php

//function.php

$connect = new PDO("mysql:host=localhost; dbname=db_uts", "root", "");

function fetch_top_five_data($connect)
{
	$query = "
	SELECT * FROM matakuliah WHERE tahun_ajaran = '2021/2022 Genap'
	ORDER BY id DESC 
	LIMIT 10
	";

	$result = $connect->query($query);

	$output = '';

	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["kode_kelas"].'</td>
			<td>'.$row["nama_kelas"].'</td>
			<td>'.$row["kode_matakuliah"].'</td>
			<td>'.$row["nama_matakuliah"].'</td>
			<td>'.$row["sks"].'</td>
			<td>'.$row["tahun_ajaran"].'</td>
		</tr>
		';
	}

	return $output;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM matakuliah";

	$statement = $connect->prepare($query);

	$statement->execute();
	// echo($d);
	return $statement->rowCount();
}

?>