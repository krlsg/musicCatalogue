<?php

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\HomeTemp;
use musicCatalogue\View\Templates\FooterTemp;


class HomeView
{
    public function render($pageData){

        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $homeTemp = new HomeTemp();
        $home = $homeTemp->getHome($pageData);

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }
}