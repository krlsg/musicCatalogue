<?php

namespace musicCatalogue\Controller;

use musicCatalogue\Model\CategoriesModel;
use musicCatalogue\View\CategoriesView;


class Categories
{
    public function getDisplay()
    {
        $model = new CategoriesModel();
        $pageData = $model->getPageData();

        $route = new CategoriesView();
        $display = $route->render($pageData);

        return $display;
    }
}