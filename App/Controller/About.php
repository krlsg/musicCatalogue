<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/1/17
 * Time: 11:46 AM
 */

namespace musicCatalogue\Controller;
use musicCatalogue\View\AboutView;


class About
{
    public function getDisplay(){

        $route = new AboutView();
        $display = $route->render();

        return $display;
    }
}