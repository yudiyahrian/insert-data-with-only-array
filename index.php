<?php
    include 'proses.php';
    $class = new biodata();
	$siswa = new bio_siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <a href="form.php" class="btn btn-primary mt-4 mb-3">Add</a>
<table class="table table-hover">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Sekolah</th>
		<th>Email</th>
		<th>No HP</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
	</thead>
	<tbody>
		<?php
		
            $ro = $class->data();
            $row = $siswa->data_siswa();
			$id = 1;
				echo "
					<tr>
						<td>".$id++."</td>
						<td>".$ro['nama']."</td>
						<td>".$ro['kelas']."</td>
						<td>".$ro['jurusan']."</td>
						<td>".$ro['sekolah']."</td>
						<td>".$row['email']."</td>
						<td>".$row['no_hp']."</td>
						<td>".$row['jenis_kelamin']."</td>
						<td>".$row['alamat']."</td>
					</tr>
				";
		?>
	</tbody>
</table>


</body>
</html>