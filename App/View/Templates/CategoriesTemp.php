<?php

namespace musicCatalogue\View\Templates;

class CategoriesTemp
{
    public function getCategories($pageData)
    {
        //var_dump($pageData);
        echo '
            <div align="center" style="overflow-y: scroll; height:600px;">
                <h1 align="center">Genres</h1>
                <table width="70%" border="1" bordercolor="green">
                <tr align="center">
                    <td bgcolor="yellow" width="25%"><b>Pop</b></td>
                    <td bgcolor="red" width="25%"><b>Rock</b></td>
                    <td bgcolor="green" width="25%"><b>Classical</b></td>
                    <td bgcolor="blue" width="25%"><b>Jazz</b></td>
                </tr><tr>
                ';
        for ($i = 0; $i < 4; $i++) {
            echo '<td valign="top">';
            foreach ($pageData[$i] as $value) {
                echo '<a href="?track_id=' . $value['track_id'] . '">' . $value['track_id'] . '. ' . $value['title'] . '</a><br>';
            }
            echo '</td>';
        }
        echo '</tr>
            </div>
        ';
    }
}