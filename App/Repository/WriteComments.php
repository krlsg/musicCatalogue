<?php
/**
 * Created by PhpStorm.
 * User: aruna
 * Date: 03-Aug-17
 * Time: 7:35 AM
 */

namespace musicCatalogue\Repository;


class WriteComments
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bootcamp";
        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function writeToDB($commentDetails) {
        //User inputs his contacts e.g: (doesnt know about the scam)
        $track_id = $commentDetails['track_id'];
        $user = $commentDetails['author'];
        $comment = $commentDetails['comment'];

        //This information wont be viewed >:D
        $sql = "INSERT INTO comments (track_id, author, body, created_at)
        VALUES ($track_id, '$user', '$comment', CURRENT_TIMESTAMP )";
        if ($this->conn->query($sql) === TRUE) {
            $writeResponse = True;
            return $writeResponse;
        } else {
            $writeResponse = False;
            return $writeResponse;
        }
    }

}