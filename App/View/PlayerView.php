<?php

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\PlayerTemp;
use musicCatalogue\View\Templates\FooterTemp;

class PlayerView
{
    public function render($song, $commentData)
    {

        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $playerTemp = new PlayerTemp();
        $about = $playerTemp->getPlayer($song, $commentData);

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }

}