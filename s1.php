<?php
session_start();

$_SESSION["name"] = "yamazaki";
$_SESSION["age"] = "40";

echo session_id();
