<?php 
    $url = $_SERVER["REQUEST_URI"];
    $url = explode("/", $url);
    $url = array_filter($url);

    // Redirect to controller if parameter given
    if (null !== $url[2]) {
        switch ($url[2]) {
            case "login":
                require('./controllers/controller.php');
        }
    } else {
        echo "Collaborate - Best tool for worst jobs";
    }
?> 