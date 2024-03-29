<style>
    <?php
        require_once("static/css/menuLeft.css");
    ?>
</style>




<nav id="menuLeft">
    <header id="collaborate-logo">
        Collaborate
    </header>

    <section id="user-section">

        <?php
            
            if(empty($_SESSION['profile_picture'])){
                $path_to_img = ROOT_URL.'static/images/unknown-picture.jpg';
                echo "
                <div id='profile-picture' style='background-image: url($path_to_img)'></div>
                ";
            }
            else{
                $profile_picture = $_SESSION['profile_picture'];
                echo "
                    <div id='profile-picture' style='background-image: url(data:image/jpg;base64,$profile_picture)'></div>
                ";
            }
        ?>
    
        

        <h1 id="user-name-text"><?= $_SESSION['user_name'].' '.$_SESSION['user_surname'] ?></h1>

        <a href=<?= ROOT_URL."userPanel" ?>>
            <div id="myPanel">
                My Panel
            </div>
        </a>

        <a href=<?= ROOT_URL."logout" ?>>
            <div id="logOut">
                Log out
            </div>
        </a>
       
    </section>


    <ul id="option-list">

        <a href=<?= ROOT_URL ?>>
            <li class="menu-option">
                <span class="material-icons option-icons"> home</span>
                <span class="option-text">Home</span>
            </li>
        </a>
        
        <a href=<?= ROOT_URL."chat" ?>>
            <li class="menu-option">
                <span class="material-icons option-icons">chat</span>
                <span class="option-text">Chat</span>
            </li>
        </a>

        <a href=<?= ROOT_URL."settings" ?>>
            <li class="menu-option">
                <span class="material-icons option-icons">settings_suggest</span>
                <span class="option-text">Settings</span>
            </li>
        </a>

        <a href=<?= ROOT_URL."about" ?>>
            <li class="menu-option">
                <span class="material-icons option-icons">alternate_email</span>
                <span class="option-text">About</span>
            </li>
        </a>


    </ul>
</nav>