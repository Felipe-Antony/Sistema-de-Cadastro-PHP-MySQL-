<?php

define('HOST', 'localhost');
define('USARIO', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USARIO, SENHA, DB) or die ('Não foi possível conectar!');
