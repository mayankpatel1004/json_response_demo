<?php
$error['error'] = 1;
$error['message'] = "Fail";
$error['status'] = 100;
$error['value']['itemtitle'] = "please enter title";
$error['value']['itemalias'] = "please enter alias";
$error['value']['itemdescription'] = "Please enter description";
echo json_encode($error);exit;