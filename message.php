<?php

function formatDate($date)
	{
		if (isset($date))
		{
			$arrDate = explode("/", $date);
			if (checkdate($arrDate[1], $arrDate[0], $arrDate[2]))
			{
				return (int)$arrDate[2]."-".(int)$arrDate[0]."-".(int)$arrDate[1];
			}			
			else
			{
				return '';
			}
		}
	}

$date = formatDate($_POST['date']);

$objet = 'reservation par '.$_POST['prenom'].' '.$_POST['nom'];
$message = $date.'T'.$_POST['hdebut'].';'.$date.'T'.$_POST['hfin'];

mail('##########@gmail.com', $objet, $message);
?>
