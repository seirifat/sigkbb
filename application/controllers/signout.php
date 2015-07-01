<?php
include 'includes/conn.php';

session_destroy();

redirect('index.php');
?>