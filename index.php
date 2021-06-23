<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Exemplo Login PHP</title>
<link rel="stylesheet" href="css/estilo.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
</head>

<body>
<div class="container">
	<section id="content">
	<div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
		<form class="box" method="post" action="liga.php">
			<h1>Login</h1>
			<div>
				<input type="text" placeholder="Usuario" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Senha" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="registar.php" name="novo">Registar novo utilizador</a>
				<a href="protegido.php" href="#" name="private">Aceder a conteúdo protegido</a>
			</div>
		</form>
		</div>
        </div>
      </div>
    </div>
	
	</section>
</div>

<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html

