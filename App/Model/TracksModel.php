<?php

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class TracksModel
{
    public function getPageData()
    {
        $tracks = new TracksList();

        $pageData = $tracks->getListOfTracks('All');
        //var_dump($pageData);
        return $pageData;
    }
}