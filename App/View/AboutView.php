<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 10:59 AM
 */

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\AboutTemp;
use musicCatalogue\View\Templates\FooterTemp;


class AboutView
{
    public function render(){

        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $aboutTemp = new AboutTemp();
        $about = $aboutTemp->getAbout();

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }
}