<?php

// Here are the variables:
$var = json_decode(file_get_contents('variables.json'), true);

// Getting stuff from RPG
$receive = json_decode($_POST[$var['general']['data-variable']], true);
?>