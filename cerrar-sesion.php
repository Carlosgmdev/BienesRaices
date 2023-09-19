<?php

session_start();

$_SESSION = [];

header('Location: /bienes_raices/index.php');