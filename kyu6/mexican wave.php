<?php
// пускать волну по буквам

function wave($people){
    $res = [];
    
    for($i = 0; $i < strlen($people); $i++)
      {
        if($people[$i] == ' ')
        {
        continue;
        }
      array_push($res, substr($people, 0, $i) . strtoupper($people[$i]) . substr($people, $i+1));
      }
    return $res;
    
    }



?>