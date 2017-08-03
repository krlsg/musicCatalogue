<?php
/**
 * Created by PhpStorm.
 * User: aruna
 * Date: 03-Aug-17
 * Time: 6:13 AM
 */

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class Search
{
    public function getPlayer_id($search) {
        $searchResponse = null;

        $tracks = new TracksList();

        $tracksList = $tracks->getListOfTracks('All');
        //var_dump($tracksList);

        foreach ($tracksList as $value) {
            if($value['title'] === $search) {
                $searchResponse = $value['track_id'];
                return $searchResponse;
            }
        }

        return $searchResponse;

    }
}