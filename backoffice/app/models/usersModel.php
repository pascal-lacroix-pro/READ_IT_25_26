<?php

namespace App\Models\UsersModel;

use \PDO;

function findAll(PDO $conn)
{
    $sql = "SELECT *
    FROM users
    ORDER BY created_at DESC";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
