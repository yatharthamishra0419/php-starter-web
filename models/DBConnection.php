<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author yathartha
 */
class DBConnection {
    
    static $dbConn=array();
    
    public static function getDbConnection($databaseName="newsite"){
        if(self::$dbConn[$databaseName]==null){
            self::$dbConn[$databaseName]=new mysqli(MYSQL_HOST,
            MYSQL_USERNAME,MYSQL_PASSWORD,$databaseName);
            if(self::$dbConn[$databaseName]->connect_error){
                die("cannot connect to database". self::$dbConn[$databaseName]->connect_error);
            }
        }
        return self::$dbConn[$databaseName];
    }
}
