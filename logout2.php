<?php

require_once 'source/session.php';

session_destroy();
header('location: login2.html');

?>