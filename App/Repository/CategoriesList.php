<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 8:26 AM
 */

namespace musicCatalogue\Repository;


class CategoriesList extends DatabaseConnection
{
    public function getListOfCategories(){

        $sql = "SELECT * FROM categories";

        $result = mysqli_query($this->conn, $sql);
        $rowCount = mysqli_num_rows($result);
        //echo $rowCount;
        $listOfCategories = [];
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $listOfTracks[] = array(
                    'category_id' => $row["category_id"],
                    'title' => $row["title"],
                    'description' => $row["description"],
                    'date' => $row["created_at"]
                );
            }
            //var_dump($listOfTracks);
            return $listOfCategories;
        } else {
            //echo "0 results";
            return $listOfCategories;
        }
    }
}