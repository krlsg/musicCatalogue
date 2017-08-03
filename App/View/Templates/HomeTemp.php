<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 12:46 AM
 */

namespace musicCatalogue\View\Templates;


class HomeTemp
{
    public function getHome($pageData) {
        echo '
        
<div align="center" style="overflow-y: scroll; height:500px;">
<div class="search">
    <h1>Search a track</h1>

    <div>
        <form action="">
            <input type="text" name="search" class="td2">
            <input type="submit" value="Search">
        </form>
    </div>
</div>
<div>
    <table width = 30% align ="left" border="1" bordercolor="#4CAF50">
        <tr>
            <td class="td"><p>Pop</p>
                <ol>';
                    for($i=0; $i<5; $i++){
                        echo '<a href="?track_id='.(isset($pageData[0][$i]['track_id']) ? $pageData[0][$i]['track_id'] : null ).'"><li>';
                        echo (isset($pageData[0][$i]['title']) ? $pageData[0][$i]['title'] : null );
                        echo '</li></a>';
                    }
                echo '</ol>
            </td>
        </tr>

        <tr>
            <td class="td"><p>Rock</p>
                <ol>';
                    for($i=0; $i<5; $i++){
                        echo '<a href="?track_id='.(isset($pageData[1][$i]['track_id']) ? $pageData[1][$i]['track_id'] : null ).'"><li>';
                        echo (isset($pageData[1][$i]['title']) ? $pageData[1][$i]['title'] : null );
                        echo '</li></a>';
                    }
                echo '</ol>
            </td>
        </tr>

    </table>
</div>

<div>
    <table width = 30% align ="right" border="1" bordercolor="#4CAF50">
        <tr>
            <td class="td"><p>Classical</p>
                <ol>';
                    for($i=0; $i<5; $i++){
                        echo '<a href="?track_id='.(isset($pageData[2][$i]['track_id']) ? $pageData[2][$i]['track_id'] : null ).'"><li>';
                        echo (isset($pageData[2][$i]['title']) ? $pageData[2][$i]['title'] : null );
                        echo '</li></a>';
                    }
                echo '</ol>
            </td>
        </tr>

        <tr>
            <td class="td"><p>Jazz</p>
                <ol>';
                    for($i=0; $i<5; $i++){
                        echo '<a href="?track_id='.(isset($pageData[3][$i]['track_id']) ? $pageData[3][$i]['track_id'] : null ).'"><li>';
                        echo (isset($pageData[3][$i]['title']) ? $pageData[3][$i]['title'] : null );
                        echo '</li></a>';
                    }
                echo '</ol>
            </td>
        </tr>
    </table>
</div>
</div>
        ';
    }
}