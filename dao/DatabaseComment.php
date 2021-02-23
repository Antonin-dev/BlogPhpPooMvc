<?php

namespace TpBlog\Database\Comment;

class DatabaseComment{

    public function get($bdd, $route){

        $req = $bdd->query('SELECT * FROM Comment  WHERE Post_Id=' . $route . ' ORDER BY Id DESC');
        $tableau = [];
        while ($result = $req->fetch()) {

            $tableau[] = $result;
    
        }
        
        return $tableau;

        
    }
}