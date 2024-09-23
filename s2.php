<?php
session_start();

echo $_SESSION["name"];
echo $_SESSION["age"];
echo "<br>";
echo session_id();