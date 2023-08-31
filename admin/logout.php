<?php
require('include/essentials.php');

session_start();
session_destroy();
header('Location: index.php');



?>