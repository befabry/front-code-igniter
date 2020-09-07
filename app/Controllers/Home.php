<?php namespace App\Controllers;

use Symfony\Component\HttpClient\HttpClient;

class Home extends BaseController
{
	public function index()
	{
        //TODO DI
	    $client = HttpClient::create();
	    $response = $client->request("GET", "http://slim-back.local/users");
	    $data = json_decode($response->getContent(), true);

	    if($data["statusCode"] !== 200){
	        throw new \Error("An error occured");
        }

		return view('home', [
		    'userList' => $data["data"]
        ]);
	}

	//--------------------------------------------------------------------

}
