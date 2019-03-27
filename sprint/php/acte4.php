<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style>	
		</style>
	</head>
	<body>
		
		<?php
		
		//delaration des tableaux, chaque ligne contient un tableau
			$presents=array(
		array('nom'=>'MOUDOUNGA','prenom'=>'Joe',  'Age'=>'24ans', 'profil'=> '<a href="" >https://bit.ly/2TE5b8K </a> <br> '),
		array('nom'=>'MOUWENDZI','prenom'=>'Rick', 'Age'=>'28ans', 'profil'=> '<a href="" >https://bit.ly/2UcDU1r </a><br>'),
		array('nom'=>'ITOUTOU' ,'prenom'=>'Francois', 'Age'=>'21ans', 'profil'=> '<a href="">https://bit.ly/2HIzHN6 </a> <br>'),
		array('nom'=>'KOUHOUINIKINA','prenom'=>'Laurion', 'Age'=>'22ans', 'profil'=>'<a href="">https://bit.ly/2V0Btwe </a> <br>'),
		array('nom'=>'MEBALE','prenom'=>'Paul', 'Age'=>'22ans', 'profil'=> '<a href="">https://bit.ly/2V0Btwe </a> <br>'),
		array('nom'=>'DIN','prenom'=>'Kelby', 'Age'=>'21ans', 'profil'=> '<a href="">https://bit.ly/2JHpWk1 </a>
			<br>'),
		array('nom'=>'BOULINGUI','prenom'=>'Hamilton', 'Age'=>'25ans', 'profil'=> '<a href="">https://bit.ly/2FEZG64 </a><br>'),
		array('nom'=>'NGOUA','prenom'=>'Ismael', 'Age'=>'24ans', 'profil'=> '<a href="">https://bit.ly/2Ufcfgq </a><br>'),
		array('nom'=>'BOgnou','prenom'=>'Boris', 'Age'=>'39ans', 'profil'=> '<a href="">https://bit.ly/2HTBfTP </a><br>'),
		array('nom'=>'OBAME','prenom'=>'Billy', 'Age'=>'30ans', 'profil'=> '<a href="">https://bit.ly/2FEZG64 </a>'),
			);
		//lecture du tableau
			//lecture de chaque ligne du tableau
			foreach($presents as $ligne){
		// Lecture de chaque tableau de chaque ligne
			foreach($ligne as $cle=>$valeur){
		// Affichage
		echo $cle.': '.$valeur.'<br>';
		}
		}
		?>
	</body>
</html>