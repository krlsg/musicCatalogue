<?php

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\TracksTemp;
use musicCatalogue\View\Templates\FooterTemp;

class TracksView
{
    public function render($pageData)
    {
//var_dump($pageData);
        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $tracksTemp = new TracksTemp();
        $tracks = $tracksTemp->getTracks($pageData);

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }

}