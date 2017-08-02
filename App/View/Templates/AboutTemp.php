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
            


    <img src="/App/View/Templates/about.jpg" alt="Mountain View"
    style="width: 100%; height:300px;">

    <h1 align="center">About</h1>

    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident,
        sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
        ';
    }
}