<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <?php require_once 'templates/metadata.php'; ?>
    <link rel='stylesheet' href='../static/css/offertDetail.css' type='text/css' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Documen213234234</title>
</head>


<body>
    <?php require_once 'templates/menuLeft.php'; ?>

    <main>
        
        

        <section id='offert-card'>
            <?php
        
            $project_name = $offert_main_data[0]['name'];
            $project_category = $offert_main_data[0]['project_category'];
            $project_description = $offert_main_data[0]['description'];
            $project_owner = $offert_main_data[0]['owner'];


            $technologies = NULL;
            foreach($offert_technologies as $record){
                $color = $record['color'];
                $name = $record['name'];
                $technologies.="<div class='technology-div' style='background-color:{$color}'>{$name}</div>";
            }


            $collaborators = NULL;
            if(isset($offert_collaborators)){
                foreach($offert_collaborators as $record){
                    $collaborators.="<div class='collaborator-picture' style='background-image: url(../static/images/john.jpg)'></div>";
                }
            }
        

            




            echo "
                <div id='project-img-holder' style='background-image:url(../static/images/obraz.png)'></div>
                <div id='project-category'>$project_category</div>
                <h1 id='offert-title'>$project_name</h1>

                <div id='owner-holder'>
                    <div id='owner-picture' style='background-image: url('../static/images/john.jpg')'></div>
                    <div id='owner-details'>
                        <p id='project-manager'>Project Manager</p>
                        <p id='owner-name'>$project_owner</p>

                        <a href='#'>
                            <div id='show-profile'>Show profile</div>
                        </a>
                    </div>
                </div>

                <div id='collaborators-holder'>
                    <p id='collaborators-title'>Collaborators</p>
                    <div id='picture-holder'>
                        $collaborators
                    </div>

                </div>

                
                <div id='technology-holder'>
                    $technologies
                </div>


            

                <p id='offert-description'>
                    $project_description
                </p>
            ";
        
            ?>
        


     

    </main>

</body>