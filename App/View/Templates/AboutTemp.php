<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 11:02 AM
 */

namespace musicCatalogue\View\Templates;


class AboutTemp
{
    public function getAbout() {
        echo '
    <div  align="center" style="overflow-y: scroll; height:400px;">
    <img src="/App/View/Templates/about.jpg" alt="Mountain View"
    style="width: 100%; height:300px;">

    <h1 align="center">About</h1>

    <p>"A.K.M: Amazing Kapable Men consists of Aruna Karlis and Michael. On this project, 
        team separated the task in three parts: database structure, done by Michael, site design, 
        created by Karlis and final mastering, executed by Aruna. When encountering problems and obstacles, 
        the team where there for each other, which made this the best functioning site 
        in the world. <br>"We hope you enjoy this music experience."</br>
    </p>
    </div>
        ';
    }
}
