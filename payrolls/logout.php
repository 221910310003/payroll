<?php
session_start();
unset($_SESSION['username']);
session_abort();
session_destroy();
header("location:login.php");
