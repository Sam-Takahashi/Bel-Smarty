<?php

class Search extends Dbh
{
    public function searchRecipe()
    {
        $str = $_POST["search"];
        $sql = "SELECT * FROM `recipe` WHERE name LIKE '%$str%' OR ingredients LIKE '%$str%'";
        $stmt = $this->connect()->prepare($sql);
       // $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
}
