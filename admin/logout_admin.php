<?php

include "../include/config.php";

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/BookSelf/admin/");

?>