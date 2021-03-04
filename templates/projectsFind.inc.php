<?php

    $z_index = 1;
    for($i = 0; $i <  $display_projects_count[0][0]; $i+=1){

        $tempName = $offerts_main_data[0][2];
        $single_offert = array_values(array_filter($offerts_main_data, function($record) use ($tempName){
            return $record[2] === $tempName;
        }));
        $offerts_main_data = array_slice($offerts_main_data, count($single_offert));

        $id = $single_offert[0][0];
        $offert_name = $single_offert[0][3];
        $project_category = $single_offert[0][5];
        $project_picture = $single_offert[0][2];
            
            $technologies = NULL;
            foreach($single_offert as $record){
                $name = $record['technology'];
                $color = $record['color'];
                $technologies.="<div class='project-tech' style='background-color:{$color}'>{$name}</div>";
            };

            $link = ROOT_URL."offertDetails/".$id;
            
            echo "
                    <div class='project-card-find' style='z-index:{$z_index}' id='{$id}'>
                        <a href='{$link}'>
                            <div class='project-img-holder' style='background-image:url(data:image/jpg;base64,".$project_picture."'></div>
                            <div class='project-category'>{$project_category}</div>

                            <div class='project-bottom-holder-find'>
                                <h1 class='project-title'>
                                    {$offert_name}
                                </h1>

                                <div class='project-tech-holder'>
                                    {$technologies}
                                </div>
                            </div>
                        </a>
                    </div>
                ";
            
            $z_index+=1;
        
    };

?>