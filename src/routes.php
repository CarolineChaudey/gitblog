<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	require 'FormVerif.php';
	require 'Security.php';
	require 'Model/DataBase.php';


	//accueil
	$app->get('/', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.phtml');
	});

	//inscription
	$app->get('/join', function(Request $request, Response $response) {
		return $this->view->render($response, 'join.phtml');
	});

	//connexion
	$app->get('/login', function(Request $request, Response $response) {
		return $this->view->render($response, 'login.phtml');
	});

	$app->post('/join-handle', function(Request $request, Response $response) {
		$formVerif = new FormVerif;
		if ($formVerif->verifyData($_POST) === false) {
			return "error : les champs n'ont pas correctement été remplis.";
		}
		$security = new Security;
		$_POST["pswd"] = $security->cryptPassword($_POST["pswd"]);

		// Récuperation de la connection
		$conn = new DataBase();

		$query = "insert into User('username', 'email', 'password', 'role') "
							. "values("
							. $_POST["login"] . ", "
							. $_POST["email"] . ", "
							. $_POST["pswd"] . ", "
							. "user"
							. ");";
		$result = $conn->getDataBase()->exec($query);
		if ($result !== 1) {
			return "error : l'inscription a échoué.";
		}

		return $this->view->render($response, 'index.phtml');
	});

	$app->post('/login-handle', function(Request $request, Response $response) {
		$security = new Security;
		$_POST["pswd"] = $security->cryptPassword($_POST["pswd"]);

		$conn = new DataBase();
		$query = "select * "
							. "from User "
							. "where username = " . $POST["login"] . " "
							. "and password = " . $POST["pswd"] . " "
							. ";";
		return $this->view->render($response, 'index.phtml');
	});
