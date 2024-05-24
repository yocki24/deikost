<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RegisterModel;

class Register extends BaseController
{
    function __construct()
	{
		$this->RegisterModel = new RegisterModel();
	}
    public function index()
    {
        return view('Auth/Register');
    }
}