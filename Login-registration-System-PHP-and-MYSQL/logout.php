<?php 
session_start();

session_unset();
session_destroy();

header("Location: http://localhost//PORTFOLIO2/index001.php");