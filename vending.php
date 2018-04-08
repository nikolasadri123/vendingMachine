<?php

$coin = array ( 
    50000 => '50 ribu', 
    20000 => '20 ribu', 
    10000 => '10 ribu', 
    5000 => '5 ribu', 
    2000 => '2 ribu', 
    1000 => '1 ribu', 
    500 => '5 ratus' );

// uang yang diberikan
$base = 50000;

// harga
$cost = 27000;

// total
$total = $base - $cost;
$out = array ();
$num = 0;

if ( $total > 0 )
{
	foreach ( $coin AS $cn => $cv )
	{
		if ( $total >= $cn )
		{
			while ( $total >= $cn )
			{
				$out[$num] += 1;
				$total -= $cn;
			}

            if ( $out[$num] > 1 )
			{
				$add = ( is_array ( $cv ) ? $cv[1] : $cv . 's' );
			}
			else
			{
				$add = ( is_array ( $cv ) ? $cv[0] : $cv );
            }
            
			$out[$num] = $out[$num] . ' lembar ' . $add;

			$num++;
		}
	}

	echo "kembalian = <br />" . implode ( "<br />dan<br />", $out );
		
}
else
{
	echo 'no change to give';
}