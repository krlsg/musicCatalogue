<?php

namespace musicCatalogue\Repository;

class TracksList extends DatabaseConnection
{
    public function getListOfTracks($type)
    {
        switch ($type) {
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
            while ($row = mysqli_fetch_assoc($result)) {
                $listOfTracks[] = array(
                    'track_id' => $row["track_id"],
                    'title' => $row["title"],
                    'author' => $row["author"],
                    'body' => $row["body"],
                    'date' => $row["created_at"],
                    'youtube_link' => $row["youtube_link"],
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