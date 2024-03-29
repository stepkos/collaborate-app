ines (61 sloc) 2.74 KB
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <?php require_once 'templates/metadata.php'; ?>
    <link rel='stylesheet' href='../static/css/offertDetail.css' type='text/css' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Project - <?php print_r($offert_main_data[0]['name']); ?></title>
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
            $project_owner_profile_picture = $offert_main_data[0]['profile_picture'];
            $project_picture = $offert_main_data[0]['picture'];


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
        

            //dodać link do profilu ownera
            $owner_profile_link = ROOT_URL."profile/".$offert_main_data[0]['owner_id'];



            echo "
                <div id='project-img-holder' style='background-image: url(data:image/jpg;base64,".$project_picture."'></div>
                <div id='project-category'>$project_category</div>
                <h1 id='offert-title'>$project_name</h1>
                <div id='owner-holder'>
                    <div id='owner-picture' style='background-image: url(data:image/jpg;base64,".$project_owner_profile_picture."'></div>
                    <div id='owner-details'>
                        <p id='project-manager'>Project Manager</p>
                        <p id='owner-name'>$project_owner</p>
                        <a href='{$owner_profile_link}'>
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