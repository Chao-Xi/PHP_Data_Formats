<?php 
  //array->json
  $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
  var_dump($arr); 
  echo "<br/>";
  var_dump(json_encode($arr));
  
  class Object{
     public $body="";
     public $id="";
     public $approved="";
     public $favorite_count="";
     public $status="";

  }

  $obj=new Object();
  //object to json
  $obj->body="I love NYC";
  $obj->id=1;
  $obj->approved=true;
  $obj->favorite_count=20;
  $obj->status=null;
  var_dump(json_encode($obj));

