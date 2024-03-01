<?php
include('../methods.php');
session_start();
session_destroy();
redirectTo('../../index.php');
exit;
?>
