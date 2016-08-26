<?php
/*
C(m,n) = m! / n!(m - n)!

5! = 5 x 4 x 3 x2 x 1
*/
function tandaseru($a)
{
	$hasil = 1;
	while ($a > 0) {
		$hasil *= $a;
		$a--;
	}
	return $hasil;
}
function rumus($m, $n)
{
	$hasil = tandaseru($m) / (($m - $n) * tandaseru($n)); // C(m,n) = m! / n!(m - n)!
	return $hasil;
}
echo rumus(5, 3);
?>