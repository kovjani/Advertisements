<?php

class UserController extends Controller
{
    public function index(){
        // Create a User (model) object, get data from it and show it on the users page (view).
        $userModel = $this->model('User');
        $users = $userModel->getAllUsers();
        $this->view('users/index', ['users' => $users]);
    }
}