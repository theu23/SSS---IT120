
<?php

namespace App\Controllers;

class DatabaseTest extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $db->connect();

            return $this->response
                ->setStatusCode(200)
                ->setBody('Database connection successful.');
        } catch (\Throwable $e) {
            log_message('error', $e->getMessage());

            return $this->response
                ->setStatusCode(500)
                ->setBody('Database connection failed. Check the database configuration and logs.');
        }
    }
}
