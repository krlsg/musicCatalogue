<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 8:21 AM
 */

namespace musicCatalogue\Model;

use musicCatalogue\Repository\TracksList;


class CategoriesModel
{
    public function getPageData(){
        $tracks = new TracksList();

        $list1 = $tracks->getListOfTracks('catI1');
        $list2 = $tracks->getListOfTracks('catI2');
        $list3 = $tracks->getListOfTracks('catI3');
        $list4 = $tracks->getListOfTracks('catI4');

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