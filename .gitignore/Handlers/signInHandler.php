<?php

$username = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_STRING);
$password = crypt(filter_input(INPUT_POST, "upin", FILTER_SANITIZE_NUMBER_INT));
