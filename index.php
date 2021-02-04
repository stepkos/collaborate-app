<?php 
    $url = $_SERVER["REQUEST_URI"];
    $url = explode("/", $url);
    $url = array_filter($url);

    // Redirect to controller if parameter given
    if (isset($url[2])) {
        $parameter = $url[2];
        require("./controllers/controller.php");
    } else {
        echo "You haven't provide any parameter";
    }
?>