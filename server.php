<?php

$a = htmlspecialchars($_GET["a"]);

if (strlen($a)>0) {
    echo "Полученные данные: ".(2*$a);
}