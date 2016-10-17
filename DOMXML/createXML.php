<?php
    /**
     * Create new XML file
     */
     $info=array(
             array('obj'=>'power','info'=>'power is shutdown'),
             array('obj'=>'memcache','info'=>'memchache used than 90%'),
             array('obj'=>'cpu','info'=>'cpu used than 90%'),
             array('obj'=>'disk','info'=>'disk is removed')
                 );
    //writein the data

     $dom=new DOMDocument('1.0');
     $dom->formatOutput=true;
     //Creates an XML document from the DOM representation.
     
     $eventList=$dom->createElement('EventList');
     //create the new root element=>EventList
     $dom->appendChild($eventList);
     
     for($i=0;$i<count($info);$i++)
     {
        $event=$dom->createElement('event');
        //Create the event node
        $text=$dom->createTextNode('PHP'.$i);  
        //create the Text node, php0, php1
        $event->appendChild($text);
        
        $arr_obj=$dom->createAttribute('obj');
        //Create the attribute 1 obj
        $arr_obj->value=$info[$i]['obj'];
        //assign the value to the obj
        $event->appendChild($arr_obj);
        //append obj node to the event, as the attribute 1

        $arr_obj=$dom->createAttribute('obj');
        //Create the attribute 1 obj
        $arr_obj->value=$info[$i]['obj'];
        //assign the value to the obj
        $event->appendChild($arr_obj);
        //append obj node to the event, as the attribute 1
        
        $arr_info=$dom->createAttribute('info');
        //Create the attribute 1 obj
        $arr_info->value=$info[$i]['info'];
        //assign the value to the obj
        $event->appendChild($arr_info);
        //append obj node to the event, as the attribute 1
        
        $eventList->appendChild($event); //event att to root node eventList
     }
     
     echo $dom->saveXML();
     
     $dom->save('./t.xml');
     