<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 10:36 AM
 */

namespace musicCatalogue\View\Templates;


class TracksTemp
{
    public function getTracks($pageData){
        echo '
            <div align="center" style="overflow-y: scroll; height:550px;">
                <h1 align="center">All Tracks</h1>
                <table width="70%" border="1" bordercolor="green">
                <tr align="center">
                    <td bgcolor="yellow" width="5%"><b>Id</b></td>
                    <td bgcolor="red" width="25%"><b>Title</b></td>
                    <td bgcolor="green" width="25%"><b>Artist</b></td>
                    <td bgcolor="blue" width="45%"><b>Description</b></td>
                </tr>
                
                ';
                        foreach($pageData as $value){
                            echo '<tr><td><a href="?track_id='.$value['track_id'].'">'.$value['track_id'].'</a></td><td><a href="?track_id='.$value['track_id'].'">'.$value['title'].'</a></td><td><a href="?track_id='.$value['track_id'].'">'.$value['author'].'</a></td><td><a href="?track_id='.$value['track_id'].'">'.$value['body'].'</a></td></tr>';
                        }

                echo '
            </div>
        ';
    }
}