<?php
/*
	i codici qui inseriti sono proprietà di
	Francesco Stasi, pertanto ne è vietata la
	vendita e la cessione a terzi senza previa
	autorizzazione dell' autore.
*/
	
	//stampa della ragione di chiusura del sito
	switch ($_GET['c']) {
		case 2:
			echo $_GET['c'] . "Siamo temporaneamente in fase di manutenzione.<br>Torneremo operativi al più presto.";
			break;
		case 3:
			echo $_GET['c'] . "Siamo chiusi a tempo indeterminato.<br>Ci scusiamo per il disagio arrecato.";
			break; 
		default:
			echo $_GET['c'] . "Siamo temporaneamente chiusi.<br>Torneremo operativi al più presto.";
			break;
	}
?>
