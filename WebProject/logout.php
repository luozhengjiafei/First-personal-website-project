<?php

session_destroy();
session_start();
session_regenerate_id();

echo "<script>window.close();</script>";
header('Location: index.php');
?>