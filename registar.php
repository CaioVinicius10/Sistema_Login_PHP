
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
		<form method="post" class="box" action="novo_registo.php">
			<h1>Registo</h1>
			<div>
				<input type="text" placeholder="Nome de usuario" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required"/>
			</div>
			<div>
				<input type="password" placeholder="senha" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required"/>
			</div>
			<div>
				<input type="submit" value="Registar"/>
				</div>
		</form>
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
