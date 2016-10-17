<?php
  $dom=new DOMDocument('1.0');
  $dom->load('./t.xml');
  $list=$dom->getElementsByTagName('event');
  //acquire event node list
  foreach($list as $item)
  {
    $attr_obj=$item->getAttribute('obj');
    $attr_info=$item->getAttribute('obj');
    echo "<pre>Object:$attr_obj; Info:$attr_info; Value:($item->nodeValue)</pre>";
    $item->setAttribute('count',1);
    //add the new attribute 
  }
  $dom->save('./n.xml');   