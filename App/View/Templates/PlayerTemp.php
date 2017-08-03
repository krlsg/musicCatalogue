<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 11:02 AM
 */

namespace musicCatalogue\View\Templates;


class PlayerTemp
{
    public function getPlayer($song, $commentData)
    {
        //var_dump($song );
        echo '
            <div  align="center" style="overflow-y: scroll; height:500px;">
                <form action="" method="post">
                    <table width="100%">
                        <tr>
                            <td align="left">
                                <iframe width="800" height="450" src="https://www.youtube.com/embed/'.$song['youtube_link'].'?autoplay=1"></iframe>
                                <h2>'.$song['title'].'</h2>
                                <p>'.$song['body'].'</p>
                            </td>
                            <td valign="top" width="100%">
                                <input type="text" placeholder="Comment" name="comment" size="50" />
                                <input type="text" name="author" placeholder="Your Name" />
                                <input type="hidden" name="track_idCom" value="'.$song['track_id'].'">
                                <input type="submit" value="Submit"/>
                                
                                <div  align="center" style="overflow-y: scroll; height:550px;">';
                                    foreach($commentData as $value){
                                        echo '<p>'.$value['body'].'<I> by '. $value['author'].'</I></p>';
                                    }
                                echo '</div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        ';
    }
}