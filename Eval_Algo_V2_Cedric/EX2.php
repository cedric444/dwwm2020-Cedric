<?php
echo" ****Les noombres premiers ****\n\n";
do{
    do{
        $borneInferieure = readline("Entrer la borne inférieure : ");
        $borneSuperieure = readline("Entrer la borne superieure : ");
    }while(!is_numeric($borneInferieure) && !is_numeric($borneSuperieure));
}while(!is_int($borneInferieure*1) && !is_int($borneSuperieure*1));

for($i = 3; $i < $borneSuperieure; $i++)
{
    if($i % 2 != 0 && $i % 3 != 0)
    {
        echo $i."\n";
    }
}  
   
    
       

