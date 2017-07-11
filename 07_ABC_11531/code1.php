<html>
	<body>
		<form action="welcome.php" method="post">
			<h3>INPUT DATA MAHASISWA</h3>
			<table border="0">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="male">Male</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td>:</td>
					<td><input type="text" name="website"></td>
				</tr>
			</table>
			<br/>
			<input type="submit" value="Simpan">
		</form>
	</body>
</html>