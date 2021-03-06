<?php

namespace musicCatalogue\Controller;

use musicCatalogue\Model\HomeModel;
use musicCatalogue\View\HomeView;


class Home
{
    public function getDisplay()
    {

        $model = new HomeModel();
        $pageData = $model->getPageData();

        $route = new HomeView();
        $display = $route->render($pageData);

        return $display;
    }
}