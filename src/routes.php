<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	require 'form-verif.php';
	require 'Security.php';

	$servername = "localhost";
	$username 	= "root";
	$password 	= "xxx";
	$dbname		= "gitblog";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		// TODO return error page
	}

	//accueil
	$app->get('/', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.html');
	});

	//inscription
	$app->get('/join', function(Request $request, Response $response) {
		return $this->view->render($response, 'join.html');
	});

	//inscription
	$app->post('/join-handle', function(Request $request, Response $response) {
		$formVerif = new FormVerif;
		if ($formVerif->verifyData($_POST) === false) {
			return "error : les champs n'ont pas correctement été remplis.";
		}
		$security = new Security;
		$_POST["pswd"] = $security->cryptPassword($_POST["pswd"]);
		/*
		$query = "insert into User('username', 'email', 'password', 'role') "
							. "values("
							. $_POST["login"] . ", "
							. $_POST["email"] . ", "
							. $_POST["pswd"] . ", "
							. "user"
							. ");";
		$result = $conn->exec($query);
		if ($result !== 1) {
			return "error : l'inscription a échoué.";
		}
		*/
		return $this->view->render($response, 'index.html');
	});

?>
