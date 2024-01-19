

<?php

//Connextion

$server="localhost";
$user="root";
$password="";
$base="bases_site";
$R= mysqli_connect($server,$user,$password,$base);
if(!$R){
    die("imposible de se connecter auserveur".mysqli_connect_error());
}
$Email=$_POST['Email_client'];
$MP=$_POST["Mot_passe"];
$A = mysqli_query($R," SELECT * FROM client WHERE  Email_client='$Email' AND Mot_passe='$MP'");
if(mysqli_fetch_row($A)==0){
	
	echo'<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	
	<body>
		<style>
			p {
			   
				font-style: italic;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
				color: #fbc02d;
			   text-align: center;
				margin-top: -80px;
				margin-left: 400px;
				margin-right: 400px;
				margin-bottom: 60px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
				padding-top: 10px;
				 
				box-shadow: 0em 0em 1em 1em #ffc107;
				background-color: #f3e5f5;
			   
				border-radius:  5em 5em 5em 5em;
			 
			   
			}
		</style>
		<p>mot_passe incorrect veuille reeseyez ou crée un nouveau compte ! <a href="connexionphp_incription.php">Fermer</a>
			
		</p>
	 
	</body>
	
	</html>';
 
   
 }
 else{
	
	header("location: Afficher_Medicament");
	exit();
 }
  
?>
