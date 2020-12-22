<?php

use jacuve\phpmvc\Application;

class m0002_add_password_column
{
    public function up()
    {
        $db = Application::$app->db;
        $db->pdo->exec('ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL');
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->pdo->exec('ALTER TABLE users DROP COLUMN password');
    }

}