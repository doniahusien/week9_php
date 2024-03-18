<?php
session_start();
echo "welcome ".$_SESSION["name"]." ".$_SESSION["id"];