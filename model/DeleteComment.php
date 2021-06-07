<?php

require_once '../dao/Database.php';
require_once '../config/Config.php';

class DeleteComment {

    public function delete ($bdd, $idBillet){

        $request = $bdd->prepare('DELETE FROM Comment WHERE id=?');
        $request->execute(array($idBillet));

    }



}
$bdd = Database::getDatabase();
$deleteComment = new DeleteComment;
$deleteComment->delete($bdd, $_GET['delete']);
header('Location: ' . BASE_URL . 'controller/Controller.php?route=' . $_GET['route']);