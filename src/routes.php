<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	require 'FormVerif.php';
	require 'Security.php';
	require 'Model/DataBase.php';
	require 'Mapper/News.php';
	
	
	//accueil
	$app->get('/', function(Request $request, Response $response) {
		$this->view->news = (new News())->getAllNews();
		return $this->view->render($response, 'index.phtml');
	});
	
	//inscription
	$app->get('/join', function(Request $request, Response $response) {
		return $this->view->render($response, 'join.phtml');
	});
	
	//affichage d'une new
	$app->get('/new', function(Request $request, Response $response) {
		$this->view->new = (new News())->getNew($_GET['id']);
		return $this->view->render($response, 'new.phtml');
	});
	
	//affichage d'une new
	$app->get('/modify', function(Request $request, Response $response) {
		$this->view->new = (new News())->getNew($_GET['id']);
		return $this->view->render($response, 'modify.phtml');
	});
	
	//affichage d'une new
	$app->post('/applymodify', function(Request $request, Response $response) use ($app) {
		(new News())->updateNew($_GET['id'],$_POST['title'], $_POST['content']);
		return $response->withStatus(302)->withHeader('Location', '/');
		//return $this->view->render($response, 'index.phtml');
	});
	
	//connexion
	$app->get('/login', function(Request $request, Response $response) {
		return $this->view->render($response, 'login.phtml');
	});

	$app->post('/join-handle', function(Request $request, Response $response) {
		// Récuperation de la connection
		$conn = (new DataBase())->getDataBase();

		$query = "insert into User(username, email, password, role) values(:username,:email,:password,'user')";
		$result = $conn->prepare($query);
		$result->execute(array(
				'username' => $_POST['login'],
				'email'	=> $_POST['email'],
				'password' => cryptPassword($_POST["pswd"])
		));
		if ($result !== 1) {
			return "error : l'inscription a échoué.";
		}

		return $this->view->render($response, 'index.phtml');
	});

	$app->post('/login-handle', function(Request $request, Response $response) {
		
		//cryptage mdp
		$_POST["pswd"] = cryptPassword($_POST["pswd"]);

		// Récuperation de la connection
		$conn = (new DataBase())->getDataBase();
		$query = "select * "
							. "from User "
							. "where username = " . $_POST["login"] . " "
							. "and password = " . $_POST["pswd"] . " "
							. ";";
		$result = $conn->exec($query);
		if (!$result) {
			return "Mauvais login et/ou mot de passe";
		}

		return $this->view->render($response, 'index.phtml');
	});
