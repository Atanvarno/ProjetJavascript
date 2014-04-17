<?php
 if(isset($_POST) AND isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['message'])){
	extract($_POST);
	$valid = true;
	if(empty($nom)){
		$valid=false;
		$erreurnom="Vous n'avez pas rempli votre nom";
	}
	if(empty($email)){
		$valid=false;
		$erreuremail="Vous n'avez pas indiqué d'email";
	}
	if(empty($message)){
	$valid=false;
	$erreurmessage="Vous n'avez indiqué aucun message";
	}
	
	if($valid){
		
	}
	if(!empty($nom) AND !empty($email) AND !empty($message)){
		$message=str_replace("\'","'", $message);
		$destinataire="b.benet@hotmail.fr";
		$sujet="Formulaire de contact";
		$msg="Nouvelle question arrivee \n
		Nom : $nom \n
		Email : $email \n
		Message : $message";
		$entete="From: $nom \n";
		mail($destinataire, $sujet, $msg, $entete);
			echo "Votre message a été envoyé avec succes! ";
			echo "Vous allez être redirigé vers l'accueil dans quelques secondes";
			
		function redirect($url, $time)
{      
   //On vérifie si aucun en-tête n'a déjà été envoyé     
   if (!headers_sent()) 
   { 
     header("refresh: $time;url=$url");  
     exit; 
   } 
   else 
   { 
     echo '<meta http-equiv="refresh" content="',$time,';url=',$url,'">'; 
   } 
} 

//Utilisation 
redirect("http://iutdoua-webetu.univ-lyon1.fr/~p1305117/Projet%20S1","3"); 	
		}
	}
		
?>