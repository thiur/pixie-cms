<?php
if (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Language File (Latvian).				   //  
// Translation by Rihards 'dExIT' Mantejs                          //
//*****************************************************************//
if (!isset($delete)) { $delete = NULL; }
if (!isset($username)) { $username = NULL; }
$lang = array(
	// system
	'skip_to' => 'Pāriet uz rakstu',
	'view_site' => 'Apskatīt mājaslapu',
	'logout' => 'Iziet',
	'license' => 'Released under the',
	'tag_line' => 'Vieglais, Vienkāršais, Mājaslapu veidotājs',
	'latest_referrals' => 'Latest Referrals',
	'latest_activity' => 'Pēdējās aktivitātes',
	'feed_subscribe' => 'Pieteikties',
	'rss_feed' => 'RSS barotne',
	'when' => 'Kad?',
	'who' => 'Kas?',
	'what' => 'Ko?',
	'from' => 'No kurienes?',
	'switch_to' => 'Pāriez uz',
	'a_few_seconds' => 'Pāris sekundes',
	'a_minute' => '1 minūte',
	'minutes' => 'minūtes',
	'a_hour' => '1 stunda',
	'hours' => 'stundas',
	'a_day' => '1 diena',
	'days' => 'dienas',
	'ago' => 'atpakaļ.',
	'user' => 'Lietotājs',
	'to' => 'līdz',
	'database_backup' => 'Datubāzes backup',
	'database_info' => 'Cenšaties backupot datubāzi biežāk.',
	'database_backups' => 'Backups',
	'download' => 'Lejupielāde',
	'delete' => 'Dzēst',
	'delete_file' => 'Dzēst failu?',
	'theme_info' => 'Esošie Stili ir zemāk, jaunus varat uzinstalēt ieliekot tos iekš admin/themes foldera. Vairāk Stilus varat iegūt šeit <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a>. Vai varat izveidot paši izmantojot CSS. Izmantotais Stils ir iezīmēts.',
	'theme_pick' => 'Izvēlaties mājaslapas Stilu',
	'theme_apply' => 'Apstiprināt šo stilu',
	'sure_delete_page' => 'Vai tiešām vēlaties dzēst',
	'sure_empty_page' => 'Vai tiešām vēlaties iztukšot',
	'settings_page' => 'lapa',
	'settings_plugin' => 'spraudnis',
	'plugins' => 'Spraudņi',
	'plugins_info' => 'Spraudņi padara tavu mājaslapu foršāku.',
	'empty' => 'Tukšs',
	'oops' => 'Ooopāāā!',
	'feature_disabled' => 'Šī iespēja ir atslēgta, nākamajā relīzē būs pieejama!',
	'pages_in_navigation' => 'Lapas izvēlnē',
	'pages_in_navigation_info' => 'Nospied, velc, pāŗvieto - tā lapa kas ir augšā būs galvenā.', 
	'pages_outside_navigation' => 'Lapas ārpus navigācijas',
	'pages_outside_navigation_info' => 'Šīs lapas nav redzamas izvēlnē, bet ir redzamas publiski.', 
	'pages_disabled' => 'Atslēgt lapas',
	'pages_disabled_info' => 'Šīs lapas nav domātas apskatei.',
	'edit_user' => 'Rediģēt lietotāju',
	'create_user' => 'Izveidot lietotāju',
	'create_user_info' => 'Epasts tiks nosūtīts ar lietotājvārdu un uzģenerētu paroli.',
	'user_info' => 'Šeit ir lietotāju saraksts.',
	'user_delete_confirm' => 'Vai vēlaties dzēst lietotāju:',
	'tags' => 'Tagi',
	'upload' => 'Augšupielādēt',
	'file_manager_info' => 'Maksimums ir 100mb, lūdzu esiet pacietīgi.',
	'file_manager_latest' => 'Jaunākie faili',
	'file_manager_tagged' => 'Visi faili tagoti:',
	'filename' => 'Faila vārds',
	'filedate' => 'Izmaiņu datums',
	'results_from' => 'Rezultāti no',
	'sure_delete_entry' => 'Dzēst ierakstu',
	'from_the' => 'no',
	'page_settings' => 'Lapas iestatījumi',
	'advanced' => 'Papildus',
	'your_site_has' => 'Jūsu mājaslapai ir',
	'visitors_online' => 'ciemiņi(š) tiešsaistē.',	
	'in_the_last' => 'Pēdējās',
	'site_visitors' => 'Mājaslapas ciemiņi.',
	'page_views' => 'Lapas apskati.',
	'spam_attacks' => 'Spama uzbrukumi',
	'last_login_on' => 'Pēdējo reizi redzēts:',
	'quick' => 'Ātrais',
	'links' => 'Saites',
	'new_entry' => 'Pieveinot jaunu ',
	'entry' => 'ierakstu.',
	'edit' => 'Rediģēt ',
	'page' => 'lapu.',
	'blog' => 'Blogu.',
	'search' => 'Meklēt',
	'forums' => 'Forums.',
	'downloads' => 'Lejupielādes.',
	'create_backup' => 'Izveidot backup',
	'button_backup' => 'Backupot Datubāzi',
	'page_type' => 'Lapas tips',
	'settings_page_new' => 'Izveidot jaunu',
	'total_records' => 'Kopā ieraksti',
	'showing_from_record' => 'rāda no ieraksta',
	'page(s)' => 'lapa(s)',
	'help' => 'Palīdzība',
	'statistics' => 'Statistika',
	'help_settings_page_type' => 'Kad veidojiet lapas varat izvēlēties no trīs lapu veidiem:',
	'help_settings_page_dynamic' => 'Piemēram blogi un jaunumi ir dinamiskās lapas. Šīs lapas atbalsta RSS un komentārus.',
	'help_settings_page_static' => 'Statiska lapa ir parasti bāzēta uz HTML ( var arī būt PHP).',
	'help_settings_page_module' => 'Moduļi papildina tavu mājaslapu, vari tos dabūt iekš <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a>, moduļi dažreiz nāk līdzi spraudņiem.',
	'help_settings_user_type' => 'Kad veidojiet jaunu lietotāju varat norādīt viņa tipu:',
	'help_settings_user_admin' => '<b>Administrators</b> - Administratoriem ir pieeja visam.',
	'help_settings_user_client' => '<b>Klients</b> - Klients var rakstīt, bet neko citu.',
	'help_settings_user_user' => '<b>Lietotājs</b> - Tieši kā nosaukums saka -> lieto jūsu mājaslapu.',
	'install_module' => 'Uzstādīt jaunu moduli/spraudni',
	'select_module' => 'Atzīmējiet kuru moduli/spraudni vēlaties aktivizēt',
	'all_installed' => 'Visi pieejamie spraudņi un moduļi ir uzstādīti un aktivizēti.',

	// system messages
	'error_save_settings' => 'Kļūda saglabājot iestatījumus.',
	'ok_save_settings' => 'Jaunie iestatījumi saglabāti.',
	'comment_spam' => 'Spams bloķēts.',
	'failed_login' => 'Nesanāca.',
	'login_exceeded' => 'Jūs pārsniedzāt 3 centienu limitu tagad mēģiniet pēc 24h.',
	'logins_exceeded' => '3 reizes nesanāca ienākts sistēmā = 24h IP bans.',
	'ok_login' => 'Lietotājs ' . $username . ' ienāk sistēmā.',
	'failed_protected_page' => 'Nevar dzēst 404 kļūdas lapu. Iespējams hakers.',
	'ok_delete_page' => 'Veiksmīgi izdzēsu',
	'ok_delete_entry' => 'Izdzēsu ierakstu (#' . $delete . ') no',
	'failed_delete' => 'Nevar dzēst (#' . $delete . ').',
	'login_missing' => 'Lūdzu ievadiet pieprasīto informāciju.',
	'login_incorrect' => 'Ievadītie dati ir nepareizi.',
	'forgotten_missing' => 'Jūs ievadijāt nepreizu lietotājvārdu vai paroli.',
	'forgotten_ok' => 'Jaunā parole nosūtīta uz epastu.',
	'forgotten_log_error' => 'Nesanāca.',
	'forgotten_log_ok' => 'Jaunā parole nosūtīta uz ',
	'rss_access_attempt' => 'Neautorizēta piekļuve pie Pixie RSS barotnes.',
	'unknown_error' => 'Visu salaidi dēli, varbūt datu bāze?',
	'unknown_edit_url' => 'Dotā saite rediģēšanai ir kļūdaina.',
	'unknown_referrer' => 'Nezināms ieteicējs.',
	'profile_name_error' => 'Ievadiet savu vārdu.', 
	'profile_email_error' => 'Ievadiet savu epastu.', 
	'profile_web_error' => 'Ievadiet savu mājaslapas adresi.', 
	'profile_ok' => 'Jūsu profils ir atjaunots.',
	'profile_password_error' => 'Nesanāca. Mēģināsi vēlreiz?',
	'profile_password_ok' => 'Sanāca. Nākamreiz lieto jauno paroli.',
	'profile_password_invalid' => 'Vecā parole nepareiza.',
	'profile_password_invalid_length' => 'Parolei jābūt vismaz 6 simbolu garai.',
	'profile_password_match_error' => 'Paroles nesakrita.',
	'profile_password_missing' => 'Lūdzu aizpildiet visus pieprasītos lauciņus (*).',
	'site_name_error' => 'Jūsu mājaslapai vajag nosaukumu.',
	'site_url_error' =>  'Lūdzu norādiet pareizu saiti.',
	'backup_ok' => 'Darīts.',
	'backup_delete_ok' => 'Sanāca izdzēst datubāzes backupu :',
	'backup_delete_no' => 'Tu nevari izdzēst pašu jaunāko backupu.',
	'backup_delete_error' => 'Nesnāca.',
	'theme_ok' => 'Jaunais stils tiek pielietots.',
	'theme_error' => 'Nesanāca uzlikt jauno stilu.',
	'all_content_deleted' => 'Visi raksti tika dzēsti no',
	'user_delete_ok' => 'tika dzēsts no datubāzes.',
	'user_delete_error' => 'Nevar dzēst lietotāju',
	'user_name_missing' => 'Ievadiet lietotājvārdu.',
	'user_realname_missing' => 'Ievadiet vārdu.',
	'user_password_missing' => 'Ievadiet paroli.',
	'user_email_error' => 'Ievadiet epastu.',
	'user_update_ok' => 'Saglabājās jaunie iestatījumi',
	'user_duplicate' => 'Lietotājvārds jau pastāv.',
	'user_new_ok' => 'Izveidoja jaunu lietotāju:',
	'saved_new_settings_for' => 'Saglabāju iestatījumus priekš',
	'file_upload_error' => 'Nesanāca ierakstīt faila informāciju iekš datubāzes.',
	'file_upload_tag_error' => 'Lūdzu notagojiet savus augšupielādētos failus.',
	'file_delete_ok' => 'Veiksmīgi dzēsu:',
	'file_delete_fail' => 'Nevarēju dzēst:',
	'form_build_fail' => 'Nevarēju izveidot rediģējamu "Form"u... vai pareizi savadijāt tabulu informāciju iekš moduļa?',
	'date_error' => 'Nepareizs datums.',
	'email_error' => 'Nav pareizs epasts.',
	'url_error' => 'Nepareiza saite.',
	'is_required' => 'ir obligāts lauks.',
	'saved_new' => 'Saglabāt jauno ierakstu',
	'in_the' => 'iekš',
	'on_the' => 'on the',
	'saved_new_page' => 'Izveidoja jaunu lapu',
	'save_update_entry' => 'Saglabāja atjaunojumus ierakstam',
	'bad_cookie' => 'Tavs cepums ir sažuvis, vajadzēs ieiet sistēmā vēlreiz.',
	'no_module_selected' => 'Jūs neizvēlējāties neveinu moduli/spraudni ko uzstādīt, mēģiniet vēlreiz.',
	'install_module_ok' => 'ir uzinstalēts veiksmīgi.',

	// helper
	'helper_plugin' => 'Jūs nevarat izmainīt komentāru iestatījumus, bet ja izdzēsīsiet tad vairs tie nestrādās.',
	'helper_nocontent' => 'Šai lapai nav neveina ieraksta, lūdzu nospiediet zaļo podziņu, lai izveidotu jaunu ierakstu (komentāru spraudnim tādas nav).',
	'helper_nopages' => 'Kāds gudrs vīrs reiz teica, ka mājaslapa bez lapām un informācijas ir nekam nederīga... Un lai pazustu šis kaitinošais uzraksts, lūdzu izveidojiet jaunu lapu // Tulkojis dExIT.',
	'helper_nopages404' => 'Jūsu mājaslapā ir tikai viena lapa - 404 kļūdas lapa, kuru varat rediģēt zemāk.',
	'helper_nopagesadmin' => 'Jūs varat <a href="?s=settings">pievienot vairāk lapas \'Iestatījumu\' sadaļā</a>.', 
	'helper_nopagesuser' => 'Sazinieties ar administratoru, lai viņš pievieno vēl lapas.',
	'helper_search' => 'Nekas netika atrasts. Mēģiniet vēlreiz.', 
	
	// navigation
	'nav1_settings' => 'Iestatījumi',
	'nav1_publish' => 'Publish',
	'nav1_home' => 'Admina panelis',
	'nav2_home' => 'Sākums',
	'nav2_profile' => 'Profils',
	'nav2_security' => 'Parole',
	'nav2_logs' => 'Darbību ieraksti',
	'nav2_delete' => 'Dzēst kontu',
	'nav2_pages' => 'Lapas',
	'nav2_files' => 'Failu Menedžers',
	'nav2_backup' => 'Backup',
	'nav2_users' => 'Lietotāji',
	'nav2_blocks' => 'Bloki',
	'nav2_theme' => 'Stils',
	'nav2_site' => 'Mājaslapa',
	'nav2_settings' => 'Iestatījumi',

	// forms
	'form_login' => 'Ienākt',
	'form_username' => 'Lietotājvārds',
	'form_password' => 'Parole',
	'form_rememberme' => 'Palikt sistēmā uz šīs darbastacija ( datora ) ?',
	'form_forgotten' => 'Aizmirsāt paroli?',
	'form_returnto' => 'Atgriezties pie ',
	'form_help_forgotten' => 'Lūdzu ievadiet savu Lietotājvārdu un Epastu. Jūsu Pixie konts tiks atjaunots un jaunā parole nosūtīta jums.',
	'form_resetpassword' => 'Atjaunot paroli',
	'form_name' => 'Pilnais vārds',
	'form_usernameoremail' => 'Lietotājvārds vai parole',
	'form_telephone' => 'Telefons',
	'form_email' => 'Epasts',
	'form_website' => 'Mājaslapa',
	'form_occupation' => 'Nodarbošanās',
	'form_address_street' => 'Adrese',
	'form_address_town' => 'Pilsēta',
	'form_address_county' => 'Štats/Rajons',
	'form_address_pcode' => 'Pasta indekss',
	'form_address_country' => 'Valsts',
	'form_address_biography' => 'Biogrāfija',
	'form_fl1' => 'Manas mīļākās saites',
	'form_button_save' => 'Saglabāt',
	'form_button_update' => 'Atjaunot',
	'form_button_cancel' => 'Atcelt',
	'form_button_install' => 'Uzstādīt',
	'form_button_create_page' => 'Izveidot lapu',
	'form_current_password' => 'Esošā parole',
	'form_new_password' => 'Jaunā parole',
	'form_confirm_password' => 'Apstiprināt paroli',
	'form_tags' => 'Tagi',
	'form_content' => 'Raksti',
	'form_comments' => 'Komentāri',
	'form_public' => 'Publisks',
	'form_optional'=> '(ne obligāts)',
	'form_required'=> '*',
	'form_title'=> 'Virsraksts',
	'form_posted'=> 'Datums &amp; Laiks',
	'form_date' => 'Datums &amp; Laiks',
	'form_help_comments' => 'Vai jūs vēlaties, lai varētu komentēt šo ierakstu?',
	'form_help_public' => 'Vai jūs vēlaties, lai šis ieraksts vai lapa būtu publiska? (atzīmējiet lai nesaglabājās kā melnraksts(draft)).',
	'form_help_tags' => 'Tagi padara meklēšanu vieglāku, gluži kā kategorijas. Lūdzu ievadiet vārdus, lai atdalītu izmantojiet atstpari.',
	'form_help_current_tags' => 'Ieteikumi:',
	'form_help_current_blocks' => 'Pieejami bloki:',
	'form_php_warning' => '(Šī lapa ietver sevī PHP. Tādēļ Teksta rediģētājs (Rich Text Editor) ir atslēgts)',
	'form_legend_site_settings' => 'Uzstādiet savas mājaslapas iestatījumus',
	'form_site_name' => 'Nosaukums',
	'form_help_site_name' => 'Kā sauksies jūsu mājaslapa/blogs?',
	'form_page_name' => 'Apakšsaite',
	'form_help_page_name' => 'Šis iestatījums izveidos saiti jūsu mājaslapai (piem. http://www.saits.com/<b>APAKŠSAITE</b>/).',
	'form_page_display_name' => 'Mājaslapas virsraksts',
	'form_help_page_display_name' => 'Kā sauksies jūsu mājaslapa?',
	'form_page_description' => 'Mājaslapas apraksts',
	'form_help_page_description' => 'Izveidojiet mājaslapas aprakstu.',
	'form_page_blocks' => 'Lapas bloki',
	'form_help_page_blocks' => 'Bloki ir papildinājumi jūsu mājaslapai, bloku nosaukumus ir jāatdala ar atstarpi. (bloku vadība tiks uzlabota vēlākās Pixie versijās).',
	'form_searchable' => 'Meklēšana',
	'form_help_searchable' => 'Vai vēlaties, lai šī lapa uzrādītos publiskajos meklētājos?',
	'form_posts_per_page' => 'Ierkasti lapā',
	'form_help_posts_per_page' => 'Cik daudz ierakstu vienā lapā uzrādīt?',
	'form_rss' => 'RSS',
	'form_help_rss' => 'Vai vēlaties, lai tiktu automātiski ģenerēts RSS?',
	'form_in_navigation' => 'Iekš Izvēlnes',
	'form_help_in_navigation' => 'Vai vēlaties, lai šī lapa tiktu pievienota kā Izvēlnes iedaļa?',
	'form_site_url' => 'Mājaslapas saite',
	'form_help_site_url' => 'Kāda ir šīs vietnes saite? (piem. http://www.domens.lv/saits vai http://domens.lv).',
	'form_site_homepage' => 'Sākumlapa',
	'form_help_homepage' => 'Kuru lapu vēlaties redzēt pirmo (atverot savu mājaslapu)?',
	'form_site_keywords' => 'Atslegvārdi',
	'form_help_site_keywords' => 'Atslēgvārdi palīdzēs meklētājiem atrast jūsu vietni. (e.g. šis, saits, ieper).',
	'form_site_author' => 'Autors',
	'form_site_copywright' => 'Autortiesības',
	'form_site_curl' => 'Tīrās saites?',
	'form_help_site_curl' => 'Vai vēlaties, lai tiktu ieslēgtas "Tīrās saites"? Tās izskatās šādi www.domens.lv/parmums/ nevis www.domens.lv?s=parmums. Šis iestatījums darbosies tikai zem LINUX bāzētiem saitiem.',
	'form_legend_pixie_settings' => 'Adjust the way Pixie behaves',
	'form_pixie_language' => 'Valoda',
	'form_help_pixie_language' => 'Select the language you wish to use.',
	'form_pixie_timezone' => 'Laika Zona',
	'form_help_pixie_timezone' => 'Izvēlieties pareizo laika zonu.',
	'form_pixie_dst' => 'Saulgrieži',
	'form_help_pixie_dst' => 'Būs saulgrieži šai vietnei vai nē?',
	'form_pixie_date' => 'Datums &amp; Laiks',
	'form_help_pixie_date' => 'Izvēlieties laika un datuma formātu.',
	'form_pixie_rte' => 'Rich Text Editor',
	'form_help_pixie_rte' => 'Vai jūs vēlaties lietot Ckeditor teksta redaktoru? (Ar šī rīka palīdzību ir ļoti viegli rediģēt tekstu, bet nav pilnīgi atbalstīts uz visiem pārlūkiem).',
	'form_pixie_logs' => 'Darbību ieraksta dzēšana',
	'form_help_pixie_logs' => 'Pēc cik dienām vēlaties attīrīt "Darbību ierakstus"(Log file)?',
	'form_pixie_sysmess' => 'Sistēmas ziņa',
	'form_help_pixie_sysmess' => 'Šī ziņa tiks parādīta visiem ciemiņiem.',
	'form_help_settings_page_type' => 'Kāda tipa lapu vēlaties izveidot?',
	'form_legend_user_settings' => 'Lietotāja iestatījumi',
	'form_user_username' => 'Lietotājvārds',
	'form_help_user_username' => 'Lietotājvārdi nevar iekļaut sevī atstarpes.',
	'form_user_realname' => 'Vārds',
	'form_help_user_realname' => 'Ievadiet īsto vārdu.',
	'form_user_permissions' => 'Atļaujas',
	'form_help_user_permissions' => 'Kādas atļaujas vēlaties piešķirt šim lietotājam?',
	'form_help_user_permissions_block' => 'Kāds lietotājs būs?',
	'form_button_create_user' => 'Izveidot lietotāju',
	'form_upload_file' => 'Fails',
	'form_help_upload_file' => 'Izvēlaties failu kuru augšupielādēt.',
	'form_help_upload_tags' => 'Atslēgvārdus atdaliet ar atstarpēm.',
	'form_upload_replace_files' => 'Aizvietot esošos failus?', 
	'form_help_upload_replace_files' => 'Vai jūs cenšaties aizvietot esošu failu?',
	'form_search_words' => 'Atslēgvārdi',
	'form_privs' => 'Lapas atļaujas',
	'form_help_privs' => 'Kurš būs spējīgs rediģēt šo lapu?', 
	
	//email
	'email_newpassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Jauna parole',
	'email_changepassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Nomainīta parole',
	'email_newpassword_message' => 'Jūsu jaunā parole : ',
	'email_account_close_message' => 'Jūsu Pixie konts ir slēgts @ ' . $site_url . '. Ja vēlaties sazinieties ar administrāciju.',
	'email_account_close_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Konts slēgts',
	'email_account_edit_subject' =>	'Pixie (' . str_replace('http://', "", $site_url) . ') - Svarīga informācija',
	'email_account_new_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Jauns konts',
	
	//front end
	'continue_reading' => 'Turpināt lasīt',
	'permalink' => 'Permalinks',
	'theme' => 'Izskats',
	'navigation' => 'Izvēlne',
	'skip_to_content' => 'Lekt uz rakstu &raquo;',
	'skip_to_nav' => 'Lekt uz izvēlni &raquo;',
	'by' => '',
	'on' => '',
	'view' => 'Skatīt',
	'profile' => 'profils',
	'all_posts_tagged' => 'visi ierkastii tagoti',
	'permalink_to' => 'Nemainīgā saite uz',
	'comments' => 'Komentāri',
	'comment' => 'Komentēt',
	'no_comments' => 'Nav neviena komentāra...',
	'comment_closed' => 'Komentēšana atslēgta.',
	'comment_thanks' => 'Paldies par komentāru.',
	'comment_leave' => 'Atstāt komentārtu',
	'comment_form_info' => 'Komentāri ir <a href="http://gravatar.com" title="Iegūsti sev Gravataru !"><b>Gravatar</b></a> un <a href="http://www.cocomment.com" title="Seko un dalies ar saviem komentāriem - coComment">coComment</a> spēcināti.',
	'comment_name' => 'Vārds',
	'comment_email' => 'Epasts',
	'comment_web' => 'Mājaslapa',
	'comment_button_leave' => 'Iesūtīt komentāru',
	'comment_name_error' => 'Lūdzu norādiet savu vārdu.',
	'comment_email_error' => 'Lūdzu norādiet e-pastu.',
	'comment_web_error' => 'Lūdzu norādiet mājaslapas adresi.',
	'comment_comment_error' => 'Lūdzu nokomentējiet.',	
	'comment_save_log' => 'Nokomentēts : ',
	'tagged' => 'Tagots',
	'tag' => 'Tags',
	'popular' => 'Paši populārākie',
	'archives' => 'Arhīvs',
	'posts' => 'ieraksti',
	'last_updated' => 'Pēdējoreiz atjaunots',
	'edit_post' => 'Rediģēt ierakstu',
	'edit_page' => 'Rediģēt lapu',
	'popular_posts' => 'Populārie ierkasti',
	'next_post' => 'Nākamais ieraksts',
	'next_page' => 'Nākamā lapa',
	'previous_post' => 'Iepriekšējais ieraksts',
	'previous_page' => 'Iepriekšējā lapa',
	'dynamic_page' => 'Lapa'
);
?>