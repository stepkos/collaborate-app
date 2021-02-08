<?php
    require_once "models\UserModel.php";

    $test_user = new User(
        1,
        "Imie",
        "Nazwisko",
        "basicmail@gmail.com",
        "kubica123",
        "/profile_pictures/profile_pic.png",
        "Jestem przykładowym użytkownikiem",
        1,
        2,
        3,
    );

    $test_user->register();
    
    require_once "views/TestUserView.php";
?>