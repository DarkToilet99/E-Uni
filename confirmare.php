<?php
session_start(); 
echo $_SESSION["cod"];
if($_POST["cod"] == $_SESSION["cod"])
echo "FUCK YEAH!";
