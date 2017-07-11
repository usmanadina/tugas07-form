<html>
	<body>
		<h3>Data Mahasiswa</h3>
		<table border="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $_POST["nama"]; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $_POST["gender"]; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $_POST["alamat"]; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_POST["email"]; ?></td>
			</tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td><?php echo $_POST["website"]; ?></td>
			</tr>
		</table>
	</body>
</html>