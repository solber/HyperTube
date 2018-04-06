<?php
	
	if (session_status() == PHP_SESSION_NONE) { session_start(); }

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en_EN";

	if (isset($_SESSION['auth']))
		$_SESSION['lang'] = $_SESSION['auth']->lang;

	/* 404 page */
	$missing['en_EN'] = [
	    "header" => "Woops .. where are we ?",
	    "h3" => "SORRY",
	    "p" => "The Page You're Looking for Was Not Found.",
	    "link" => "Go home",
	];

	$missing['fr_FR'] = [
	    "header" => "Woops .. oû somme nous ?",
	    "h3" => "DESOLE",
	    "p" => "La page que vous cherchez n'éxiste pas",
	    "link" => "Accueil",
	];

	$missing['de_DE'] = [
	    "header" => "Oops .. wo sind wir ?",
	    "h3" => "ENTSCHULDIGUNG",
	    "p" => "Die von Ihnen gesuchte Seite wurde nicht gefunden.",
	    "link" => "Zurück zur Hauptseite",
	];
	/* END 404 */

	/*Account page */
	$account['en_EN'] = [
		"title" => "My account",
		"username" => "Username",
		"profile_pic" => "Profile Picture",
		"fullname" => "Full Name",
		"change" => "Change",
		"password" => "Password",
		"passwordr" => "Password Repeat",
	];

	$account['fr_FR'] = [
		"title" => "Mon compte",
		"username" => "Nom d'utilisateur",
		"profile_pic" => "Image de profil",
		"fullname" => "Nom complet",
		"change" => "Changer",
		"password" => "Mot de passe",
		"passwordr" => "Repeter mot de passe",
	];

	$account['de_DE'] = [
		"title" => "Mein Konto",
		"username" => "Benutzername",
		"profile_pic" => "Profilbild",
		"fullname" => "Vollständiger Name",
		"change" => "Ändern",
		"password" => "Passwort",
		"passwordr" => "Password wiederholen",
	];
	/* END account */

	/* biblio page */
	$biblio['en_EN'] = [
		'title' => 'Title',
		'previous' => 'Previous',
		'next' => 'Next',
	];

	$biblio['fr_FR'] = [
		'title' => 'Titre',
		'previous' => 'Precedent',
		'next' => 'Suivant',
	];

	$biblio['de_DE'] = [
		'title' => 'Titel',
		'previous' => 'Zurück',
		'next' => 'Vor',
	];
	/* END biblio */

	/* login page */
	$login['en_EN'] = [
		'title' => 'Please login',
		'username' => 'Username',
		'password' => 'Password',
		'login' => 'Login',
		'forgot' => 'Forgot your password ?',
	];

	$login['fr_FR'] = [
		'title' => 'Connexion',
		'username' => "Nom d'utilisateur",
		'password' => 'Mot de passe',
		'login' => 'Connexion',
		'forgot' => 'Mot de passe oublié ?',
	];

	$login['de_DE'] = [
		'title' => 'Anmelden',
		'username' => "Benutzername",
		'password' => 'Passwort',
		'login' => 'Login',
		'forgot' => 'Passwort vergessen ?',
	];
	/* END login page */

	/* register page */
	$register['en_EN'] = [
		'title' => 'Please register',
		'username' => 'Username',
		'fullname' => 'Full Name',
		'password' => 'Password',
		'passwordr' => 'Password Repeat',
		'register' => 'Register',
		'already' => 'Already have an account ?',
	];

	$register['fr_FR'] = [
		'title' => 'Inscription',
		'username' => "Nom d'utilisateur",
		'fullname' => 'Nom complet',
		'password' => 'Mot de passe',
		'passwordr' => "Repeter mot de passe",
		'register' => 'Inscription',
		'already' => "Vous avez deja un compte ?",
	];

	$register['de_DE'] = [
		'title' => 'Registrieren',
		'username' => 'Benutzername',
		'fullname' => 'Vollständiger Name',
		'password' => 'Passwort',
		'passwordr' => 'Passwort wiederholen',
		'register' => 'Registrieren',
		'already' => 'Sie sind schon registriert ?',
	];
	/* END register */

	/* reset page */
	$reset['en_EN'] = [
		'title' => 'Enter your mail',
		'reset' => 'Reset',
	];

	$reset['fr_FR'] = [
		'title' => 'Entrer votre mail',
		'reset' => "Reinitialiserr",
	];

	$reset['de_DE'] = [
		'title' => 'E-Mail-Adresse eingeben',
		'reset' => 'Zurücksetzen',
	];
	/* END reset page */

	/* error messages */
	$errors['en_EN'] = [
		'empty_fields' => "Error : Please fill all fields.",
		'invalid_size' => "Error : Invalid username OR email OR fname OR picture size.",
		'invalid_char_alpha_num' => "Error : Invalid chars - allowed 'a-zA-Z0-9'",
		'invalid_char_alphadash' => "Error : Invalid chars - 'allowed a-zA-Z0-9 -'",
		'invalid_password' => "Error : Invalid password.",
		'taken_username' => "Error : Username already taken !",
		'taken_email' => "Error : Email already taken !",
		'success_modified' => "Informations modified !",
		'size_password' => "Error : Invalid password size.",
		'same_password' => 'Error : Passwords must be the same !',
		'modified_password' => "Password modified !",
		'invalid_arguments' => 'Error : Invalid arguments.',
		'comment_id_not_exists' => "Error : Comment ID doesn't exists !",
		'tryagain' => "Please try again !",
		'bad_request' => "Error : Bad request.",
		'email_permission' => "Error : Email permission needed",
		'logreagain' => "Login again OR finish register phase.",
		'alreadylinked' => "Error : Account already linked with something else.",
		'impossible_dbrequest' => "Error : Impossible to perform request to DB",
		'account_created' => "Success : Account created ! Please login !",	
		"empty_post" => "Error : Empty POST",
		'logout' => 'Error : You cannot acces this page.',
		'invalid_mid' => "Error : Invalid m_ID !",
		'invalid_comment' => "Error : Incorrect comment.",
		'mail_not_found' => "Error : Mail not found !",
		'impossible_sendmail' => "Error : Impossible to send mail.",
		'mail_sent' => "Info : New password sent to your mailbox !",
		'wrong_id' => 'Error : Wrong ID.',
		'empty_captcha' => "Error : Please validate captcha",
	];

	$errors['fr_FR'] = [
		'empty_fields' => "Erreur : Veuillez remplir tous les champs.",
		'invalid_size' => "Erreur : Taille invalide.",
		'invalid_char_alpha_num' => "Erreur : Char invalide - autorisé 'a-zA-Z0-9'",
		'invalid_char_alphadash' => "Erreur : Char invalide - autorisé 'a-zA-Z0-9 -'",
		'invalid_password' => "Error : Invalid password.",
		'taken_username' => "Erreur : Nom d'utilisateur déja pris !",
		'taken_email' => "Erreur : Email déja pris !",
		'success_modified' => "Informations modifiés !",
		'size_password' => "Erreur : Taille du mot de passe incorrect.",
		'same_password' => 'Erreur : Les mots de passe doivent etre identique !',
		'modified_password' => "Mot de passe modifié !",
		'invalid_arguments' => 'Erreur : Mauvais arguments.',
		'comment_id_not_exists' => "Erreur : ID de commentaire incorrect !",
		'tryagain' => "Essayez encore !",
		'bad_request' => "Erreur : Mauvaise requete.",
		'email_permission' => "Erreur : Permission email requise",
		'logreagain' => "Erreur : Terminé le formulaire.",
		'alreadylinked' => "Erreur : Compte déja linké.",
		'impossible_dbrequest' => "Erreur : Impossible d'acceder a la base de données",
		'account_created' => "Succes : compte crée ! Veuillez vous connecter !",
		"empty_post" => "Erreur : POST vide",
		'logout' => 'Erreur : Vous ne pouvez pas acceder a cette page.',
		'invalid_mid' => "Erreur : Mauvais m_ID !",
		'invalid_comment' => "Erreur : Incorrect commentaire.",
		'mail_not_found' => "Erreur : Mail non trouvé !",
		'impossible_sendmail' => "Erreur : Impossible d'envoyer le mail.",
		'mail_sent' => "Info : Nouveau mot de passe envoyé !",
		'wrong_id' => 'Erreur : Mauvais ID.',
		'empty_captcha' => "Erreur : Veuillez valider le captcha",

	];

	$errors['de_DE'] = [
		'empty_fields' => "Error : Bitte alle Felder ausfüllen.",
		'invalid_size' => "Error : Ungültige Größe.",
		'invalid_char_alpha_num' => "Error : Nur alphanumerische Zeichen erlaubt.",
		'invalid_char_alphadash' => "Error : Nur - und alphanumerische Zeichen erlaubt.",
		'invalid_password' => "Error : Ungültiges Passwort.",
		'taken_username' => "Error : Benutzername bereits vergeben !",
		'taken_email' => "Error : E-Mail nicht verfügbar !",
		'success_modified' => "Daten geändert !",
		'size_password' => "Error : Ungültige Passwortlänge.",
		'same_password' => 'Error : Passwörter stimmen nicht überein !',
		'modified_password' => "Password geändert !",
		'invalid_arguments' => 'Error : Eingabe ungültig.',
		'comment_id_not_exists' => "Error : Kommentar-ID existiert nicht !",
		'tryagain' => "Bitte erneut versuchen !",
		'bad_request' => "Error : Ungültige Anforderung.",
		'email_permission' => "Error : E-Mail Erlaubnis verweigert",
		'logreagain' => "Erneut anmelden ODER Registrierung abschließen.",
		'alreadylinked' => "Error : Benutzer schon anderweitig verbunden.",
		'impossible_dbrequest' => "Error : Datenbankanfrage konnte nicht durchgefürt werden",
		'account_created' => "Success : Account erstellt ! Bitte einloggen !",
		"empty_post" => "Error : POST leer",
		'logout' => 'Error : Zugriff verweigert.',
		'invalid_mid' => "Error : Ungültige m_ID !",
		'invalid_comment' => "Error : Ungültiger Kommentar.",
		'mail_not_found' => "Error : E-Mail-Adresse konnte nicht gefunden werden !",
		'impossible_sendmail' => "Error : E-Mail konnte nicht gesendet werden.",
		'mail_sent' => "Info : Neues Passwort wurde an Ihre E-Mail-Adresse gesendet !",
		'wrong_id' => 'Error : Ungültige ID.',
		'empty_captcha' => "Error : Bitte Captcha lösen.",
	];
	/* END errors */

	/* load_anim */
	$load['en_EN'] = [
		'elements' => "No more elements",
		'watched' => "Watched",
		'syno' => "No synopsis for this one.",
		'downloaded' => "Available on the server",
		'being' => "Being downloaded...",
		'rdy' => "Ready to download",
	];

	$load['fr_FR'] = [
		'elements' => "Aucun elements",
		'watched' => "VU",
		'syno' => "Aucun synopsis disponible.",
		'downloaded' => "Disponible sur le serveur",
		'being' => "En cours de téléchargement ..",
		'rdy' => "Pret a télécharger.",
	];

	$load['de_DE'] = [
		'elements' => "Keine weiteren Elemente",
		'watched' => "Gesehen",
		'syno' => "Keine Zusammenfassung verfügbar.",
		'downloaded' => "Am Server verfügbar",
		'being' => "Am herunterladen..",
		'rdy' => "Bereit zum Herunterladen",
	];
	/* END load */

	/* page uprofile */
	$uprofile['en_EN'] = [
		'lv' => "Nothing",
		'lvl' => "None",
		'last_viewed' => "Last viewed",
	];

	$uprofile['fr_FR'] = [
		'lv' => "Rien",
		'lvl' => "Aucun",
		'last_viewed' => "Dernierement vu",
	];

	$uprofile['de_DE'] = [
		'lv' => "Nichts",
		'lvl' => "Keine",
		'last_viewed' => "Zuletzt angesehen",
	];








