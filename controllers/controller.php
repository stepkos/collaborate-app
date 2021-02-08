<?php
    include 'models\UserModel.php';

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
    
    require('./views/TestUserView.php');
?>