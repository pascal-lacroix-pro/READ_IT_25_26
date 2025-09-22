<?php

namespace App\Models\UsersModel;

use \PDO;

function findOneByEmailAndPassword(PDO $conn, array $data)
{
  $sql = "SELECT *
            FROM users
            WHERE email = :email;";
  $rs = $conn->prepare($sql);
  $rs->bindValue(':email', $data['email'], PDO::PARAM_STR);
  $rs->execute();
  $user = $rs->fetch(PDO::FETCH_ASSOC);

  return password_verify($data['password'], $user['password']) ? $user : false;
}
