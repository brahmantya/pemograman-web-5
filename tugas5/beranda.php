<!DOCTYPE html>
<html>
<head>
	<title>BERANDA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	<header>
		<h1 class="judul">LOGIN</h1>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="hasil.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Nama</b></label>
							<input type="text" placeholder="Masukkan Nama" name="uname" value="<?=isset($_POST['uname']) ? $_POST['uname'] : ''?>"/>					
						<label><b>Email</b></label>
					<input type="text" placeholder="Masukkan Email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
					
						<button type="submit" name="submit">Masuk</button>
   						 
  					</div>
				</form>

			
</body>
</html>