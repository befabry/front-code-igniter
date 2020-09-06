<?php namespace App\Controllers;

use Symfony\Component\HttpClient\HttpClient;

class Home extends BaseController
{
	public function index()
	{

	    $client = HttpClient::create();
	    $response = $client->request("GET", "http://slim-back.local/users");
	    $body = json_decode($response->getContent(), true);
	    var_dump($body);
	    die;


		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
