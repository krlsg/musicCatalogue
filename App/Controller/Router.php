<?php

namespace musicCatalogue\Controller;

use musicCatalogue\Controller\Home;
use musicCatalogue\Controller\Categories;
use musicCatalogue\Controller\Results;
use musicCatalogue\Controller\Tracks;
use musicCatalogue\Controller\About;
use musicCatalogue\Controller\Contact;
use musicCatalogue\Controller\Player;
use musicCatalogue\Model\Search;
use musicCatalogue\Repository\WriteContacts;
use musicCatalogue\Repository\WriteComments;


class Router
{
    protected $player_id;

    public function getHandled()
    {
        $req = [
            'method' => $_SERVER['REQUEST_METHOD'],
            'uri' => $_SERVER['REQUEST_URI'],
            'search' => isset($_GET['search']) ? $_GET['search']: null,
            'track_id' =>  isset($_GET['track_id']) ? $_GET['track_id']: null,
            'name' => isset($_POST['name']) ? $_POST['name']: null,
            'surname' => isset($_POST['surname']) ? $_POST['surname']: null,
            'email' =>  isset($_POST['email']) ? $_POST['email']: null,
            'phone' =>  isset($_POST['phone']) ? $_POST['phone']: null,
            'country' =>  isset($_POST['country']) ? $_POST['country']: null,
            'message' => isset($_POST['message']) ? $_POST['message']: null,
            'author' => isset($_POST['author']) ? $_POST['author']: null,
            'body' => isset($_POST['body']) ? $_POST['body']: null,
            'comment' => isset($_POST['comment']) ? $_POST['comment']: null,
            'author' => isset($_POST['author']) ? $_POST['author']: null,
            'track_idCom' => isset($_POST['track_idCom']) ? $_POST['track_idCom']: null,
        ];

        $method = $req['method'];
        $uri = $req['uri'];
        $player_id = $req['track_id'];
        $search = $req['search'];

        //var_dump($req['track_idCom']);

        if ($req['comment'] != null && $req['author'] != null && $req['track_id'] != null) {
            $commentDetails = [
                'comment' => $req['comment'],
                'author' => $req['author'],
                'track_id' => $req['track_id']
            ];

            $write = new WriteComments();
            $writeResponse = $write->writeToDB($commentDetails);

            if($writeResponse == True) {
                echo '<script>alert("Comment submitted!");</script>';
            }
            else {
                echo '<script>alert("Submission failed!");</script>';
            }
        }

        if ($req['name'] != null && $req['email'] != null && $req['message'] != null) {
            $contactDetails = [
                'name' => $req['name'],
                'surname' => $req['surname'],
                'email' => $req['email'],
                'phone' => $req['phone'],
                'country' => $req['country'],
                'message' => $req['message']
            ];

            $write = new WriteContacts();
            $writeResponse = $write->writeToDB($contactDetails);

            if($writeResponse == True) {
                echo '<script>alert("Message submitted!");</script>';
            }
            else {
                echo '<script>alert("Submission failed!");</script>';
            }
        }

        if ($search != null) {
            $searchSong = new Search();
            $searchResponse = $searchSong->getPlayer_id($search);

            //var_dump($searchResponse);
            if ($searchResponse != null) {
                $_GET['track_id'] = $searchResponse;
                $player_id = $searchResponse;
            } else {
                echo '<script>alert("No search results for that song title");</script>';
            }
        }

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