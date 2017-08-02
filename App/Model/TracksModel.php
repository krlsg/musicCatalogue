<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 10:28 AM
 */

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class TracksModel
{
    public function getPageData(){
        $tracks = new TracksList();

        $pageData = $tracks->getListOfTracks('All');
        //var_dump($pageData);
        return $pageData;
    }
}