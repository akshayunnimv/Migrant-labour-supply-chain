<?php

if(isset($_POST['sub']))
{
        
    $la=$_POST['la'];
    $lo=$_POST['lo'];
    $sel=mysqli_query($dbcon,"SELECT id, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM amb where st='1' HAVING distance < 60 ORDER BY distance");
    $i=0;
    if(mysqli_num_rows($sel)>0)
{
   

    while($r=mysqli_fetch_row($sel))
    {
         
        
        
        
        
}

    }
}
        ?>