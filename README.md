# Ecommerce-Project
This is a basic ecommerce made from 0


DOCUMENTAZIONE ECOMMERCE PROJECT

Cosa è Ecommerce Project: 
			E’ un progetto open-source. L’idea è quella di creare un ecommerce fatto da 0.
			Il progetto è in fase di sviluppo e di crescita. Vengono usate funzioni basilari dei vari 
			linguaggi web.
			Il progetto parte come un sito a se stante, l’idea è quella di renderlo un plugin
      Wordpress.


IN QUESTA SEZIONE VERRANNO ELENCATI I VARI FILE CON RELATIVA SPIEGAZIONE

Html:	
	login -->  è il lato client della schermata login
	register --> è il lato client della schermata di registrazione
	cambiapw --> è lato client della schermata di cambio password (passandro dal profilo utente)
	scelta --> si occupa della parte client della sezione recupera password (offre possibilità di sceltra tra 
		   2 vie per recuperare una password smarrita
	Recuperad --> è il lato client  che permette il recupero della password tramite domanda di
      Sicurezza
	Recuperam --> è il lato client che permette il recupero di password tramite l’indirizzo email
	Profilo --> è il lato client della schermata riguardante il profilo utente
Css:
	style.css --> usato da cambiapw.html, login.html, recuperad.html, recuperam.html, profilo.html,
        register.html e scelta.html
	style1.css --> usato da carrello.php, dashboard.php, 




Php: 
	Cambiapw  --> lato server della schermata di cambio pw (accessibile da profilo)
	Carrello --> lato server e client del carrello 
	Dashboard --> lato server e client della pagina principale (dove sono disponibili gli oggetti da
           Comprare)
	Esci --> lato server legato al logout 
	Login --> lato server della schermata di login
	Register --> lato server della schermata di registrazione
	Verifica --> lato server che si occupa di verificare gli utenti
	Pwdimenticatad --> lato server che si occupa di recuperare pw tramite domande di sicurezza
	Pwdimenticatam --> lato server che si occupa di recuperare pw tramite email
	Index --> si occupa di renderizzare a dashboard
Inoltre è stato usato uno script pubblico su github per permettere l’invio di email tramite smtp.
  https://github.com/PHPMailer/PHPMailer     thanks @Synchro

INSTALLAZIONE
	 
Per il corretto funzionamento occore un web server.

1. Installare xampp:
  	Scaricare xampp da questo link https://www.apachefriends.org/it/index.html  e intallalo.
	Avvia ora Xampp Control Panel e clicca su start di Apache e MySql.
	Dirigiti nella directory di installazione di xampp, htdocs e trascina ciò che hai scaricato
	Dal mio github.

2. Installazione database:
Dirigiti all’indirizzo localhost/phpmyadmin, clicca su import e importa il database.sql




	

