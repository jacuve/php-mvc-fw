<?php

use jacuve\phpmvc\Application;

class m0003_default_user_status
{
    public function up()
    {
        $db = Application::$app->db;
        $db->pdo->exec('ALTER TABLE users ALTER status SET DEFAULT 0');
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->pdo->exec('ALTER TABLE users ALTER status DROP DEFAULT');
    }

}