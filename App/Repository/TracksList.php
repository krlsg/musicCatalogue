<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/1/17
 * Time: 10:19 PM
 */

namespace musicCatalogue\Repository;


class TracksList
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

    public function getListOfTracks($type){

        switch ($type){
            case 'catD1':
                $sql = "SELECT * FROM track WHERE category_id = 1 ORDER BY created_at DESC";
                break;
            case 'catD2':
                $sql = "SELECT * FROM track WHERE category_id = 2 ORDER BY created_at DESC";
                break;
            case 'catD3':
                $sql = "SELECT * FROM track WHERE category_id = 3 ORDER BY created_at DESC";
                break;
            case 'catD4':
                $sql = "SELECT * FROM track WHERE category_id = 4 ORDER BY created_at DESC";
                break;
            case 'catI1':
                $sql = "SELECT * FROM track WHERE category_id = 1 ORDER BY track_id";
                break;
            case 'catI2':
                $sql = "SELECT * FROM track WHERE category_id = 2 ORDER BY track_id";
                break;
            case 'catI3':
                $sql = "SELECT * FROM track WHERE category_id = 3 ORDER BY track_id";
                break;
            case 'catI4':
                $sql = "SELECT * FROM track WHERE category_id = 4 ORDER BY track_id";
                break;
            default:
                $sql = "SELECT * FROM track";
        }

        $result = mysqli_query($this->conn, $sql);
        $rowCount = mysqli_num_rows($result);
        //echo $rowCount;
        $listOfTracks = [];
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $listOfTracks[] = array(
                    'track_id' => $row["track_id"],
                    'title' => $row["title"],
                    'author' => $row["author"],
                    'body' => $row["body"],
                    'date' => $row["created_at"]
                );
            }
            //var_dump($listOfTracks);
            return $listOfTracks;
        } else {
            echo "0 results";
            return $listOfTracks;
        }
    }
}