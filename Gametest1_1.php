<?php
print "Vamos jogar uma partida de acertar o numero? (s/n)";
$ac = trim(fgets(STDIN));
while ($ac != 's' && $ac != 'n'){
	print "Entrada invalida. Digite novamente: ";
	$ac = trim(fgets(STDIN));
}
if ($ac == 's'){
print "Digite um numero inteiro ente 1 e 100: ";
$n = trim(fgets(STDIN));
$al = rand(1,100);
$life = 9;
while ($n != $al && $life != 0){
	if ($n > $al){
		print "O numero que você digitou é maior. Você ainda tem $life vidas. Tente novamente: ";
	    $n = trim(fgets(STDIN));
	    $life--;
	}
	   
	else{
		print "O numero que você digitou é menor. Você ainda tem $life vidas. Tente novamente: ";
	    $n = trim(fgets(STDIN));
	    $life--;
	}
	 }	
}
else{
	print "Talvez um proxama vez jogamos. ^^ ";
	exit;
	
}
	
 	if($life > 0){
		print "Você acertou. Parábens!!!!";
	}
	else {
		print "Game Over";
		exit;
	}
print "\nVocê ainda tem $life vidas. Vamos jogar o nivel 2 com mais 7 vidas extras? (s/n)";
$ac = trim(fgets(STDIN));
while ($ac != 's' && $ac != 'n'){
	print "Entrada invalida. Digite novamente: ";
	$ac = trim(fgets(STDIN));
}
if ($ac == 's'){
	print "Digite um numero inteiro ente 1 e 1000: ";
	$n = trim(fgets(STDIN));
	$al = rand(1,1000);
	$life = $life +7;
	while ($n != $al && $life != 0){
		if ($n > $al){
			print "O numero que você digitou é maior. Você ainda tem $life vidas. Tente novamente: ";
			$n = trim(fgets(STDIN));
			$life--;
		}

		else{
			print "O numero que você digitou é menor. Você ainda tem $life vidas. Tente novamente: ";
			$n = trim(fgets(STDIN));
			$life--;
		}
	}
}
else{
	print "Talvez um proxama vez jogamos. ^^ ";
	exit;
}

if($life > 0){
	print "Você acertou. Parábens!!!!";
	
}
else {
	print "Game Over";
	exit;
	}
	print "\n Você ainda tem $life vidas. Vamos jogar o nivel 3 com mais 11 vidas extras? (s/n)";
	$ac = trim(fgets(STDIN));
	while ($ac != 's' && $ac != 'n'){
		print "Entrada invalida. Digite novamente: ";
		$ac = trim(fgets(STDIN));
	}
	if ($ac == 's'){
		print "Digite um numero inteiro ente 1 e 10000: ";
		$n = trim(fgets(STDIN));
		$al = rand(1,10000);
		$life = $life +11;
		while ($n != $al && $life != 0){
			if ($n > $al){
				print "O numero que você digitou é maior. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
	
			else{
				print "O numero que você digitou é menor. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
		}
	}
	else{
		print "Talvez um proxama vez jogamos. ^^ ";
		exit;
	}
	
	if($life > 0){
		print "Você acertou. Parábens!!!!";
	}
	else {
		print "Game Over";
		exit;
	}
	print "\n Você ainda tem $life vidas. Vamos jogar o nivel 4 com mais 14 vidas extras? (s/n)";
	$ac = trim(fgets(STDIN));
	while ($ac != 's' && $ac != 'n'){
		print "Entrada invalida. Digite novamente: ";
		$ac = trim(fgets(STDIN));
	}
	if ($ac == 's'){
		print "Digite um numero inteiro ente 1 e 100000: ";
		$n = trim(fgets(STDIN));
		$al = rand(1,100000);
		$life = $life +14;
		while ($n != $al && $life != 0){
			if ($n > $al){
				print "O numero que você digitou é maior. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
	
			else{
				print "O numero que você digitou é menor. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
		}
	}
	else{
		print "Talvez um proxama vez jogamos. ^^ ";
		exit;
	}
	
	if($life > 0){
		print "Você acertou. Parábens!!!!";
	}
	else {
		print "Game Over";
		exit;
	}	
	print "\n Você ainda tem $life vidas. Vamos jogar o nivel 5 com mais 17 vidas extras? (s/n)";
	$ac = trim(fgets(STDIN));
	while ($ac != 's' && $ac != 'n'){
		print "Entrada invalida. Digite novamente: ";
		$ac = trim(fgets(STDIN));
	}
	if ($ac == 's'){
		print "Digite um numero inteiro ente 1 e 1000000: ";
		$n = trim(fgets(STDIN));
		$al = rand(1,1000000);
		$life = $life +17;
		while ($n != $al && $life != 0){
			if ($n > $al){
				print "O numero que você digitou é maior. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
	
			else{
				print "O numero que você digitou é menor. Você ainda tem $life vidas. Tente novamente: ";
				$n = trim(fgets(STDIN));
				$life--;
			}
		}
	}
	else{
		print "Talvez um proxama vez jogamos. ^^ ";
		exit;
	}
	
	if($life > 0){
		print "Você acertou. Parábens!!!! \n Você é o melhor";
	}
	else {
		print "Game Over";
		exit;
	}

?>