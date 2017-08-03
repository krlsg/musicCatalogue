<?php

namespace musicCatalogue\Controller;

use musicCatalogue\Model\TracksModel;
use musicCatalogue\Model\PlayerModel;
use musicCatalogue\View\PlayerView;

class Player
{
    public $track_id;

    public function getDisplay()
    {
        $track_id = $_GET['track_id'];

        $model = new TracksModel();
        $pageData = $model->getPageData();

        $playerModel = new PlayerModel();
        $commentData = $playerModel->getCommentData($track_id);

        //var_dump($commentData);
        $song = $pageData[$track_id - 1];

        $route = new PlayerView();
        $display = $route->render($song, $commentData);

        return $display;
    }
}