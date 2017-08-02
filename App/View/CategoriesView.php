<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 8:42 AM
 */

namespace musicCatalogue\View;

use musicCatalogue\View\Templates\HeaderTemp;
use musicCatalogue\View\Templates\CategoriesTemp;
use musicCatalogue\View\Templates\FooterTemp;


class CategoriesView
{
    public function render($pageData){
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