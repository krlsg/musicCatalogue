<?php

namespace musicCatalogue\Controller;

use musicCatalogue\View\ContactView;


class Contact
{
    public function getDisplay()
    {

        $route = new ContactView();
        $display = $route->render();

        return $display;
    }
}