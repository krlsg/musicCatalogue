<?php

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class Search
{
    public function getPlayer_id($search)
    {
        $searchResponse = null;

        $tracks = new TracksList();

        $tracksList = $tracks->getListOfTracks('All');
        //var_dump($tracksList);

        foreach ($tracksList as $value) {
            if ($value['title'] === $search) {
                $searchResponse = $value['track_id'];
                return $searchResponse;
            }
        }

        return $searchResponse;

    }
}