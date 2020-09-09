<?php namespace App\Controllers;

class User extends BaseController
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

        return view('userActions', [
            'user' => $user,
            'title' => 'edit users'
        ]);
    }

    public function create()
    {
        if($this->request->getMethod() === 'post') {
            $body = $this->request->getPost();

            $response = $this->client->request("POST", "users", [
                'json' => $body
            ]);

            if($response->getStatusCode() === 201){
                return redirect()->to('/');
            }
        }

        return view('userActions', [
            'title' => 'create user'
        ]);
    }

    public function delete($id)
    {
        if($this->request->getMethod() === 'post') {
            $body = $this->request->getPost();

            $response = $this->client->request("DELETE", "users/{$id}", [
                'json' => $body
            ]);

            if($response->getStatusCode() === 204){
                return redirect()->to('/');
            }
        }

        $user = $this->getApi("users/{$id}");

        return view('userActions', [
            'user' => $user,
            'title' => 'delete users',
            'readOnly' => true
        ]);
    }

	//--------------------------------------------------------------------

}
