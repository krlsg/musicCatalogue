<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 3:53 PM
 */

namespace musicCatalogue\Repository;


class CommentsList
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