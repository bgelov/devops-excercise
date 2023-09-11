<?php

try {
  http_response_code(200);

  $host = 'localhost';
  $dbname = 'service_db';
  $user = 'service_user';
  $pass = 'p@ssw0rd';

  $dbh = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);

  echo '<html><body><h1>Hello from php service. Connection to DB is successful :)</h1></body></html>';
} catch (PDOException $e) {
  http_response_code(400);

  echo '<html><body><h1>Hello from php service. Connection to DB failed :(</h1></body></html>';
}
