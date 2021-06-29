
<h4>

<?php

/* var_dump($WeekDayTomorrow);

var_dump($StarTime);
var_dump($EndTime); */

/* var_dump($DaySorted); */
$TempToDay=[true,""];




foreach ($DaySorted as $line){
        
    if($line->Day==="$Tomorrow[$WeekDayNow]"){
        
        if($TempToDay!=$line->Day){
            $TempToDay[0]=false;
            $TempToDay="$line->Day";
        }else echo " - ";

        echo $traduci[$line->Day]." ".$line->ROUND." ".$line->COLOR." ".substr($line->TimeStart,0,5)."-".substr($line->TimeEnd,0,5);
  


    }     
}
?>
</h4>
