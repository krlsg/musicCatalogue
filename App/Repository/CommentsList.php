<?php

namespace musicCatalogue\Repository;

class CommentsList extends DatabaseConnection
{
    public function getListOfComments($track_id)
    {

        $sql = "SELECT * FROM comments WHERE track_id = $track_id ORDER BY created_at DESC ";

        $result = mysqli_query($this->conn, $sql);
        //$rowCount = mysqli_num_rows($result);
        //echo $rowCount;
        $listOfComments = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $listOfComments[] = array(
                    'comment_id' => $row["comment_id"],
                    'track_id' => $row["track_id"],
                    'author' => $row["author"],
                    'body' => $row["body"],
                    'created_at' => $row["created_at"],
                );
            }
            //var_dump($listOfComments);
            return $listOfComments;
        } else {
            //echo "0 results";
            return $listOfComments;
        }

    }
}