<?php
 /**
   * Item function
  */
$dom=new DOMDocument('1.0');
$dom->load('./n3.xml');
$e=$dom->getElementsByTagName('event');
echo $e->item(4)->nodeValue;
var_dump($e->item(4));
for($i=0; $i<$e->length;$i++)
{
    echo $e->item($i)->nodeValue.' ';
}