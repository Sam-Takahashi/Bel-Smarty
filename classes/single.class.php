<?php

class Single extends Dbh
{
    public function singleRecipe()
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM recipe WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $id);
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
}
