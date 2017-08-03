<?php

namespace musicCatalogue\Controller;

use musicCatalogue\View\AboutView;


class About
{
    public function getDisplay()
    {
        $route = new AboutView();
        $display = $route->render();

        return $display;
    }
}