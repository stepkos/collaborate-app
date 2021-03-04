<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/addProject.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <?php require_once "templates/menuLeft.php"; ?>

    <main>
        <div id="form_holder">
            <form method="POST" id="add_project_form" enctype="multipart/form-data">
                <label class="custom_file_upload">
                    <input type="file" name="project_photo" />
                    <p>Press to upload project's photo</p>
                </label>

                <input type="text" id="project_name" name="project_name" placeholder="Project's name" /> 

                <section id="top-panel-technology">

                <label for="search-technology" id="search-label">Project technologies</label>
                <input type="text" name="search-technology" id="search-input" placeholder="Search...">

                <div id="technologies-holder">

                <?php
                    foreach($technologies as $tech) {
                        $active = '';
                        if ($tech['id'] != null) {
                            $active = 'checked=true';
                        }

                        echo '
                            <input type="checkbox" class="technology-checkbox" id='.$tech['name'].' value="'.$tech['name'].'" name="technologies[] " '.$active.' >
                            <label for="'.$tech['name'].'" class="technology-div" style="background-color: '.$tech['color'].';">
                                <span style="z-index:2;">'.$tech['name'].'</span>
                            </label>
                        ';
                    }
                ?>

                    
                </div>

                </section>

                <select id="project_type" name="project_target">
                    <option value="Web">Web</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Mobile">Mobile</option>
                    <option value="Mixed">Mixed</option>
                    <option value="Other">Other</option>
                    <option value="Undefined">Undefined</option>
                </select>

                <input type="textarea" id="project_description" name="project_description" placeholder="Project's description" />

                <input type="submit" />
            </form>
        </div>
    </main>

    <script src="static/javascript/jquery.js" language="javascript"></script>
    <script src="static/javascript/searchInput.js" language="javascript"></script>

</body>
</html>
