<?php
    include 'models\UserModel.php';

    $test_user = new User(
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

    $test_user->login();
    
    require('./views/TestUserView.php');
?>