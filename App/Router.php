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
use musicCatalogue\Controller\Track;
use musicCatalogue\Controller\About;
use musicCatalogue\Controller\Contact;


class Router
{
    public $method;
    public $uri;

    public function handle(array $req)
    {
        $method = $req[0];
        $uri = $req[1];

        if($method === 'GET' && $uri != '/'){

            $selectPage = new Router();
            $response = $selectPage->selectPage($uri);

        }
        else {
            echo'Select pages';
        }
    }

    public function selectPage($uri)
    {
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        var_dump($uri);

        switch ($uri){
            case '/home':
                echo "Home Page";

                $page = new Home();
                $response = $page->display();
                break;
            case '/categories':
                echo "Categories Page";

                $page = new Categories();
                $response = $page->display();
                break;
            case '/results':
                echo "Results Page";

                $page = new Results();
                $response = $page->display();
                break;
            case '/track':
                echo "track Page";

                $page = new Track();
                $response = $page->display();
                break;
            case '/about':
                echo "About Page";

                $page = new About();
                $response = $page->display();
                break;
            case '/contact':
                echo "Contact Page";

                $page = new Contact();
                $response = $page->display();
                break;
            default:
                echo 'Page not found';
                header('HTTP/1.1 404 Not Found');
        }
    }

}