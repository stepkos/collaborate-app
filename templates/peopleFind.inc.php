<?php

    
    $z_index = 1;

    for($i = 0; $i < $users_count[0][0]; $i+=1){

        $tempName = $users_main_data[0][1];
        $single_user = array_values(array_filter($users_main_data, function($record) use ($tempName){
            return $record[1] === $tempName;
        }));
        $users_main_data = array_slice($users_main_data, count($single_user));

        $id = $single_user[0][0];
        $user_name = $single_user[0][1];
        $description = $single_user[0][2];
        $link = ROOT_URL."profile/".$id;

        $technologies = NULL;
            foreach($single_user as $record){
                $name = $record['technology'];
                $color = $record['color'];
                $technologies.="<div class='project-tech' style='background-color:{$color}'>{$name}</div>";
            };


            
            // echo "
            //         <div class='project-card-find' style='z-index:{$z_index}' id='{$id}'>
            //             <a href='{$link}'>
            //                 <div class='person-img' style='background-image:url(static/images/john.jpg)'></div>
            //                 <div class='project-category'>asdasd</div>

            //                 <div class='project-bottom-holder-find'>
            //                     <h1 class='project-title'>
            //                        asd
            //                     </h1>

            //                     <div class='project-tech-holder'>
            //                         asd
            //                     </div>
            //                 </div>
            //             </a>
            //         </div>
            //     ";

        echo "
            <div class='project-card-find' style='z-index:{$z_index}' id='{$id}'>
                <a href='{$link}'>
                    <div class='person-img' style='background-image:url(static/images/john.jpg)'></div>
        
                    <div class='person-info'>
                        <h1 class='project-title'>
                            $user_name
                        </h1>

                        <div class='description'>
                            $description
                        </div>

                        <div class='project-tech-holder'>
                            $technologies
                        </div>
                    </div>

                </a>
            </div>
        ";

        $z_index+=1;
    }

?>