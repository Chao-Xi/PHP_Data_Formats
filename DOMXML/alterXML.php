<?php
 $dom=new DOMDocument('1.0');
 $dom->load('./n.xml');
 $list=$dom->getElementsByTagName('event');
 foreach($list as $item)
 {
   $attr_obj=$item->getAttribute('obj');
   if($attr_obj=='cpu')  
   {
      $attr_count=$item->getAttribute('count');
      $item->setAttribute('count',$attr_count+1);   
      $item->nodeValue="cpu is down";
   }  
 }
 echo $dom->saveXML();
 $dom->save('./n1.xml');
     