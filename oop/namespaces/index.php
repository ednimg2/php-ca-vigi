<?php

use App\Ovoko\DTO\Customer;
use App\Ovoko\Model\User;

require 'src/Model/User.php';
require 'src/DTO/Customer.php';

$user = new User('Mindaugas');

echo $user->getName();

$customer = new Customer();
