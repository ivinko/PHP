<?php


$redova=15;
$kolona=10;



$podaci = array();
for($i=0;$i<$redova;$i++)
{
    $kolone=array();
    for($j=0;$j<$kolona;$j++){
    $kolone[]=0;
    }
    $podaci[]=$kolone;
}

//napuni
$brojac=1;
$a=1;

while($a<=$redova*$kolona){

for($i=$kolona-$a; $i>=($a-1);$i--)
{
    if($brojac>$redova*$kolona){
        goto nastavi;
     }
    $podaci[$redova-$a][$i]=$brojac++;
}

for($i=$redova-($a+1); $i>=($a-1);$i--)
{
    if($brojac>$redova*$kolona){
        goto nastavi;
     }
    $podaci[$i][$a-1]=$brojac++;
}
for($i=$a;$i<=$kolona-$a;$i++)
{
    if($brojac>$redova*$kolona){
        goto nastavi;
     }
    $podaci[$a-1][$i]=$brojac++;
}
for($i=$a; $i<=$redova-($a+1);$i++)
{
    if($brojac>$redova*$kolona){
        goto nastavi;
     }
    $podaci[$i][$kolona-$a]=$brojac++;
}
$a++;
}


nastavi:

echo "<table>";
for($i=0;$i<$redova;$i++)
{
    echo "<tr>";
    for($j=0;$j<$kolona;$j++)
    {
        echo "<td>" . $podaci[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";