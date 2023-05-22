<?php
session_start();
session_destroy();
$msg = "You have been logged out.";
header("Location: index.php?msg=$msg");
exit;
