<?php

$traduci=array("Mon"=>"Lunedì","Tue"=>"Martedì","Wed"=>"Mercoledì","Thu"=>"Giovedì","Fri"=>"Venerdì","Sat"=>"Sabato","Sun"=>"Domenica" );
$Tomorrow=array("Mon"=>"Tue","Tue"=>"Wed","Wed"=>"Thu","Thu"=>"Fri","Fri"=>"Sat","Sat"=>"Sun","Sun"=>"Mon" );

$WeekDayNow=date("D",time());
$WeekDayTomorrow=$Tomorrow["$WeekDayNow"];
$TimeNow=date("H:i",time());

$MON=[];$TUE=[];$WED=[];$THU=[];$FRI=[];$SAT=[];$SUN=[];
$DaySorted=[];

try{
$pdo = new PDO('mysql:host=127.0.0.1;dbname=s2icharmingrubbish','root','');
} catch(PDOException $e){
    die('<br>Non riesco a collegarmi al database '.$e->getMessage());
}

$statement = $pdo->prepare('SELECT Day,rounds.ROUND, COLOR, TimeStart, TimeEnd FROM sciacca LEFT JOIN rounds ON sciacca.ROUND=rounds.ID_ROUNDS');

$statement -> execute();

$result=$statement->fetchALL(PDO::FETCH_OBJ);

foreach($result as $line){
    switch ($line->Day){
        case "Mon": $MON[]=$line;break;
        case "Tue": $TUE[]=$line;break;
        case "Wed": $WED[]=$line;break;
        case "Thu": $THU[]=$line;break;
        case "Fri": $FRI[]=$line;break;
        case "Sat": $SAT[]=$line;break;
        case "Sun": $SUN[]=$line;break;
    }
};

$DaySorted[]=array_merge($MON,$TUE,$WED,$THU,$FRI,$SAT,$SUN);

$DaySorted=$DaySorted[0];

$StarTime="";
$EndTime="";


$sqlS_E="SELECT min(TimeStart)as StarTime, max(TimeEnd) as EndTime From sciacca LEFT JOIN rounds ON Sciacca.ROUND=rounds.ID_ROUNDS WHERE DAY = \"$WeekDayNow\"";

 $statementB = $pdo->prepare($sqlS_E);

$statementB -> execute();

$todayR=$statementB->fetch(PDO::PARAM_STR);

$StarTime=substr($todayR["StarTime"],0,5);

$EndTime=substr($todayR["EndTime"],0,5);








