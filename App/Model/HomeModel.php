<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/1/17
 * Time: 11:48 PM
 */

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class HomeModel
{
    public function getPageData(){
        $tracks = new TracksList();

        $list1 = $tracks->getListOfTracks('catD1');
        $list2 = $tracks->getListOfTracks('catD2');
        $list3 = $tracks->getListOfTracks('catD3');
        $list4 = $tracks->getListOfTracks('catD4');

        $pageData = [
            $list1,
            $list2,
            $list3,
            $list4
        ];
        //var_dump($pageData);
        return $pageData;
    }
}