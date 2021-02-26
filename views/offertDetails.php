<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="../static/css/offertDetail.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen213234234</title>
</head>


<body>
    <?php require_once "templates/menuLeft.php"; ?>

    <main>
        

        <section id="offert-card">

            <div id="project-img-holder" style="background-image:url(../static/images/obraz.png)"></div>
            <div id="project-category">Desktop</div>
            <h1 id="offert-title"><?php print_r($url)?></h1>

            <div id="owner-holder">
                <div id="owner-picture" style="background-image: url('../static/images/john.jpg')"></div>
                <div id="owner-details">
                    <p id="project-manager">Project Manager</p>
                    <p id="owner-name">John Doe</p>

                    <a href="#">
                        <div id="show-profile">Show profile</div>
                    </a>
                </div>
            </div>

            <div id="collaborators-holder">
                <p id="collaborators-title">Collaborators</p>
                <div id="picture-holder">
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                    <div class="collaborator-picture" style="background-image: url('../static/images/john.jpg')"></div>
                </div>

            </div>

            
            <div id="technology-holder">
                <div class="technology-div" style="background-color:lime">Node.js</div>
                <div class="technology-div" style="background-color:blue">CSS</div>
                <div class="technology-div" style="background-color:orange">HTML</div>
                <div class="technology-div" style="background-color:yellow">Javascript</div>
                <div class="technology-div" style="background-color:aqua">React</div>
                <div class="technology-div" style="background-color:purple">C#</div>
                <div class="technology-div" style="background-color:red">Angular.js</div>
                <div class="technology-div" style="background-color:magenta; margin-right:auto">C++</div>
            </div>


        

            <p id="offert-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates similique, magnam fugiat cupiditate reprehenderit omnis rem nostrum labore pariatur saepe ipsum quidem ex ducimus atque quibusdam porro aliquam eos accusantium.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur excepturi saepe laborum obcaecati quaerat quia, placeat libero similique doloremque quibusdam. Accusamus at iure tempora quidem ad alias minima excepturi vitae!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid iure dolore ratione cumque assumenda et recusandae fugit consectetur minus provident suscipit non excepturi ducimus esse, possimus dolor, amet soluta ab!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam libero praesentium quidem illum perspiciatis eligendi molestiae sint reiciendis ipsum ratione laudantium, cum eaque! Laudantium, optio totam explicabo modi molestias laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam numquam voluptatibus natus eligendi, ipsam cum doloremque minus assumenda excepturi temporibus non repellendus facilis minima vel nesciunt itaque eum culpa dolorum!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur animi molestias iusto sapiente. Et, minima ut saepe doloribus, atque non quod, iste ad ipsam omnis aspernatur iure facere consectetur expedita!
            </p>


        </section>

    </main>

</body>