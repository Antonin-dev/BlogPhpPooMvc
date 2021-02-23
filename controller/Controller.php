<?php


use TpBlog\Database\Post\DatabasePost as Post;
use TpBlog\Database\Comment\DatabaseComment as Comment;

$controllerBis = new Controller;
$controllerBis->routage();


class Controller {



    public function routage(){

        if (isset($_GET['route'])) {

            require_once '../dao/Database.php';
            require_once '../config/Config.php';
            require_once '../dao/DatabasePost.php';
            require_once '../dao/DatabaseComment.php';


            $route = htmlspecialchars($_GET['route']);
            switch ($route) {
            case '1':
                
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
        
            case '2':
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
        
            case '3':
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
        
            case '4':
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
        
            case '5':
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
        
            case '6':
                $bdd = Database::getDatabase();
                $post = new Comment();
                $results = $post->get($bdd, $route);
                require '../view/ViewComment.php';
                break;
            
            default:
            break;
        }
        }
        
        // else {
        //     throw new Exception('ERREUR LA CON DE SES MORTS');
        // }

    }

    public function invoke()
    {

        require_once './dao/Database.php';
        require_once './config/Config.php';
        require_once './dao/DatabasePost.php';
        $bdd = Database::getDatabase();
        $post = new Post();
        $results = $post->get($bdd);
        require './view/ViewPost.php';


    }





}