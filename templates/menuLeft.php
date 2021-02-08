<style>
    <?php
        require_once("../static/css/menuLeft.css");
    ?>
</style>




<aside id="menuLeft">
    <section id="collaborate-logo">
        Collaborate
    </section>

    <section id="user-section">
        <div id="profile-picture" style="background-image: url('../static/images/john.jpg')"></div>

        <h1 id="user-name-text">John Doe</h1>

        <a href="#">
            <div id="myPanel">
                My panel
            </div>
        </a>

        <a href="#">
            <div id="logOut">
                Log out
            </div>
        </a>
       
    </section>


    <ul id="option-list">

        <a href="#">
            <li class="menu-option">
                <span class="material-icons option-icons"> home</span>
                <span class="option-text">Home</span>
            </li>
        </a>
        
        <a href="#">
            <li class="menu-option">
                <span class="material-icons option-icons">chat</span>
                <span class="option-text">Chat</span>
            </li>
        </a>

        <a href="#">
            <li class="menu-option">
                <span class="material-icons option-icons">settings_suggest</span>
                <span class="option-text">Settings</span>
            </li>
        </a>

        <a href="#">
            <li class="menu-option">
                <span class="material-icons option-icons">alternate_email</span>
                <span class="option-text">About</span>
            </li>
        </a>


    </ul>
</aside>