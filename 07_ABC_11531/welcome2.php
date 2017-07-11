<html>
	<body>
		<h3>Data Mahasiswa</h3>
		<table border="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $_GET["nama"]; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $_GET["gender"]; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $_GET["alamat"]; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_GET["email"]; ?></td>
			</tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td><?php echo $_GET["website"]; ?></td>
			</tr>
		</table>
	</body>
</html>