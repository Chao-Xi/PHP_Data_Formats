<?php
    $json='{
             "First_Name":"Kevin",
             "Age":"20",
             "enrolled":"true",
             "married":"single", 
             "address":{
                          "Street":"123 Main Street",  
                           "City":"Buafflo",
                           "State":"New York" 
                        },
              "phone":[
                         {
                           "type":"home",
                           "number":"34343454"
                         },
                         
                          {
                            "type":"mobile",
                            "number":"354576723"
                         }
                       ]          
          }';

     // var_dump($json);   //string
      $obj=json_decode($json);
      //JSON->Object(json_decode());
     var_dump($obj);
     
     print $obj->{'First_Name'}."<br/>";
     print $obj->{'address'}->{'Street'}."<br/>";
     var_dump($obj->{'phone'});
     print $obj->{'phone'}[0]->{'type'}.' ';
     print $obj->{'phone'}[0]->{'number'}."<br/>";
     print $obj->{'phone'}[1]->{'type'}.' ';
     print $obj->{'phone'}[1]->{'number'};
     //1. The delimiter of json must be double quote
     //2. No single quote as delimiter at all
