<?php
/**
 * MyBB 1.8 Italian Language Pack
 * Copyright 2017 MyBB Italia
 *
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'Nessuna';
$l['not_installed'] = 'Non Installato';
$l['installed'] = 'Installato';
$l['not_writable'] = 'Non Scrivibile';
$l['writable'] = 'Scrivibile';
$l['done'] = 'fatto';
$l['next'] = 'Avanti';
$l['error'] = 'Errore';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Ricontrolla';

$l['title'] = "Installazione Guidata MyBB";
$l['welcome'] = 'Benvenuto';
$l['license_agreement'] = 'Accordo di Licenza';
$l['req_check'] = 'Controllo Requisiti';
$l['db_config'] = 'Configurazione Database';
$l['table_creation'] = 'Creazione Tabelle';
$l['data_insertion'] = 'Inserimento Dati';
$l['theme_install'] = 'Installazione Tema';
$l['board_config'] = 'Configurazione Board';
$l['admin_user'] = 'Utente Amministratore';
$l['finish_setup'] = 'Installazione Terminata';
$l['upgrade_complete'] = 'Aggiornamento Completato';

$l['table_population'] = 'Riempimento Tabelle';
$l['theme_installation'] = 'Installazione Tema';
$l['create_admin'] = 'Creazione Account Amministratore';

$l['already_installed'] = "MyBB è già installato";
$l['mybb_already_installed'] = "<p>Benvenuto nell'installazione guidata di MyBB {1}. MyBB ha rilevato che questa directory è già configurata.</p>
<p>Seleziona un'azione adatta sotto:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Aggiorna la mia copia esistente di MyBB a {1} <span style=\"font-size: 80%; color: maroon;\">(Consigliato)</span></h3>
	<p>Questa opzione aggiornerà la tua attuale versione di MyBB a MyBB {1}.</p>
	<p>Dovresti scegliere questa opzione quando desideri conservare discussioni, messaggi, utenti e altre informazioni.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aggiorna a MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Installa una nuova copia di MyBB</h3>
	<p>Questa opzione <span style=\"color: red;\">eliminerà qualsiasi forum esistente che hai creato</span> e installerà una nuova versione di MyBB.</p>
	<p>Dovresti scegliere questa opzione per eliminare la tua copia esistente di MyBB se desideri iniziare da capo.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Sei sicuro di voler installare una nuova copia di MyBB?\\n\\nIl forum esistente verrà eliminato. QUESTO PROCESSO NON PU&Ograve; ESSERE ANNULLATO.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Installa MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB ha rilevato che si trova nella cartella \"Upload\".</h3>
	<p>Non c'è nulla di sbagliato in questo ma è consigliato caricare il contenuto della cartella \"Upload\" e non la cartella.<br /><br />Per maggiori informazioni guarda la <a href=\"https://docs.mybb.com/1.8/install/#uploading-files\" target=\"_blank\">Documentazione di MyBB</a>.</p>
</div>";

$l['welcome_step'] = '<p>Benvenuto nell\'installazione guidata di MyBB {1}. Questa procedura guidata installerà e configurerà una copia di MyBB sul tuo server.</p>
<p>Ora che hai caricato i file di MyBB, il database e le impostazioni devono essere create e importate. Di seguito una descrizione di cosa sta per essere completato durante l\'installazione.</p>
<ul>
	<li>Controllo dei requisiti di MyBB</li>
	<li>Configurazione del database</li>
	<li>Creazione delle tabelle del database</li>
	<li>Inserimento dei dati predefiniti</li>
	<li>Importazione dei temi e dei template predefiniti</li>
	<li>Creazione di un account amministratore per gestire la board</li>
	<li>Configurazione delle impostazioni base della board</li>
</ul>
<p>Dopo aver completato ogni passaggio, seleziona Avanti per passare al prossimo.</p>
<p>Clicca "Avanti" per vedere gli accordi di licenza di MyBB</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Invia statistiche anonime sulle specifiche del tuo server a MyBB Group</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank"><small>Quali informazioni sono inviate?</small></a>)</p>';

$l['license_step'] = '<p><a href="./license_it.txt" target="_blank">Licenza in italiano</a>.</p>
<div class="license_agreement">
{1}
</div>
<p><strong>Cliccando Avanti, accetti i termini dichiarati sopra nell\'Accordo di Licensa di MyBB.</strong></p>';


$l['req_step_top'] = '<p>Prima di poter installare MyBB bisogna controllare i requisiti minimi per l\'installazione.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Controllo dei Requisiti</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Requisiti</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">Versione PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Estensioni DB Supportate:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Estensioni Traduzione Supportate:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Estensioni PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">File di Configurazione Scrivibile:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">File delle Impostazioni Scrivibile:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Cartella delle Cache Scrivibile:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Cartella del Caricamento dei File Scrivibile:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Cartella del Caricamento degli Avatar Scrivibile:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Congratulazioni, i requisiti per utilizzare MyBB sono stati soddisfatti.</strong></p>
<p>Seleziona Avanti per continuare il processo di installazione.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB richiede PHP 5.2.0 o maggiore per essere eseguito. Tu hai installato la {1}.';
$l['req_step_error_dboptions'] = 'MyBB richiede una o più estensioni del database adatte installare. Il tuo server non ne ha alcuna disponibile.';
$l['req_step_error_xmlsupport'] = 'MyBB richiede che il PHP supporti la Gestione dei Dati XML (XML Data Handling). Guarda <a href="http://www.php.net/xml" target="_blank">PHP.net</a> per maggiori informazioni.';
$l['req_step_error_configdefaultfile'] = 'Il file di configurazione (inc/config.default.php) non può essere rinominato. Rinomina manualmente il file <u>config.default.php</u> in <u>config.php</u> per permettergli di essere scrivibile o contatta il supporto di MyBB: <a href="https://www.mybb-it.com" target="_blank">MyBB Italia</a> o <a href="https://mybb.com/support" target="_blank">MyBB Support.</a>';
$l['req_step_error_configfile'] = 'Il file di configurazione (inc/config.php) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permettergli di essere scrivibile.';
$l['req_step_error_settingsfile'] = 'Il file delle impostazioni (inc/settings.php) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permettergli di essere scrivibile.';
$l['req_step_error_cachedir'] = 'La cartella delle cache (cache/) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permetterle di essere scrivibile.';
$l['req_step_error_uploaddir'] = 'La cartella dei caricamenti (uploads/) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permetterle di essere scrivibile.';
$l['req_step_error_avatardir'] = 'La cartella degli avatar (uploads/avatars/) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permetterle di essere scrivibile.';
$l['req_step_error_cssddir'] = 'La cartella dei css (css/) non è scrivibile. Modifica i permessi <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank">chmod</a> per permetterle di essere scrivibile.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Errore</h3>
<p>Il controllo dei Requisiti di MyBB è fallito per il motivo riportato in basso. L\'installazione di MyBB non può continuare perché non hai soddisfatto i requisiti di MyBB. Correggi gli errori in basso e riprova:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>&Egrave; il momento di configurare il database che MyBB utilizzerà con i dettagli di autenticazione del database. Se non hai queste informazioni, di solito possono essere ottenute dal tuo webhost.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Configurazione Database</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Impostazioni Database</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Motore Database:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Dopo aver controllato che le informazioni sono corrette, seleziona Avanti per continuare.</p>';

$l['database_settings'] = "Impostazioni Database";
$l['database_path'] = "Path del Database:";
$l['database_host'] = "Hostname del Server del Database:";
$l['database_user'] = "Nome Utente del Database:";
$l['database_pass'] = "Password del Database:";
$l['database_name'] = "Nome del Database:";
$l['table_settings'] = "Impostazioni Tabella";
$l['table_prefix'] = "Prefisso Tabella:";
$l['table_encoding'] = "Codifica Tabelle:";

$l['db_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Ci sono stati uno o più errori con le informazioni per la configurazione del database fornite:</p>
{1}
<p>Dopo averli corrette, continua con l\'installazione.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Hai selezionato un motore del database non valido. Selezionalo dalla lista qui sotto.';
$l['db_step_error_noconnect'] = 'Non è stato possibile connettersi al server del database a \'{1}\' con il nome utente e la password forniti. Sei sicuro che l\'hostname e i dettagli dell\'utente sono corretti?';
$l['db_step_error_nodbname'] = 'Non è stato possibile selezionare il database \'{1}\'. Sei sicuro che esista e che il nome utente e la password specificati abbiano l\'accesso ad esso?';
$l['db_step_error_missingencoding'] = 'Non hai selezionato una codifica. Assicurati di aver selezionato una codifica prima di continuare. (Seleziona \'UTF-8 Unicode\' se non sei sicuro)';
$l['db_step_error_sqlite_invalid_dbname'] = 'L\'utilizzo di URL relativi per i database SQLite è vietato. Utilizza il percorso del file sistem (es: /home/user/database.db) per il tuo database SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'Puoi utilizzare soltanto un trattino basso (_) e un carattere alfanumerico nel prefisso delle tabelle. Utiliza un prefisso delle tabelle corretto prima di continuare.';
$l['db_step_error_tableprefix_too_long'] = 'Puoi utilizzare soltanto un prefisso delle tabelle con una lunghezza di 40 caratteri o meno. Utilizza un prefisso delle tabelle più corto prima di continuare.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' richiede MySQL 5.5.3 o maggiore. Seleziona una codifica compatibile con la tua versione MySQL.';

$l['tablecreate_step_connected'] = '<p>Connessione al server del database e al database specificato avvenuta con successo.</p>
<p>Motore Database: {1} {2}</p>
<p>Ora verrano create le tabelle di MyBB.</p>';
$l['tablecreate_step_created'] = 'Creazione tabella {1}...';
$l['tablecreate_step_done'] = '<p>Tutte le tabelle sono state create, seleziona Avanti per riempirle.</p>';

$l['populate_step_insert'] = '<p>Ora che le tabelle di base sono state create, è il momento di inserire i dati predefiniti.</p>';
$l['populate_step_inserted'] = '<p>I dati predefiniti sono stati inseriti con successo nel database. Seleziona Avanti per inserire i set di template e temi predefiniti.</p>';


$l['theme_step_importing'] = '<p>Caricamento e importazione del file dei temi e dei template...</p>';
$l['theme_step_imported'] = '<p>Il tema e i set di template predefiniti sono stati inseriti con successo. Seleziona Avanti per configurare le impostazioni base della tua board.</p>';


$l['config_step_table'] = <<<EOT
		<p>&Egrave; giunto il momento di configurare le impostazione base del tuo forum come il suo nome, l'URL, i dettagli del tuo sito web insieme al dominio dei "cookie" e al percorso. Queste impostazioni possono essere modificate facilmente in futuro attraverso il Pannello di Controllo Amministratore di MyBB.</p>
		<div class="border_wrapper">
			<div class="title">Configurazione Board</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Dettagli Forum</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Nome Forum:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL Forum (Senza slash finale):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti i link del tuo forum potrebbero non funzionare.')" onchange="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti i link del tuo forum potrebbero non funzionare.')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Dettagli Database</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Nome Sito Web:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL Sito Web:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Impostazione Cookie <a title="What\'s this?" target="_blank" href="https://docs.mybb.com/1.8/development/cookies">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Dominio dei Cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti l\'accesso o la disconnessione dal forum non potrebbero funzionare correttamente.')" onchange="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti l\'accesso o la disconnessione dal forum non potrebbero funzionare correttamente.')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Percorso dei Cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti l\'accesso o la disconnessione dal forum non potrebbero funzionare correttamente.')" onchange="warnUser(this, 'Questa opzione è stata impostata automaticamente. Non cambiarla se non sei sicuro del valore esatto, altrimenti l\'accesso o la disconnessione dal forum non potrebbero funzionare correttamente.')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Dettagli Contatto</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Email di Contatto:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Impostazioni Sicurezza</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">PIN ACP:</label><br />Lascialo vuoto se non vuoi impostarne uno</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Dopo aver inserito correttamenti i dettagli sopra e sei pronto a procedere, clicca Avanti.</p>
EOT;

$l['config_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Ci sono stati uno o più errori con le configurazioni della board fornite:</p>
{1}
<p>Dopo averli corretti, continua con l\'installazione.</p>
</div>';
$l['config_step_error_url'] = 'Non hai inserito un URL al tuo forum.';
$l['config_step_error_name'] = 'Non hai inserito un nome per la tua copia di MyBB.';
$l['config_step_revert'] = 'Seleziona per ripristinare il valore originale a questa impostazione.';


$l['admin_step_setupsettings'] = '<p>Impostando le impostazioni base della board...</p>';
$l['admin_step_insertesettings'] = '<p>Inserite {1} impostazioni in {2} gruppi.</p>
<p>Aggiornando le impostazioni con i valori definiti dall\'utente.</p>';
$l['admin_step_insertedtasks'] = '<p>Inseriti {1} task pianificati.</p>';
$l['admin_step_insertedviews'] = '<p>Inserite {1} viste amministratore.</p>';
$l['admin_step_createadmin'] ='<p>Devi creare un account amministratore iniziale che ti consente di accedere e gestire la tua copia di MyBB. Riempi i campi eichiesti per creare l\'account.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Dettagli Account Amministratore</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Dettagli Account</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Nome Utente:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Riscrivi Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Dettagli Contatto</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Indirizzo Email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Dopo aver inserito correttamente i dettagli sopra e sei pronto per continuare, clicca Avanti.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Ci sono stati uno o più errori con la creazione dell\'account con le informazioni fornite:</p>
{1}
<p>Dopo averle corrette, continua con l\'installazione.</p>
</div>';
$l['admin_step_error_nouser'] = 'Non hai inserito un nome utente per il tuo account Amministratore.';
$l['admin_step_error_nopassword'] = 'Non hai inserito una password per il tuo account Amministratore.';
$l['admin_step_error_nomatch'] = 'Le password inserite non corrispondono.';
$l['admin_step_error_noemail'] = 'Non hai inserito un indirizzo email per il tuo account Amministratore.';
$l['admin_step_nomatch'] = 'La password riscritta non corrisponde con la prima. Correggila prima di continuare.';

$l['done_step_usergroupsinserted'] = "<p>Importando i gruppi utente...";
$l['done_step_admincreated'] = '<p>Creando l\'account Amministratore...';
$l['done_step_adminoptions'] = '<p>Costruendo i permessi Amministratore...';
$l['done_step_cachebuilding'] = '<p>Costruendo le cache dei dati...';
$l['done_step_success'] = '<p class="success">La tua copia di MyBB è stata installata e configurata correttamente.</p>
<p>MyBB Group ti ringrazia per aver installato un suo software e spera di vederti nel suo <a href="https://community.mybb.com/" target="_blank">Community Forums</a> se hai bisogno di aiuto o vuoi far parte della community di MyBB. (soltanto in inglese)</p>
<p>Se necessiti aiuto in italiano registrati nel forum <a href="https://www.mybb-it.com">MyBB Italia</a>.</p>';
$l['done_step_locked'] = '<p>L\'installer è stato chiuso. Per sbloccarlo elimina il file \'lock\' in questa directory.</p><p>Ora puoi procedere alla tua nuova copia di <a href="../index.php">MyBB</a> o al suo <a href="../admin/index.php">Pannello di Controllo Amministratore</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Elimina questa cartella prima di esplorare la tua copia di MyBB.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Stai passando da un altro forum software?</strong></p><p>MyBB offre un merge system per fondere facilmente forum multipli di differenti forum software popolari, consentendo un semplice processo di conversione a MyBB. Se vuoi passare a MyBB, sei nella direzione giusta! Controlla il <a target="_blank" href="https://mybb.com/download/merge-system">Merge System</a> per maggiori informazioni.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Processo di Aggiornamento";
$l['upgrade_welcome'] = "<p>Benvenuto all'aggiornamento guidato di MyBB {1}.</p><p>Prima di continuare, assicurati di conoscere che versione di MyBB stavi usando precedentemente poiché devi selezionarla quì sotto.</p><p><strong>Si consiglia vivamente di effettuare un backup completo del database e dei file prima di provare ad aggiornare</strong> così se qualcosa andrà storto potrai facilmente ripristinare la versione precedente.  Inoltre, assicurati che i backup siano completi prima di procedere.</p><p>Assicurati di premere Avanti UNA sola volta in ogni passaggio del processo di aggiornamento. Le pagine potrebbero richiedere un po per caricare a seconda della grandezza del forum.</p><p>Quando sei pronto, seleziona la tua vecchia versione in basso e clicca Avanti per continuare.</p>";
$l['upgrade_templates_reverted'] = 'Template Ripristinati';
$l['upgrade_templates_reverted_success'] = "<p>Tutti i template sono stati ripristinati con quelli nuovi contenuti in questa release. Clicca Avanti per continuare il processo di aggiornamento.</p>";
$l['upgrade_settings_sync'] = 'Sincronizzazione Impostazioni';
$l['upgrade_settings_sync_success'] = "<p>Le impostazioni della board sono state sincronizzate con le ultime in MyBB.</p><p>{1} nuove impostazioni inserite in {2} nuovi gruppi di impostazioni.</p><p>Clicca Avanti per continuare con l'aggiornamento.</p>";
$l['upgrade_datacache_building'] = 'Costruzione Cache dei Dati';
$l['upgrade_building_datacache'] = '<p>Costruzione cache...';
$l['upgrade_continue'] = 'Seleziona Avanti per continuare';
$l['upgrade_locked'] = "<p>L'installer è stato chiuso. Per sbloccarlo elimina il file 'lock' in questa directory.</p><p>Ora puoi procedere alla tua copia aggiornata di <a href=\"../index.php\">MyBB</a> o al suo <a href=\"../{1}/index.php\">Pannello di Controllo Amministratore</a>.</p>";
$l['upgrade_removedir'] = 'Elimina questa cartella prima di esplorare la tua copia di MyBB.';
$l['upgrade_congrats'] = "<p>Congratulazioni, la tua copia di MyBB è stata aggiornata con successo alla {1}.</p>{2}<p><strong>Cosa fare ora?</strong></p><ul><li>Utilizza lo strumento 'Cerca Template Aggiornati' nel Pannello Amministratore per cercare i template che sono stati modificati con il processo di aggiornamento. Modificali inserendo le modifiche o ripristinali all'originale.</li><li>Assicurati che la board funzioni correttamente.</li></ul>";
$l['upgrade_template_reversion'] = "Avvertimento Ripristino Template";
$l['upgrade_template_reversion_success'] = "<p>Tutte le modifiche al database necessarie sono state effettuate per aggiornare la board.</p><p>Questo aggiornamento richiede che tutti i template devono essere ripristinati con quelli contenuti nel pacchetto quindi esegui un backup dei template modificati prima di cliccare Avanti.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Invia statistiche anonime sulle specifiche del tuo server a MyBB Group</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\"><small>Quali informazioni sono inviate?</small></a>)</p>";

$l['please_login'] = "Esegui L'Accesso";
$l['login'] = "Accesso";
$l['login_desc'] = "Inserisci il tuo nome utente e la tua password per iniziare il processo di aggiornamento. Devi essere un amministratore del forum per effettuare l'aggiornamento.";
$l['login_username'] = "Nome Utente";
$l['login_password'] = "Password";
$l['login_password_desc'] = "Le password sono case sensitive.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Avviso</h2><p>Questa versione di MyBB è un'anteprima di sviluppo e deve essere usata soltanto per provarla.</p><p>Non verrà offerto supporto per questa versione, tranne per lo sviluppo di plugin e temi. Continuando con l'installazione/aggiornamento lo farai a tuo rischio e pericolo.</p></div>";
$l['locked'] = 'L\'installer è chiuso, rimuovi il file \'lock\' dalla cartella dell\'installazione per continure';
$l['no_permision'] = "Non hai i permessi per eseguire il processo. Devi avere i permessi di amministratore per poter eseguire il processo di aggiornamento.<br /><br />Se vuoi uscire dall'account, clicca <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">qui</a>. Da lì potrai accedere di nuovo con un account amministratore.";
$l['no_theme_functions_file'] = 'Nessuna funzione per il tema trovata. Accertati di aver caricato tutti i file correttamente.';

$l['task_versioncheck_ran'] = "Il task per il controllo della versione eseguito con successo.";
