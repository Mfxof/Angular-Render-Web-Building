<?php
	use Psr\Http\Message\ResponseInterface as Response;
	use Psr\Http\Message\ServerRequestInterface as Request;
	use Tuupola\Middleware\HttpBasicAuthentication;
	use \Firebase\JWT\JWT;
	
	const JWT_SECRET = "PSSWD";

	function getJWTToken($request)
	{
	    $payload = str_replace("Bearer ", "", $request->getHeader('Authorization')[0]);
	    $token = JWT::decode($payload,JWT_SECRET , array("HS256"));
	    return $token; 
	}

	function createJwt (Response $response) : Response {
	    $userid = "emma";
	    $email = "emma@emma.fr";
	    $issuedAt = time();
	    $expirationTime = $issuedAt + 600; // jwt valid for 60 seconds from the issued time
	    $payload = array(
		'userid' => $userid,
		'iat' => $issuedAt,
		'exp' => $expirationTime
	    );
	    $token_jwt = JWT::encode($payload,JWT_SECRET, "HS256");
	    $response = $response->withHeader("Authorization", "Bearer {$token_jwt}");
	    return $response;
	}

	// Middleware de validation du Jwt
	$options = [
	    "attribute" => "token",
	    "header" => "Authorization",
	    "regexp" => "/Bearer\s+(.*)$/i",
	    "secure" => false,
	    "algorithm" => ["HS256"],
	    "secret" => JWT_SECRET,
	    "path" => ["/api"],
	    "ignore" => ["/api/hello","/api/utilisateur/login"],
	    "error" => function ($response, $arguments) {
		$data = array('ERREUR' => 'Connexion', 'ERREUR' => 'JWT Non valide');
		$response = $response->withStatus(401);
		return $response->withHeader("Content-Type", "application/json")->getBody()->write(json_encode($data));
	    }
	];

	function  addHeaders (Response $response) : Response {
	    $response = $response
	    ->withHeader("Content-Type", "application/json")
	    ->withHeader('Access-Control-Expose-Headers', 'Authorization');
	    //->withHeader('Access-Control-Allow-Origin', ('https://tpbackend.herokuapp.com'))
	    //->withHeader('Access-Control-Allow-Headers', 'Content-Type,  Authorization')
	    //->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
	    //->withHeader('Access-Control-Expose-Headers', 'Authorization');

	    return $response;
	}

	// Chargement du Middleware
	$app->add(new Tuupola\Middleware\JwtAuthentication($options));
	

