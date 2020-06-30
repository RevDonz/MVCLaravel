<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form</title>
	<style>
		body {
			margin-left: 15px;
		}
	</style>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>

	<form action="/welcome" method="POST">
		@csrf
		<div class="form">
			<label for="fName">First Name :</label><br><br>
			<input type="text" name="fName" id="fName">
		</div><br>

		<div class="form">
			<label for="lName">Last Name :</label><br><br>
			<input type="text" name="lName" id="lName">
		</div><br>

		<div class="form">
			<label for="gender">Gender :</label><br><br>
			<input type="radio" name="gender" value="0">Male <br>
			<input type="radio" name="gender" value="1">Female <br>
			<input type="radio" name="gender" value="2">Other <br>
		</div><br>

		<div class="form">
			<label for="nationality">Nationality</label><br><br>
			<select name="nationality" id="nationality">
				<option value="0">Indonesia</option>
				<option value="1">Malaysia</option>
				<option value="2">Thailand</option>
			</select>
		</div><br>

		<div class="form">
			<label for="language">Language Spoken :</label><br><br>
			<input type="checkbox" name="language" value="0">Bahasa Indonesia <br>
			<input type="checkbox" name="language" value="1">English <br>
			<input type="checkbox" name="language" value="2">Other <br>
		</div><br>

		<div class="form">
			<label for="bio">Bio :</label><br>
			<textarea name="bio" id="bio" cols="30" rows="10"></textarea>
		</div><br>

		<button type="submit">Sign Up</button>
		<button type="button" onclick="window.history.back()">Kembali</button>

	</form>
</body>
</html>