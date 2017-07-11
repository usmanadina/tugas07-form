<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
	<?php
		// define variables and set to empty values
		$namaErr = $genderErr = $alamatErr = $emailErr = $websiteErr = "";
		$nama = $gender = $alamat = $email = $website = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nama"])) {
		$namaErr = "Nama harus diisi";
		} else {
		$nama = test_input($_POST["nama"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
		$namaErr = "Inputan salah. Hanya dapat huruf dan spasi";
		}
		}
		if (empty($_POST["gender"])) {
		$genderErr = "Jenis Kelamin harus diisi";
		} else {
		$gender = test_input($_POST["gender"]);
		}
		if (empty($_POST["alamat"])) {
		$alamat = "";
		} else {
		$alamat = test_input($_POST["alamat"]);
		}
		if (empty($_POST["email"])) {
		$emailErr = "Email harus diisi";
		} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Format email salah";
		}
		}
		if (empty($_POST["website"])) {
		$website = "";
		} else {
		$website = test_input($_POST["website"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the
		URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-az0-
		9+&@#\/%=~_|]/i",$website)) {
		$websiteErr = "URL salah";
		}
		}
		}
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<h3>INPUT DATA MAHASISWA</h3>
			<table border="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="<?php echo $nama;?>">
					<span class="error"> * <?php echo $namaErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" <?php if (isset($gender) &&
					$gender=="Perempuan") echo "checked";?> value="Perempuan">Perempuan
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Laki-laki")
					echo "checked";?> value="Laki-laki">Laki-laki
					<span class="error"> * <?php echo $genderErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
				<textarea name="alamat"><?php echo $alamat;?></textarea></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
				<input type="text" name="email" value="<?php echo $email;?>">
				<span class="error"> * <?php echo $emailErr;?></span></td>
			</tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td>
				<input type="text" name="website" value="<?php echo $website;?>">
				<span class="error"> <?php echo $websiteErr;?></span></td>
			</tr>
		</table>
		<br/>
		<input type="submit" value="Simpan">
		<p><span class="error">* harus diisi.</span></p>
	</form>
	<h3>Data Mahasiswa</h3>
	<table border="0">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
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