<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/1/17
 * Time: 10:13 AM
 */

namespace musicCatalogue;

use musicCatalogue\Controller\Home;
use musicCatalogue\Controller\Categories;
use musicCatalogue\Controller\Results;
use musicCatalogue\Controller\Tracks;
use musicCatalogue\Controller\About;
use musicCatalogue\Controller\Contact;
use musicCatalogue\Controller\Player;


class Router
{
    private $method;
    private $uri;
    protected $player_id;

    public function getHandled(array $req)
    {
        $method = $req[0];
        $uri = $req[1];
        $player_id = $req[2];

        //var_dump($player_id);

        if ($player_id != null) {

            $selectPage = new Router();
            $handled = $selectPage->selectPage('/player', $player_id);

            return $handled;

        } elseif ($method === 'GET' && $uri != '' || $method === 'POST') {

            $selectPage = new Router();
            $handled = $selectPage->selectPage($uri);

            return $handled;

        } elseif ($method == '' && $uri == '') {

            $selectPage = new Router();
            $handled = $selectPage->selectPage($uri);

            return $handled;

        } else {
            echo 'Navigation Error';
        }
    }

    private function selectPage($uri)
    {
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        //var_dump($uri);

        switch ($uri) {
            case '/':
                $page = new Home();
                $selectedPage = $page->getDisplay();
                break;
            case '/home':
                $page = new Home();
                $selectedPage = $page->getDisplay();
                break;
            case '/categories':

                $page = new Categories();
                $selectedPage = $page->getDisplay();
                break;
            case '/results':
                echo "Results Page";

                $page = new Results();
                $selectedPage = $page->getDisplay();
                break;
            case '/tracks':

                $page = new Tracks();
                $selectedPage = $page->getDisplay();
                break;
            case '/about':
                $page = new About();
                $selectedPage = $page->getDisplay();
                break;
            case '/contact':
                $page = new Contact();
                $selectedPage = $page->getDisplay();
                break;
            case '/player':
                $page = new Player();
                $selectedPage = $page->getDisplay();
                break;
            default:
                echo 'Page not found';
                header('HTTP/1.1 404 Not Found');
        }

        return $selectedPage;
    }

}