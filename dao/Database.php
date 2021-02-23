<?php


class Database{

    private static $bdd = null;

    public static function getDatabase () {

        if (self::$bdd == null) {
            try {

            self::$bdd = new PDO(DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
            

            } catch (Exception $e) {
            $e->getMessage();
            } 
        }
        return self::$bdd;
    }
}


