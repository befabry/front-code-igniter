<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    $userList = $this->getApi('users');

		return view('home', [
		    'userList' => $userList
        ]);
	}

	public function edit($id)
    {
        if($this->request->getMethod() === 'post') {
            $body = $this->request->getPost();

            $response = $this->client->request("PUT", "users/{$id}", [
                'json' => $body
            ]);

            if($response->getStatusCode() === 204){
                return redirect()->to('/');
            }
        }

        $user = $this->getApi("users/{$id}");

        return view('edit', [
            'user' => $user
        ]);
    }

	//--------------------------------------------------------------------

}
