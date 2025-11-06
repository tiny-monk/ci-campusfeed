<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class HealthCheck extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return $this->respond(['status' => 'ok']);
    }
}
