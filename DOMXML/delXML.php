<?php
 $dom=new DOMDocument('1.0');
 $dom->load('./n1.xml');
 $list=$dom->getElementsByTagName('event');
 foreach($list as $item)
 {
   $attr_obj=$item->getAttribute('obj');
   if($attr_obj=='disk')  
   {
      $item->parentNode->removeChild($item);
   }  
 }
 echo $dom->saveXML();
 $dom->save('./n2.xml');
     