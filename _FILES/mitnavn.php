<?php


$result=skrivNavn("bo","hund");




if(!$result){
  echo "error";  
}




function skrivNavn($navn,$efterNavn){
  
    //error trapping  
    
    // start med at tro alt er godt
    $error=false;
 
    // c
    // hecker fornavn
    if(gettype ($navn)!="string" ){
        
      // vi har fejl set fejl variabel til true
      $error=true;
    }
    
    if(gettype ($efterNavn)!="string"){
         // vi har fejl set fejl variabel til true
        $error=true; 
    }
    
    
    
    // error check
    if($error){
         // vi har fejl set returner false så vi kan se at funktionen fejlede
        return false;
    }
    else
    {
      // gør det funktionen skal gøre 
        
      echo $navn." "; 
       echo $efterNavn; 
       
        return true;
    }
    
 
    
}
