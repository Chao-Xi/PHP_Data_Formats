<?php
   /**
    * Insert new node to the Eventlist
    * */

     $dom=new DOMDocument('1.0');
     $dom->load('./t.xml');
     $event_list=$dom->getElementsByTagName('EventList');
     $event=$dom->createElement('event','System');
     $event_list->item(0)->appendChild($event);
     //add the new node to the root
     
     $event_attr_obj=$dom->createAttribute('obj');
     $event_attr_obj->value='MAC_IOS';
     $event->appendChild($event_attr_obj);
     
     $event_attr_info=$dom->createAttribute('info');
     $event_attr_info->value='Sierra';
     $event->appendChild($event_attr_info);
     
     echo $dom->saveXML();
     $dom->save('./n3.xml');
   