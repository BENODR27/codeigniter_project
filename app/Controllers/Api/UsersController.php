<?php

// app/Controllers/Api/UsersController.php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format    = 'json';

    public function index()
    {
        $users = $this->model->findAll();
        return $this->respond($users);
    }

    public function show($id = null)
    {
        $user = $this->model->find($id);
        return $this->respond($user);
    }

    // Add other CRUD methods as needed (create, update, delete)
}
