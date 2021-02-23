<?php

require '../dao/Database.php';
require '../config/Config.php';

class DeleteComment {

    public function delete ($bdd, $idBillet){

        $request = $bdd->prepare('DELETE FROM Comment WHERE id=?');
        $request->execute(array($idBillet));

    }



}
$bdd = Database::getDatabase();
$deleteComment = new DeleteComment;
$deleteComment->delete($bdd, $_GET['delete']);
header('Location: http://localhost:8080/adrar2021/TD-BLOG/controller/Controller.php?route=' . $_GET['route']);