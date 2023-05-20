<?php
echo"HOlA";
session_start();
session_destroy();
echo"HOlA";
header("Location:index.php");
?>