<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Api_check extends ResourceController
{
    protected $format    = 'json';

    public function index()
    {
        return $this->respond(['status' => 'ok', 'message' => 'API is working!']);
    }

    public function checkDbConnection()
    {
        try {
            $db = \Config\Database::connect();
            $db->reconnect(); // Attempt to reconnect to ensure a fresh connection check
            $db->query('SELECT 1'); // Simple query to test connection
            return $this->respond(['status' => 'ok', 'message' => 'Database connection successful!']);
        } catch (DatabaseException $e) {
            return $this->respond(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return $this->respond(['status' => 'error', 'message' => 'An unexpected error occurred: ' . $e->getMessage()], 500);
        }
    }
}
