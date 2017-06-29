<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	require 'FormVerif.php';
	require 'Security.php';


	//accueil
	$app->get('/', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.phtml');
	});

	//inscription
	$app->get('/join', function(Request $request, Response $response) {
		return $this->view->render($response, 'join.phtml');
	});

	//inscription
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
		$result = $conn->exec($query);
		if ($result !== 1) {
			return "error : l'inscription a échoué.";
		}
		
		return $this->view->render($response, 'index.phtml');
	});

?>
