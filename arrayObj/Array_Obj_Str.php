<?php
    $array=['items'=>['Milk','Eggs','Bread']];
    var_dump($array); 
     
    $object=json_encode($array);
    var_dump($object);
    //string '{"items":["Milk","Eggs","Bread"]}' (length=33)

    $object1=json_decode($object,true);
    //true is default
    var_dump($object);
    //string '{"items":["Milk","Eggs","Bread"]}' (length=33)
  
    $object2=json_decode($object,false);
    var_dump($object2);
     //object(stdClass)[2]
     // public 'items' => 
     // array (size=3)
     //  0 => string 'Milk' (length=4)
     //  1 => string 'Eggs' (length=4)
     //  2 => string 'Bread' (length=5)
     
     foreach ($object2->items as $item) {
         echo "<pre>".$item."</pre>";
     }