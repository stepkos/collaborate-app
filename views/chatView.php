<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/chat.css" type="text/css" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">


    <title>Chat</title>

</head>

<body>

    <?php require_once "templates/menuLeft.php"; ?>

    <main>

        <section>
            <div class="left">
                <nav>
                    <header>
                        <div style="float: left;">
                            <h1>All Matches</h1>
                        </div>

                        <div style="float: right;">
                            <img src="static\images\icons\search.svg" alt="lupa">
                        </div>

                        <div style="clear: both;"></div>
                    </header>

                    <div class="person">

                        <div>
                            <img src="static\images\john.png" alt="profile picture">
                        </div>

                        <div class="info">
                            <h2>Kamil Paczkowski</h2>
                            <h3>AC/DC Page</h3>
                        </div>

                        <!-- status - zielona kropka jak jestes wlascicielem projektu -->
                        <div class="owner"></div>

                    </div>

                    <div class="person">

                        <div>
                            <img src="static\images\john.jpg" alt="profile picture">
                        </div>

                        <div class="info">
                            <h2>Jan Napieralski</h2>
                            <h3>Hackaton 2021</h3>
                        </div>

                    </div>

                </nav>
            </div>
        </section>

        <section>
            <div class="right">

                <header>
                    <div>
                        <img src="static\images\john.png" alt="profile picture">
                    </div>

                    <div class="info">
                        <h2>Kamil Paczkowski</h2>
                        <h3>AC/DC Page</h3>
                    </div>

                    <div class="owner"></div>
                </header>

                <div class="chat">

                    <div class="sent">Siema</div>
                    <div class="sent">Ciekawe kto wpadał na tak szalony pomysł by pisać tą apkę w PHP</div>

                    <div class="received">Elo</div>
                    <div class="received">No przecież nie kto inny jak Ty mordziaty XD</div>

                    <div class="sent">Postaram się do rana front-end do techo chatu zrobić</div>

                </div>

                <div class="type">
                    <form method="POST">

                        <div class="fieldSet">

                            <input type="text" name="message">
                            <input type="submit" value="Sent">

                        </div>

                    </form>
                </div>

            </div>
        </section>

        <section style="clear: both;"></section>

    </main>

</body>

</html>