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
		//utilisation des tableaux multimendimensionnels//
		//delaration des tableaux, chaque ligne contient un tableau
			$presents=array(
				array(
					'nom'   =>'MOUDOUNGA',
					'prenom'=>'Joe',  
					'age'   =>'24', 
					'profil'=>'https://bit.ly/2TE5b8K '
				),
				array(
					'nom'	=>'MOUWENDZI',
					'prenom'=>'Rick', 
					'age'	=>'28', 
					'profil'=>'https://bit.ly/2UcDU1r '
				),
				array(
					'nom'	=>'ITOUTOU' ,
					'prenom'=>'Francois', 
					'age'	=>'21', 
					'profil'=>'https://bit.ly/2HIzHN6'
				),
				array(
					'nom'	=>'KOUHOUINIKINA',
					'prenom'=>'Laurion', 
					'age'	=>'22', 
					'profil'=>'https://bit.ly/2V0Btwe '
				),
				array(
					'nom'	=>'MEBALE',
					'prenom'=>'Paul', 
					'age'	=>'22', 
					'profil'=>'https://bit.ly/2V0Btwe '
				),
				array(
					'nom'	=>'DIN',
					'prenom'=>'Kelby',
					'age'	=>'21', 
					'profil'=>'https://bit.ly/2JHpWk1'
					),
				array(
					'nom'	=>'BOULINGUI',
					'prenom'=>'Hamilton', 
					'age'	=>'25', 
					'profil'=>'https://bit.'
				),
				array(
					'nom'	=>'NGOUA',
					'prenom'=>'Ismael', 
					'age'	=>'24', 
					'profil'=>'https://bit.'
				),
				array(
					'nom'	=>'BOgnou',
					'prenom'=>'Boris', 
					'age'	=>'39',
					'profil'=>'https://bit.'
				),
				array(
					'nom'	=>'OBAME',
					'prenom'=>'Billy', 
					'age'	=>'30', 
					'profil'=>'https://bit.ly/2FEZG64'
				),
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

		echo '<table>'."\n";
		//premiere ligne on affiche les titres prenoms et surno, dans les 2 colonnes
		echo '<tr class="class1">';
		
		echo '<td class="class1">';
		echo '<td>#ID</td>;'
		echo '<td>Prenom';
		echo '<td>nom';
		echo '<td>age';
		echo '<td>Profil';

		?>
	</body>
</html>