<?php
// Fetching Values From URL
$x1=$_POST['x'];
$x11 = (int)$x1;
$y1=$_POST['y'];
$y11 = (int)$y1;
$dir1=$_POST['dir'];
$str1=$_POST['str'];
//$str1=array($_POST['str']);




$len=strlen($str1);
$abc=array();

for ($ii=0 ; $ii<$len; $ii++ ) {
   $abc[$ii]=$str1[$ii];
   
   
        
    
}



for ($i=0 ; $i<$len; $i++ ) {
	
   if ($abc[$i]=="L")
   {
        if ($dir1=="N")
		{
			$dir1="W";
			continue;
		}
		if ($dir1=="W")
		{
			$dir1="S";
			continue;
		}
		if ($dir1=="S")
		{
			$dir1="E";
			continue;
		}
		if ($dir1=="E")
		{
			$dir1="N";
			continue;
		}
   }
		
	 elseif ($abc[$i]=="R")
	 {
        if ($dir1=="N")
		{
			$dir1="E";
			continue;
		}
		if ($dir1=="E")
		{
			$dir1="S";
			continue;
		}
		if ($dir1=="S")
		{
			$dir1="W";
			continue;
		}
		if ($dir1=="W")
		{
			$dir1="N";
			continue;
		}
	 }
	 elseif ($abc[$i]=="M")
	 {
		  if ($dir1=="N")
		{
			$y11=$y11 +1 ;
		}
		if ($dir1=="E")
		{
			$x11=$x11 +1 ;
		}
		if ($dir1=="S")
		{
			$y11=$y11 -1 ;
		}
		if ($dir1=="W")
		{
			$x11=$x11 -1 ;
		}
		 
		 
	 }   
}


echo "Result : ";
echo $x11;
echo $y11;
echo $dir1;
?>