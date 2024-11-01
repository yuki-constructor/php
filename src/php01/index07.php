<?php
$people = [

  ["Taro" ,25,"men"],
  ["Taro" ,25,"men"],
  ["Taro" ,25,"men"],

];

foreach($people as $person){
  echo $person[0] ."(" .$person[1] ."歳" .$person[2] .")" ."<br />";
}

