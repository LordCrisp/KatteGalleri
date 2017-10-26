
<?php

// kræver includes fra tirsdags opgaven  for at få $userDataArray

 
function userView($offset,$userCount,$userDataArray,$showPass,$showEmail){
    
    
// error trapping
// 
 if(gettype ($userDataArray)!="array" ){
        
return false;
    }
    
    
   $error=false;
   
    if(gettype ($userDataArray[0])!="array" ){
        
 $error=true;
    }
    
    
    
    
   if($error){
       return false;
       
   } 
  
    
// check offset
if( $offset>count($userDataArray)){
    $offset=count($userDataArray)-$userCount;
}

if($offset<0){
    $offset=0;
}



$endOffset=$offset+$userCount;

// check end offset
if( $endOffset>count($userDataArray)){
    $endOffset=count($userDataArray);
}


echo '<table style="border: 1px solid black ;">';

//loop gennem data
for($i=$offset;  $i<$endOffset;  $i++){
   
    $user=$userDataArray[$i];
    
    //row
    echo '<tr >';
    
     echo '<td ">'. $user["USERNAME"]."</td>";
     
     if($showPass){
      echo "<td>". $user["PASSWORD"]."</td>";
     }
     
      echo "<td>". $user["FULL_NAME"]."</td>";
      
      if($showEmail){
       echo "<td>". $user["EMAIL"]."</td>";
      }
        echo "<td>". $user["USER_TYPE"]."</td>";
     
    
    //slut row
    echo "</tr>";
}
// efter loop
echo"</table>";
}
 