<?php

namespace TpBlog\Database\Post;

class DatabasePost{

    

    public function get($bdd){

        $req = $bdd->query('SELECT * FROM Post');
        // $results = $req->fetch();
        $tableau = [];
        while ($result = $req->fetch(\PDO::FETCH_ASSOC)) {

            $tableau[] = $result;
    
        }
        

        return $tableau;
        
    }

}