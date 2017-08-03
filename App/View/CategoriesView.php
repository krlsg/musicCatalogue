<?php

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\CategoriesTemp;
use musicCatalogue\View\Templates\FooterTemp;

class CategoriesView
{
    public function render($pageData)
    {
//var_dump($pageData);
        $headerTemp = new HeaderTemp();
        $header = $headerTemp->getHeader();

        $categoriesTemp = new CategoriesTemp();
        $categories = $categoriesTemp->getCategories($pageData);

        $footerTemp = new FooterTemp();
        $footer = $footerTemp->getFooter();

        return null;
    }
}