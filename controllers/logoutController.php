<?php

require_once "models/UserModel.php";
User::logout();
header('Location: login');