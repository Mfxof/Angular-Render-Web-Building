<?php

	$app->get('/api/hello/{name}', 'hello');

	$app->options('/api/catalogue', 'optionsCatalogue' );

	// API Need a valide Jwt 
	$app->get('/api/catalogue/{filtre}', 'getSearchCalatogue' );

	// API Need a valide Jwt
	$app->get('/api/catalogue', 'getCatalogue');

	$app->options('/api/utilisateur', 'optionsUtilisateur');

	// API Need a valide  Jwt
	$app->get('/api/utilisateur', 'getUtilisateur');

	// APi Authentication generating a JWT
	$app->post('/api/utilisateur/login', 'postLogin');
	
	

