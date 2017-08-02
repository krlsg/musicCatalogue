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


class Router
{
    private $method;
    private $uri;

    public function getHandled(array $req)
    {
        $method = $req[0];
        $uri = $req[1];

        if($method === 'GET' && $uri != '/'){

            $selectPage = new Router();
            $handled = $selectPage->selectPage($uri);

            return $handled;

        }
        else {
            echo'Select pages';
        }
    }

    private function selectPage($uri)
    {
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        //var_dump($uri);

        switch ($uri){
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
                echo "Contact Page";

                $page = new Contact();
                $selectedPage = $page->getDisplay();
                break;
            default:
                echo 'Page not found';
                header('HTTP/1.1 404 Not Found');
        }

        return $selectedPage;
    }

}