<?php

		

// SITE INFOS ---------------------------------------------------------------------

$website_name = 	"Castaway Ministries";



$website_title = 	"Helping Hurting People Heal";



$destin =			"gary@castawayministries.com";



$domain_name =		"http://www.castawayministries.com";



$language =			"en";



// Charset : US : charset=UTF-8 / FR + ES : charset=ISO-8859-1

$charset =			"charset=ISO-8859-1";



$homechurch =		"http://www.shreveportlife.com";





// COPYRIGHT ---------------------------------------------------------------------

$copyright = '&copy; ' + date("Y") + ' Castaway Ministries. Website by <a href="http://www.j5designs.com" title="Mark Johnson">Mark Johnson</a>.';





// SOCIAL NETWORK URL ---------------------------------------------------------------------

	$email =			"mailto:gary@castawayministries.com";

	$email_account =	"gary@castawayministries.com";

	

	

// PAGES TITLES ---------------------------------------------------------------------

$titlePage_Home = 				"Castaway Ministries : Helping Hurting People Heal : Home";

$titlePage_Contact = 			"Castaway Ministries : Helping Hurting People Heal : Contact Us";




// LINKS PAGES ---------------------------------------------------------------------

		// The $nav_home, etc are used on the main navigation links in the header area

$nav_home = 			"index.php";

$nav_contact = 			"contact.php";





// metaDescription function ---------------------------------------------------------------------

function metaDescription($the_page){

	

		if($the_page == 'Home'){ 

			echo "Welcome to Castaway Ministries created by Mark Johnson";

		}

		elseif($the_page == 'Contact'){

			echo "Welcome to Castaway Ministries created by Mark Johnson";

		}

	

		

		

}





// metaKeywords function ---------------------------------------------------------------------

function metaKeywords($the_page){

	

		if($the_page == 'Home'){ 

			echo "Castaway Ministries";

		}

		elseif($the_page == 'Contact'){

			echo "Castaway Ministries";

		}

		

}

?>