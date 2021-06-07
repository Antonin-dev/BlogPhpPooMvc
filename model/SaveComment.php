<?php

require_once '../dao/Database.php';
require_once '../config/Config.php';

var_dump($_GET);


class SaveDatabase{
   

    public function save($bdd, $prenom, $message, $idBillet){

        $date = date('Y-m-d H:i:s');
        $request = $bdd->prepare('INSERT INTO comment(
            NickName, 
            Contents, 
            CreationTimestamp,
            Post_Id) 
            VALUES (?,?,?,?)');

        return $request->execute(array($prenom,$message,$date,$idBillet));

        
        
        
    }
}

$bdd = Database::getDatabase();
$save = new SaveDatabase;
$save->save($bdd, htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['message']), htmlspecialchars($_GET['id']));
header('Location: '.BASE_URL.'controller/Controller.php?route=' . $_GET['id']);

