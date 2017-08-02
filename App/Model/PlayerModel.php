<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 3:48 PM
 */

namespace musicCatalogue\Model;

use musicCatalogue\Repository\CommentsList;


class PlayerModel
{
    public function getCommentData($track_id){
        $comments = new CommentsList();

        $commentData = $comments->getListOfComments($track_id);
        //var_dump($pageData);
        return $commentData;
    }

}