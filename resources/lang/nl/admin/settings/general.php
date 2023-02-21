<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domein',
    'ad_domain_help'			=> 'Dit is soms hetzelfde als je e-mail domein.',
    'ad_append_domain_label'    => 'Domeinnaam toevoegen',
    'ad_append_domain'          => 'Domeinnaam toevoegen aan veld gebruikersnaam',
    'ad_append_domain_help'     => 'Gebruiker is niet verplicht om "username@domain.local" te schrijven, deze kan alleen "username" typen.',
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'Als u een kopie van de checkout/checkin e-mail die aan de gebruikers worden verzonden wilt verzenden naar een extra e-mailaccount, vul dan hier het e-mailadres in. Laat anders dit veld leeg.',
    'is_ad'				        => 'Dit is een Active Directory server',
    'alerts'                	=> 'Waarschuwingen',
    'alert_title'               => 'Update waarschuwingsinstellingen',
    'alert_email'				=> 'Verstuur meldingen naar',
    'alert_email_help'    => 'E-mailadressen of distributielijsten waar je meldingen naar wilt verzenden, door komma\'s gescheiden',
    'alerts_enabled'			=> 'Meldingen ingeschakeld',
    'alert_interval'			=> 'Drempel verlopende meldingen (in dagen)',
    'alert_inv_threshold'		=> 'Inventaris melding drempel',
    'allow_user_skin'           => 'Gebruikers skin toestaan',
    'allow_user_skin_help_text' => 'Door dit selectievakje aan te vinken, kan een gebruiker de skin van de gebruikersinterface met een andere overschrijven.',
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Interval audit',
    'audit_interval_help'       => 'Als je verplicht bent regelmatig fysiek je bezitting te controleren, kies dan een interval in maanden. Als je deze interval bijwerkt worden alle "volgende controle datums" aangepast.',
    'audit_warning_days'        => 'Audit waarschuwingsdrempel',
    'audit_warning_days_help'   => 'Hoeveel dagen op voorhand moeten we je waarschuwen wanneer assets gecontroleerd moeten worden?',
    'auto_increment_assets'		=> 'Genereer automatisch verhogen van asset Id\'s',
    'auto_increment_prefix'		=> 'Voorvoegsel (niet verplicht)',
    'auto_incrementing_help'    => 'Schakel eerst automatisch verhogen van asset Id\'s in om dit in te stellen',
    'backups'					=> 'Back-ups',
    'backups_help'              => 'Maken, downloaden en herstellen van back-ups ',
    'backups_restoring'         => 'Herstellen vanuit back-up',
    'backups_upload'            => 'Backup uploaden',
    'backups_path'              => 'Back-ups op de server worden opgeslagen in <code>:path</code>',
    'backups_restore_warning'   => 'Gebruik de herstel knop <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> om een vorige back-up te herstellen. (Dit werkt momenteel niet met S3 bestandsopslag of Docker.<br><br>Je <strong>gehele :app_name database en alle geüploade bestanden zullen</strong> volledig vervangen worden door wat er in het backup bestand staat.  ',
    'backups_logged_out'         => 'Alle bestaande gebruikers, inclusief jijzelf, worden uitgelogd zodra je herstel is voltooid.',
    'backups_large'             => 'Zeer grote back-ups kunnen uitvallen op de herstelpoging en moeten mogelijk nog steeds worden uitgevoerd via de command line. ',
    'barcode_settings'			=> 'Barcode instellingen',
    'confirm_purge'			    => 'Opschoning bevestigen',
    'confirm_purge_help'		=> 'Voer de tekst "DELETE" in het vak hieronder om uw verwijderde records definitief te verwijderen. Deze actie kan niet ongedaan worden gemaakt en zal PERMANENT alle soft-deleted items en gebruikers verwijderen. (Je moet eerst een backup maken voor de zekerheid.)',
    'custom_css'				=> 'Aangepaste CSS',
    'custom_css_help'			=> 'Voer een aangepaste CSS overschrijving die je wilt gebruiken in. Gebruik geen &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Aangepaste Paswoord reset URL',
    'custom_forgot_pass_url_help'	=> 'Dit vervangt de ingebouwde "vergeten paswoord URL" op de inlogpagina, handig om gebruikers te verwijzen naar een interne of gehoste LDAP paswoord reset functionaliteit. Deze optie inschakelen zal effectief de functionaliteit "vergeten paswoord" voor een lokale gebruiker uitschakelen.',
    'dashboard_message'			=> 'Dashboard-bericht',
    'dashboard_message_help'	=> 'Deze tekst verschijnt op het dashboard voor iedereen met toestemming om het dashboard te bekijken.',
    'default_currency'  		=> 'Standaard valuta',
    'default_eula_text'			=> 'Standaard gebruikersovereenkomst',
    'default_language'			=> 'Standaardtaal',
    'default_eula_help_text'	=> 'Je kunt aangepaste gebruikersovereenkomsten koppelen aan specifieke assetcategorieën.',
    'display_asset_name'        => 'Geef Asset naam weer',
    'display_checkout_date'     => 'Toon Checkout datum',
    'display_eol'               => 'Toon EOL in tabel weergave',
    'display_qr'                => 'QR codes weergeven',
    'display_alt_barcode'		=> 'Streepjescode weergeven',
    'email_logo'                => 'E-mail logo',
    'barcode_type'				=> 'QR-code soort',
    'alt_barcode_type'			=> 'Streepjescode soort',
    'email_logo_size'       => 'Vierkante logo\'s in de e-mail zien er het beste uit. ',
    'enabled'                   => 'Ingeschakeld',
    'eula_settings'				=> 'Gebruikersovereenkomsten instellingen',
    'eula_markdown'				=> 'Deze gebruikersovereenkomst staat <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> toe.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Geaccepteerde bestandstypen zijn ico, png en gif. Andere afbeeldingsformaten werken mogelijk niet in alle browsers.',
    'favicon_size'          => 'Favorieten moeten vierkante afbeeldingen zijn, 16x16 pixels.',
    'footer_text'               => 'Aanvullende voettekst ',
    'footer_text_help'          => 'Deze tekst verschijnt in de voettekst aan de rechterkant. Links zijn toegestaan ​​met gebruik van <a href="https://help.github.com/articles/github-flavored-markdown/">Github-stijlen</a>. Regeleindes, koppen, afbeeldingen, enzovoort kunnen resulteren in onvoorspelbare resultaten.',
    'general_settings'			=> 'Algemene Instellingen',
    'general_settings_keywords' => 'bedrijfsondersteuning, handtekening, acceptantie, e-mailformaat, gebruikersnaam, afbeeldingen, per pagina, thumbnail, eula, tos, dashboard, privacy',
    'general_settings_help'     => 'Standaard gebruikersovereenkomst en meer',
    'generate_backup'			=> 'Genereer een backup',
    'header_color'              => 'Kleur van koptekst',
    'info'                      => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'label_logo'                => 'Label logo',
    'label_logo_size'           => 'Vierkante logo\'s zien er het beste uit - zullen worden weergegeven in de rechterbovenhoek van elk asset label. ',
    'laravel'                   => 'Laravel Versie',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Standaard Permissies Groep',
    'ldap_default_group_info'   => 'Selecteer een groep om toe te wijzen aan nieuwe gesynchroniseerde gebruikers. Vergeet niet dat een gebruiker de rechten van de toegekende groep aanneemt.',
    'no_default_group'          => 'Geen Standaard Groep',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client-Side TLS-sleutel',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS-certificaat',
    'ldap_enabled'              => 'LDAP ingeschakeld',
    'ldap_integration'          => 'LDAP integratie',
    'ldap_settings'             => 'LDAP instellingen',
    'ldap_client_tls_cert_help' => 'Client-Side TLS-certificaat en sleutel voor LDAP verbindingen zijn meestal alleen nuttig in Google Workspace configuraties met "Secure LDAP." Beide zijn vereist.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS-sleutel',
    'ldap_login_test_help'      => 'Voer een geldig LDAP gebruikersnaam en paswoord in van de base DN die u hierboven heeft bepaald. Dit om te testen of uw LDAP login correct is geconfigureerd. U MOET EERST UW BIJGEWERKTE LDAP INSTELLINGEN OPSLAAN.',
    'ldap_login_sync_help'      => 'Dit test enkel of LDAP correct kan synchroniseren. Als uw LDAP authenticatie vraag niet correct is, dan is het mogelijk dat gebruikers niet kunnen inloggen. U MOET EERST UW BIJGEWERKTE LDAP INSTELLINGEN OPSLAAN.',
    'ldap_manager'              => 'LDAP manager',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'Dit moet beginnen met ldap:// (voor onversleuteld of TLS) of ldaps:// (voor SSL)',
    'ldap_server_cert'			=> 'LDAP SSL certificaat validatie',
    'ldap_server_cert_ignore'	=> 'Staat ongeldige SSL certificaat toe',
    'ldap_server_cert_help'		=> 'Selecteer deze box als je een eigen ondergetekende SSL certificaat gebruik en deze wilt accepteren.',
    'ldap_tls'                  => 'TLS gebruiken',
    'ldap_tls_help'             => 'Dit moet alleen ingeschakeld worden als je STARTTLS op je LDAP server gebruikt. ',
    'ldap_uname'                => 'LDAP Bind gebruikersnaam',
    'ldap_dept'                 => 'LDAP afdeling',
    'ldap_phone'                => 'LDAP telefoonnummer',
    'ldap_jobtitle'             => 'LDAP functie titel',
    'ldap_country'              => 'LDAP Land',
    'ldap_pword'                => 'LDAP Bind wachtwoord',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP filter',
    'ldap_pw_sync'              => 'LDAP wachtwoord synchronisatie',
    'ldap_pw_sync_help'         => 'Schakel dit vinkje uit als je niet wenst dat LDAP wachtwoorden gesynchroniseerd worden met lokale wachtwoorden. Uitschakelen kan betekenen dat gebruikers niet kunnen inloggen als de LDAP server niet bereikbaar is.',
    'ldap_username_field'       => 'Gebruikersnaam veld',
    'ldap_lname_field'          => 'Achternaam',
    'ldap_fname_field'          => 'LDAP Voornaam',
    'ldap_auth_filter_query'    => 'LDAP verficatie query',
    'ldap_version'              => 'LDAP versie',
    'ldap_active_flag'          => 'LDAP actief vlag',
    'ldap_activated_flag_help'  => 'Deze waarde word gebruikt om te bepalen of een gesynchroniseerde gebruiker kan inloggen op Snipe-IT. <strong>Het beinvloed niet de mogelijkheid om artikelen in of uit te checken voor hun<strong>, en zou de <strong>attribute name<strong> binnen je AD/LDAP moeten zijn, <strong>niet de waarde<strong>. <br><br>Als dit veld is ingesteld op een veld naam dat niet bestaat in je AD/LDAP, of de waarde in de AD/LDAP veld is ingesteld op <code>0<code> of <code>false<code>, <strong>word gebruiker login uitgeschakeld<strong>. Als de waarde in het AD/LDAP veld is ingesteld op <code>1<code> of <code>true<code> of<em>iets anders<em> betekent het dat de gebruiker kan inloggen. Wanneer het veld leeg is in je AD, respecteren wij de <code>userAccountControl<code> attribuut, wat gebruikelijk niet opgeschorte gebruikers toestaat om in te loggen',
    'ldap_emp_num'              => 'LDAP personeelsnummer',
    'ldap_email'                => 'LDAP E-mail',
    'ldap_test'                 => 'LDAP testen',
    'ldap_test_sync'            => 'LDAP-synchronisatie testen',
    'license'                   => 'Softwarelicentie',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'Deze Snipe-IT installatie kan scripts van de buitenwereld laden.',
    'login'                     => 'Inlog pogingen',
    'login_attempt'             => 'Inlog poging',
    'login_ip'                  => 'IP adres',
    'login_success'             => 'Succesvol?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'Lijst van inlogpogingen',
    'login_note'                => 'Inlog notitie',
    'login_note_help'           => 'Hier kan je optioneel een paar regels tekst weergeven, bijvoorbeeld om mensen die een verloren of gestolen apparaat hebben gevonden te assisteren. Dit veld accepteert <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown opmaak</a>',
    'login_remote_user_text'    => 'Opties voor externe gebruikers',
    'login_remote_user_enabled_text' => 'Inloggen met header voor externe gebruiker inschakelen',
    'login_remote_user_enabled_help' => 'Met deze optie wordt verificatie via de REMOTE_USER-header ingeschakeld volgens de "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Schakel andere authenticatiemechanismen uit',
    'login_common_disabled_help' => 'Met deze optie worden andere authenticatiemechanismen uitgeschakeld. Schakel deze optie alleen in als u zeker weet dat uw REMOTE_USER-login al werkt',
    'login_remote_user_custom_logout_url_text' => 'Aangepaste link voor uitloggen',
    'login_remote_user_custom_logout_url_help' => 'Als hier een URL wordt opgegeven, worden gebruikers doorgestuurd naar deze URL nadat de gebruiker zich heeft afgemeld bij Snipe-IT. Dit is handig om de gebruikerssessies van uw authenticatieprovider correct te sluiten.',
    'login_remote_user_header_name_text' => 'Aangepaste header gebruikersnaam,',
    'login_remote_user_header_name_help' => 'Gebruik een specifieke header in plaats van REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gebruiken bij afdrukken',
    'logo_print_assets_help'    => 'Gebruik logo op afdrukbare assetlijsten ',
    'full_multiple_companies_support_help_text' => 'Beperk gebruikers (inclusief admins) die zijn toegewezen aan bedrijven tot hun bedrijfsassets.',
    'full_multiple_companies_support_text' => 'Volledige meerdere bedrijven ondersteuning',
    'show_in_model_list'   => 'Toon in het dropdownmenu van modellen',
    'optional'					=> 'optioneel',
    'per_page'                  => 'Resultaten per pagina',
    'php'                       => 'PHP versie',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, systeem, info',
    'php_overview_help'         => 'PHP Systeem info',
    'php_gd_info'               => 'Je moet php-gd installeren om QR codes te laten zien, zie installatie instructies.',
    'php_gd_warning'            => 'PHP Image Processing en GD plugin zijn NIET geïnstalleerd.',
    'pwd_secure_complexity'     => 'Wachtwoord complexiteit',
    'pwd_secure_complexity_help' => 'Selecteer wat voor wachtwoord complexiteit je toe wil passen.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Wachtwoord mag niet hetzelfde zijn als voornaam, achternaam, e-mailadres of gebruikersnaam',
    'pwd_secure_complexity_letters' => 'Vereist ten minste één letter',
    'pwd_secure_complexity_numbers' => 'Vereist ten minste één cijfer',
    'pwd_secure_complexity_symbols' => 'Vereist ten minste één symbool',
    'pwd_secure_complexity_case_diff' => 'Veresit minstens één hoofdletter en één kleine letter',
    'pwd_secure_min'            => 'Minimum lengte wachtwoord',
    'pwd_secure_min_help'       => 'Minimaal toegestane waarde is 8',
    'pwd_secure_uncommon'       => 'Algemeen bekende wachtwoorden tegengaan',
    'pwd_secure_uncommon_help'  => 'Dit zal tegengaan dat gebruikers wachtwoorden gebruiken die in de top 10.000 meest uitgelekte wachtwoorden voorkomt.',
    'qr_help'                   => 'Schakel QR codes eerst in om dit in te kunnen stellen',
    'qr_text'                   => 'QR Code tekst',
    'saml'                      => 'SAML',
    'saml_title'                => 'SAML instellingen bijwerken',
    'saml_help'                 => 'SAML instellingen',
    'saml_enabled'              => 'SAML ingeschakeld',
    'saml_integration'          => 'SAML integratie',
    'saml_sp_entityid'          => 'Entiteit ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'URL voor eenmalige uitloggen (SLS)',
    'saml_sp_x509cert'          => 'Openbaar certificaat',
    'saml_sp_metadata_url'      => 'Metagegevens URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'U kunt de IdP metadata opgeven met behulp van een URL of XML bestand.',
    'saml_attr_mapping_username' => 'Attribuuttoewijzing - Gebruikersnaam',
    'saml_attr_mapping_username_help' => 'Naam-Id zal worden gebruikt als attribuuttoewijzing niet gespecificeerd of ongeldig is.',
    'saml_forcelogin_label'     => 'SAML Geforceerd Inloggen',
    'saml_forcelogin'           => 'Maak SAML de primaire login',
    'saml_forcelogin_help'      => 'U kunt \'/login?nosaml\' gebruiken om naar de normale inlogpagina te gaan.',
    'saml_slo_label'            => 'SAML enkel uitloggen',
    'saml_slo'                  => 'Stuur een LogoutRequest naar IdP bij uitloggen',
    'saml_slo_help'             => 'Dit zal ervoor zorgen dat de gebruiker eerst wordt omgeleid naar de IdP bij het uitloggen. Laat uitgevinkt als de IdP niet correct ondersteunt met SP-geïnitieerde SAML SLO.',
    'saml_custom_settings'      => 'SAML aangepaste instellingen',
    'saml_custom_settings_help' => 'Je kunt extra instellingen opgeven voor de onelogin/php-saml bibliotheek. Gebruik op eigen risico.',
    'saml_download'             => 'Metadata downloaden',
    'setting'                   => 'Instelling',
    'settings'                  => 'Instellingen',
    'show_alerts_in_menu'       => 'Waarschuwingen weergeven in hoofdmenu',
    'show_archived_in_list'     => 'Gearchiveerde activa',
    'show_archived_in_list_text'     => 'Toon gearchiveerde items in de lijst "alle items"',
    'show_assigned_assets'      => 'Toon assets die zijn toegewezen aan assets',
    'show_assigned_assets_help' => 'Geef assets weer die zijn toegewezen aan de andere assets in Bekijk Gebruiker -> Assets, Bekijk Gebruiker -> Info -> Print Alles Toegewezen en in Account -> Bekijk Toegewezen Assets.',
    'show_images_in_email'     => 'Afbeeldingen weergeven in e-mails',
    'show_images_in_email_help'   => 'Schakel dit selectievakje uit als uw Snipe-IT-installatie zich achter een VPN of gesloten netwerk bevindt en gebruikers buiten het netwerk geen afbeeldingen vanuit Snipe-IT in hun e-mails kunnen laten zien.',
    'site_name'                 => 'Site naam',
    'slack'                     => 'Slack',
    'slack_title'               => 'Slack instellingen bijwerken',
    'slack_help'                => 'Slack instellingen',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack kanaal',
    'slack_endpoint'            => 'Slack eindpunt',
    'slack_integration'         => 'Slack instellingen',
    'slack_integration_help'    => 'Slack integratie is optioneel, maar het eindpunt en kanaal zijn vereist als je het wilt gebruiken. Om Slack-integratie te configureren, moet u eerst <a href=":slack_link" target="_new" rel="noopener">een inkomende webhook</a> aanmaken op uw Slack-account. Klik op de <strong>Test Slack Integratie</strong> knop om te bevestigen dat uw instellingen correct zijn voordat u opslaat. ',
    'slack_integration_help_button'    => 'Nadat u uw Slack-informatie hebt opgeslagen, verschijnt een testknop.',
    'slack_test_help'           => 'Test of uw Slack-integratie correct is geconfigureerd. JE MOET EERST JE GEUPDATETE SLACK-INSTELLINGEN OPSLAAN.',
    'snipe_version'  			=> 'Snipe-IT Versie',
    'support_footer'            => 'Ondersteuningsvoettekst links ',
    'support_footer_help'       => 'Geef aan wie de links naar de Snipe-IT-ondersteuningsinformatie en gebruikershandleiding ziet',
    'version_footer'            => 'Versie in voettekst ',
    'version_footer_help'       => 'Geef aan wie de Snipe-IT-versie en het buildnummer ziet.',
    'system'                    => 'Systeem informatie',
    'update'                    => 'Wijzig instelingen',
    'value'                     => 'Waarde',
    'brand'                     => 'Merk',
    'brand_keywords'            => 'voettekst, logo, print, thema, skin, header, kleuren, kleur, css',
    'brand_help'                => 'Logo, websitenaam',
    'web_brand'                 => 'Type webmerknaam',
    'about_settings_title'      => 'Over instellingen',
    'about_settings_text'       => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'labels_per_page'           => 'Labels per pagina',
    'label_dimensions'          => 'Label afmetingen (inches)',
    'next_auto_tag_base'        => 'Volgende automatische ophoging',
    'page_padding'              => 'Pagina marges (inches)',
    'privacy_policy_link'       => 'Link naar het privacybeleid',
    'privacy_policy'            => 'Privacybeleid',
    'privacy_policy_link_help'  => 'Als hier een url is opgenomen, wordt een link naar uw privacybeleid opgenomen in de app-voettekst en in alle e-mails die het systeem verzendt, in overeenstemming met GDPR. ',
    'purge'                     => 'Verwijderde Records opschonen',
    'purge_deleted'             => 'Verwijderingen opschonen ',
    'labels_display_bgutter'    => 'Label ondermarge',
    'labels_display_sgutter'    => 'Label zijmarge',
    'labels_fontsize'           => 'Label lettergrootte',
    'labels_pagewidth'          => 'Label blad breedte',
    'labels_pageheight'         => 'Label blad hoogte',
    'label_gutters'        => 'Label tussenruimte (inches)',
    'page_dimensions'        => 'Pagina dimensies (inches)',
    'label_fields'          => 'Zichtbare velden op label',
    'inches'        => 'inches',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link naar Snipe-IT in e-mails',
    'show_url_in_emails_help_text'      => 'Schakel dit selectievakje uit als u niet wilt koppelen aan uw Snipe-IT-installatie in uw e-mailberichten. Nuttig als de meeste gebruikers nooit inloggen.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximale miniatuur hoogte',
    'thumbnail_max_h_help'   => 'Maximale hoogte die miniatuur afbeeldingen mogen hebben in de lijstweergave. Minimaal 25, maximaal 500.',
    'two_factor'        => 'Twee factor authenticatie',
    'two_factor_secret'        => 'Twee factor code',
    'two_factor_enrollment'        => 'Twee factor uitrol',
    'two_factor_enabled_text'        => 'Twee factor inschakelen',
    'two_factor_reset'        => 'Twee factor geheim herstellen',
    'two_factor_reset_help'        => 'Dit zal de gebruiker dwingen om zijn apparaat opnieuw met Google Authenticator te activeren. Dit kan handig zijn als het huidig geactiveerde apparaat gestolen of verloren is. ',
    'two_factor_reset_success'          => 'Twee factor apparaat succesvol opnieuw ingesteld',
    'two_factor_reset_error'          => 'Twee factor apparaat opnieuw instellen mislukt',
    'two_factor_enabled_warning'        => 'Het inschakelen van twee factor authenticatie zal direct vereisen dat je authenticeert met een Google Auth geactiveerd apparaat. Je krijgt de mogelijkheid om een apparaat te activeren als dat nog niet het geval is.',
    'two_factor_enabled_help'        => 'Dit zal twee factor authenticatie via Google Authenticator inschakelen.',
    'two_factor_optional'        => 'Selectief (Gebruikers kunnen in- of uitschakelen wanneer toegestaan)',
    'two_factor_required'        => 'Vereist voor alle gebruikers',
    'two_factor_disabled'        => 'Uitgeschakeld',
    'two_factor_enter_code'	=> 'Voer twee factor code in',
    'two_factor_config_complete'	=> 'Code verzenden',
    'two_factor_enabled_edit_not_allowed' => 'De beheerder staat niet toe dat deze instelling aangepast wordt.',
    'two_factor_enrollment_text'	=> "Twee factor authenticatie is vereist, echter is je apparaat nog niet geactiveerd. Open je Google Authenticator app en scan de onderstaande QR code om je apparaat te activeren. Vul wanneer je het apparaat succesvol hebt geactiveerd hieronder de code in",
    'require_accept_signature'      => 'Handtekening vereisen',
    'require_accept_signature_help_text'      => 'Het inschakelen van deze functie vereist dat gebruikers fysiek ondertekenen bij het accepteren van een asset.',
    'left'        => 'links',
    'right'        => 'rechts',
    'top'        => 'bovenkant',
    'bottom'        => 'onderkant',
    'vertical'        => 'verticaal',
    'horizontal'        => 'horizontaal',
    'unique_serial'                => 'Unieke serienummers',
    'unique_serial_help_text'                => 'Als u dit selectievakje inschakelt, worden unieke serienummers van assets ingeschakeld',
    'zerofill_count'        => 'Lengte van asset labels, inclusief opvulling',
    'username_format_help'   => 'Deze instelling wordt alleen gebruikt door het importproces als er geen gebruikersnaam is opgegeven en we een gebruikersnaam moeten genereren.',
    'oauth_title' => 'OAuth API-instellingen',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth eindpunt instellingen',
    'asset_tag_title' => 'Update Asset Tag Instellingen',
    'barcode_title' => 'Barcode instellingen bijwerken',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR-instellingen',
    'barcodes_help' => 'Dit probeert de gecachte barcodes te verwijderen. Dit wordt meestal alleen gebruikt als de barcode-instellingen zijn gewijzigd of als de Snipe-IT-URL is veranderd. Barcodes worden opnieuw gegenereerd wanneer ze hierna geopend worden.',
    'barcodes_spinner' => 'Poging om bestanden te verwijderen...',
    'barcode_delete_cache' => 'Verwijder Barcode cache',
    'branding_title' => 'Branding instellingen bijwerken',
    'general_title' => 'Algemene instellingen bijwerken',
    'mail_test' => 'Test verzenden',
    'mail_test_help' => 'Hiermee wordt geprobeerd om een testmail te sturen naar :replyto.',
    'filter_by_keyword' => 'Filter door het instellen van trefwoord',
    'security' => 'Beveiliging',
    'security_title' => 'Veiligheidsinstellingen bijwerken',
    'security_keywords' => 'wachtwoord, wachtwoorden, vereisten, twee factor, twee-factor, veelgebruikte wachtwoorden, externe login, logout, authenticatie',
    'security_help' => 'Twee factor, wachtwoorden beperkingen',
    'groups_keywords' => 'machtigingen, machtigingsgroepen, autorisatie',
    'groups_help' => 'Account machtigingsgroepen',
    'localization' => 'Lokalisatie',
    'localization_title' => 'Lokalisatie-instellingen bijwerken',
    'localization_keywords' => 'lokalisatie, valuta, lokaal, lokaal, tijdzone, tijdzone, internationaal, internatinalisatie, taal, vertaling',
    'localization_help' => 'Taal en datum weergave',
    'notifications' => 'Notificaties',
    'notifications_help' => 'E-mail waarschuwingen, audit instellingen',
    'asset_tags_help' => 'Verhogen en voorvoegsels',
    'labels' => 'Labels',
    'labels_title' => 'Labelinstellingen bijwerken',
    'labels_help' => 'Label maten &amp; instellingen',
    'purge' => 'Wis',
    'purge_keywords' => 'permanent verwijderen',
    'purge_help' => 'Verwijderde Records opschonen',
    'ldap_extension_warning' => 'Het lijkt erop dat de LDAP-extensie niet is geïnstalleerd of ingeschakeld op deze server. U kunt nog steeds uw instellingen opslaan, maar u moet de LDAP extensie voor PHP inschakelen voordat LDAP synchronisatie of login zal werken.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Personeelsnummer',
    'create_admin_user' => 'Gebruiker aanmaken ::',
    'create_admin_success' => 'Gelukt! Uw beheerder is toegevoegd!',
    'create_admin_redirect' => 'Klik hier om naar je app login te gaan!',
    'setup_migrations' => 'Database migraties ::',
    'setup_no_migrations' => 'Er was niets om te migreren. Uw databasetabellen zijn al ingesteld!',
    'setup_successful_migrations' => 'Je databasetabellen zijn aangemaakt',
    'setup_migration_output' => 'Migratie uitvoer:',
    'setup_migration_create_user' => 'Volgende: Gebruiker aanmaken',
    'ldap_settings_link' => 'LDAP instellingen pagina',
    'slack_test' => 'Test <i class="fab fa-slack"></i> integratie',
];
