<?php

require_once "Admin/User.php";
require_once "Customer/User.php";

use Admin\User as AdminUser;
use Customer\User as CustomerUser;

$admin = new AdminUser();
$customer = new CustomerUser();

$admin->hello();
$customer->hello();