<?php
$alph=(explode(',',strtoupper( "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z")));
$snake=(count($alph)/2)-1;
$n=0;
for ($i=0; $i <count($alph) ; $i++) { 
	for ($j=0; $j <count($alph) ; $j++) { 
		if ($j==$snake) {
			echo "<b>".$alph[$j]."</b>";
			$snake--;
			$n=0;
		}
		else if($snake<0 && $n==$j)
		{
			echo "<b>".$alph[$j]."</b>";
			
		}
		else{
			echo $alph[$j];
		}
		
	}
	$n++;
	$z=array_shift($alph);
    array_push($alph,$z);
    echo "<br>";
}