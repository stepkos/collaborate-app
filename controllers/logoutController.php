<?php

require_once "models/userModel.php";
User::logout();
header('Location: login');