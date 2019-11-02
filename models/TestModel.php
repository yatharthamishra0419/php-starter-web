<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestModel
 *
 * @author yathartha
 */
class TestModel {

    private $dbConnection;

    public function __construct() {
        $this->dbConnection = DBConnection::getDbConnection();
    }

    public function getData() {
        $sql = "select * from MyGuests ";
        $result = $this->dbConnection->query($sql);
        $outputObject=[];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($outputObject, $row);
            }
        }
        return $outputObject;
    }

}
