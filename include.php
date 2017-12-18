<?php

include('app/Bakery.php');
include('app/controller/TemplateEngineController.php');
include('app/controller/ProductController.php');
include('app/controller/ProductHistoryController.php');
include('app/controller/UsersController.php');

include ('app/Model/interfaces/Manageable.php');
include ('app/Model/interfaces/Destroyable.php');

include ('app/Model/CoreModel.php');
include ('app/Model/Product.php');
include ('app/Model/ProductHistory.php');
include ('app/Model/User.php');

define('SALT', 'labas');
