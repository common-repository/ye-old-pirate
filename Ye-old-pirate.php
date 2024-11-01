<?php
/*
Plugin Name: Ye Old Pirate
Plugin URI: https://github.com/captain-sensible/yeoldpirate
Description: tweaks text in existing posts to read like a pirate is narrating
Author: Andy Brookes
Author URI:https://github.com/captain-sensible
Version: 1.05
Licence:GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

*/




function yop_pirateTweakText($text)
{
$tofilter = $text;


$yopVar = array(
		"the"=>				"Ye olde",
		"yes"=>				"aye ",
		"stagnant"=> 		"addle",
		"hey"=>			 	"ahoy",
		"call"=>			"hail" ,
		"crew"=>			"hands",
		"clothes"=>			"togs",
		"work shy"=>	 	"Abbey Lubber",
		"beggers"=>			"Abraham Men ",
		"begger"=>			"Abraham Men ",
		"afraid"=>			"Afeard",
		"hang"=>			"Short Drop and a  quick stop",
		"stop"=>			"Avast",
		"cover"=>			"Batten Down", 
		"minion"=>			"Before the mast",
		"goods"=>			"booty",
		"work shy"=>		"Abbey Lubber",
		"dawn"=>			"Aurora ",
		"duelling pistols"=>"barking irons",
		"eggs"=>			"cackle fruit",
		"barrel"=>			"cask",
		"knife"=>			"chivey",
		"stupid"=>		 	" Chowder Headed",
		"hanged "=> 		" Dance The Hempen Jig",
		"rum"=> 			"grog ",
		" drunk"=>		 	"Loaded To The GunnellS ",
		"mop "=> 			" swab",
		"pirate "=> 		"Buccaneer ",
		"pirates "=> 		"Buccaneers ",
		"push"=> 			" heave ho ",
		"sabotage"=> 		"Scuttle  ",
		"clean "=> 			" ship shape",
		" you"=> 			" ye",
		"pay attention "=> 	" avast ye",
		" cheat"=> 			"Hornswaggle ",
		"is"=>				"there be",
		"are"=>				"bist",
		"fool"=>			"Bobolyne",
		"whinger"=>			"Gnashgab",
		"lazy"=>			"Loitter-Sack",
		"smelly"=>			"Stymphalist",
		"basement"=>		"bilge",
		"cockroach"=>		"bombay runner",
		"cockroaches"=>		"bombay runners",
		"pull"=>			"bowse",
		"wave"=>			"breaker",
		"leave"=>			"disembark",
		"rubbish"=>			"gash",
		"garbage"=>         "gash",
		"sailor"=>			"jack",
		"tie"=>				"lash",
		"no"=>				"nay",
		"\.."=>           "  me hearties . &nbsp;<br>",
			
		);



foreach ($yopVar as $key => $value) {
 


$tofilter= preg_replace("*\b$key\b*u", $value, $tofilter);



}

return $tofilter;

}


add_filter( 'the_content', 'yop_pirateTweakText' );



