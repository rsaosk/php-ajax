<?php

$a = htmlspecialchars($_GET["a"]);

if (strlen($a)>0) {
    echo 2*$a;
}