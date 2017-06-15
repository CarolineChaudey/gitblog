<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	$servername = "localhost";
	$username 	=	"root";
	$password 	=	"password";
	$dbname			= "gitblog";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

	$app->get('/hello/{name}', function(Request $request, Response $response) {
		$name = $request-> getAttribute('name');
		$response->getBody()->write("Hello, $name");

		return $response;
	});

	//accueil
	$app->get('/', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.html');
	});
?>
