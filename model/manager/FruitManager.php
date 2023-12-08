<?php

class FruitManager extends DbManager{
    public function genRand(){
            $query = $this->bdd -> query("SELECT fruits.*,ft.id as oui,type_name FROM fruits join fruits_types ft on fruits.id_type_fruit = ft.id  ORDER BY RAND() LIMIT 1");
            $results = $query->fetch();

            $types = new fruits_types($results["oui"],$results["type_name"]);
            $fruit = new Fruit($results["id"],$results["fruit_name"],$types);
            return $fruit;

        }

}