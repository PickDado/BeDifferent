
<h4>
<?php



$tempDay="";


$tpmD=true;

 /* var_dump($statement->fetchALL(PDO::FETCH_OBJ)); */   

 foreach($DaySorted as $line){

    if($tempDay!=$line->Day ) {
        if (!$tpmD){
            
            echo "<br>";}
        $tpmD=false;
        
        
        $tempDay="$line->Day";
    } else echo " - ";
    
    
    if($line->ROUND!=NULL){
        echo $traduci[$line->Day]." ".$line->ROUND." ".$line->COLOR." ".substr($line->TimeStart,0,5)."-".substr($line->TimeEnd,0,5);
          
    } else{
        echo $traduci[$line->Day]." oggi non si effettua la raccolta differenziata";
    }    
}; 




?></h4>