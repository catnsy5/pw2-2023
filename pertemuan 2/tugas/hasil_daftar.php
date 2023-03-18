<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="form-horizontal w-90 mt-5 mx-auto">Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
                    <td>Cintantya</td>
					<td>cintan@gmail.com</td>
					<td>Depok</td>
					<td>+6287765432876</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Cintan</td>
					<td>cintaan5@gmail.com</td>
					<td>Jakarta</td>
					<td>+6282114356285</td>
				</tr>

				<?php
                if (isset($_POST['proses'])) {	
					$no = 3;
                    $nama = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];
					

					echo '<td>' . $no;
                    echo '<td>' . $nama;
                    echo '<td>' . $email;
                    echo '<td>' . $alamat;
                    echo '<td>' . $telepon;
					
				}	
				?>

			</tbody>
		</table>
	</div>
</body>
</html>