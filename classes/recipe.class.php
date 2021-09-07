<?php

class Recipe extends Dbh
{
    public function getRecipe()
    {
        $category = "brsn";
        $sql = "SELECT * FROM recipe WHERE category=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $category);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
}


