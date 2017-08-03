<?php

namespace musicCatalogue\Controller;

use musicCatalogue\Model\TracksModel;
use musicCatalogue\View\TracksView;


class Tracks
{
    public function getDisplay()
    {

        $model = new TracksModel();
        $pageData = $model->getPageData();

        $route = new TracksView();
        $display = $route->render($pageData);

        return $display;
    }
}