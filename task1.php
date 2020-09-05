<?php

$alph=(explode(',',strtoupper( "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z")));
$name=strtoupper('domagojantonio');
$name_rev=strrev($name);
$name=str_split($name);
$name_rev=str_split($name_rev);
for ($i=0; $i <count($name) ; $i++) { 
	for ($j=0; $j <count($alph) ; $j++) { 
		if ($alph[$j]==$name[$i]) {
			echo "<b>".$alph[$j]."</b>";
		}
		else if($alph[$j]==$name_rev[$i])
		{
			echo "<u>".$alph[$j]."</u>";
		}
		else{
			echo $alph[$j];
		}
		
	}
	echo "<br>";
}