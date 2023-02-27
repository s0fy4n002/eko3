<?php
require_once __DIR__."/vendor/autoload.php";

use Administrator\Customers;


$customer = new Customers("Sofyan");
echo $customer->sayHello("ahmad");