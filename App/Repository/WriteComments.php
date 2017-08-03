<?php

namespace musicCatalogue\Repository;

class WriteComments extends DatabaseConnection
{
    public function writeToDB($commentDetails)
    {
        //User inputs his contacts e.g: (doesnt know about the scam)
        $track_id = $commentDetails['track_id'];
        $user = $commentDetails['author'];
        $comment = $commentDetails['comment'];

        //This information wont be viewed >:D
        $sql = "INSERT INTO comments (track_id, author, body, created_at)
        VALUES ($track_id, '$user', '$comment', CURRENT_TIMESTAMP )";
        if ($this->conn->query($sql) === true) {
            $writeResponse = true;
            return $writeResponse;
        } else {
            $writeResponse = false;
            return $writeResponse;
        }
    }

}