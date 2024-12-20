<?php

return [
    'about_assets_title'           => 'Over activa',
    'about_assets_text'            => 'Assets zijn items die worden bijgehouden op serienummer of een tag van het product. Het zijn meestal items met een hogere waarde waarbij het identificeren van een specifiek item belangrijk is.',
    'archived'  				=> 'Gearchiveerd',
    'asset'  					=> 'Asset',
    'bulk_checkout'             => 'Activa uitgeven',
    'bulk_checkin'              => 'Activa innemen',
    'checkin'  					=> 'Asset inchecken',
    'checkout'  				=> 'Asset uitchecken',
    'clone'  					=> 'Dupliceer Asset',
    'deployable'  				=> 'Uitgeefbaar',
    'deleted'  					=> 'Deze asset is verwijderd.',
    'delete_confirm'            => 'Weet u zeker dat u dit item wilt verwijderen?',
    'edit'  					=> 'Asset bewerken',
    'model_deleted'  			=> 'Dit Assets model is verwijderd. U moet het model herstellen voordat u het Asset kunt herstellen.',
<<<<<<< HEAD
    'model_invalid'             => 'Het model van dit item is ongeldig.',
    'model_invalid_fix'         => 'Het asset moet worden bewerkt om dit te corrigeren voordat u probeert het in of uit te checken.',
=======
    'model_invalid'             => 'Het model voor deze asset is ongeldig.',
    'model_invalid_fix'         => 'De asset moet worden bijgewerkt en gebruikt een geldig asset model voordat u het probeert in of uit te checken, of om het te auditen.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Aanvraagbaar',
    'requested'				    => 'Aangevraagd',
    'not_requestable'           => 'Niet aanvraagbaar',
    'requestable_status_warning' => 'Wijzig de status van de aanvraag niet',
    'restore'  					=> 'Herstel Asset',
    'pending'  					=> 'In behandeling',
    'undeployable'  			=> 'Niet uitgeefbaar',
    'undeployable_tooltip'  	=> 'Dit item heeft een status dat op dit moment niet kan worden uitgecheckt.',
    'view'  					=> 'Bekijk Asset',
    'csv_error' => 'Je hebt een fout in je CSV-bestand:',
<<<<<<< HEAD
    'import_text' => '
    <p>
    Upload een CSV bestand dat de asset historie bevat. De assets en gebruikers MOETEN al in het systeem staan anders worden ze overgeslagen. Het koppelen van assets gebeurt op basis van assets Tag. We proberen om een gebruiker te vinden op basis van de gebruikersnaam die je hebt opgegeven en de onderstaande criteria. Indien je geen criteria selecteert proberen we te koppelen op het gebruikersnaam formaat zoals geconfigureerd in de Admin &gt; Algemene Instellingen.
    </p>

    <p>Velden in de CSV moet overeenkomen met de headers: <strong>Asset Tag, Naam, Check-out Datum, Check-in Datum</strong>. Alle additionele velden worden overgeslagen. </p>

    <p>Check-in Datum: lege of toekomstige check-in datum worden ingecheckt aan de betreffende gebruiker. Zonder Check-in kolom maken we een check-in datum met vandaag als datum.</p>
    ',
    'csv_import_match_f-l' => 'Probeer gebruikers te koppelen via voornaam.achternaam (Jan.Janssen) opmaak',
    'csv_import_match_initial_last' => 'Probeer gebruikers te koppelen via eerste initiaal en achternaam (jjanssen) opmaak',
    'csv_import_match_first' => 'Probeer gebruikers te koppelen via voornaam (jan) opmaak',
    'csv_import_match_email' => 'Probeer gebruikers te koppelen via e-mail als gebruikersnaam',
    'csv_import_match_username' => 'Probeer gebruikers te koppelen via gebruikersnaam',
=======
    'import_text' => '<p>Upload een CSV dat asset geschiedenis bevat. De assets en gebruikers MOET al bestaan in het systeem, of ze zullen worden overgeslagen. Het vergelijken van activa met geschiedenis importeren gebeurt met de asset tag. We zullen proberen een overeenkomende gebruiker te vinden op basis van de gebruikersnaam, en de criteria die je hieronder selecteert. Als u geen criteria hieronder selecteert, selecteer dan het zal gewoon proberen overeen te komen met het gebruikersnaam formaat dat u hebt geconfigureerd in <code>Admin &gt; Algemene Instellingen</code>.</p><p>Velden die opgenomen zijn in de CSV moeten overeenkomen met de headers: <strong>Asset Tag, naam, Checkout Datum, Checkincheck Datum</strong>. Alle extra velden worden genegeerd. </p><p>Checkin datum: leeg of toekomstige checkinedatums zullen de bijbehorende gebruikers uitchecken. Als u de Checkin Datumkolom uitsluit maakt u een check-in datum met de datum van vandaag.</p>
    ',
    'csv_import_match_f-l' => 'Probeer samen te werken met gebruikers door <strong>firstname.lastname</strong> (<code>jane.smith</code>) formaat',
    'csv_import_match_initial_last' => 'Probeer te koppelen aan gebruikers door <strong>eerste eerste achternaam</strong> (<code>jsmith</code>) formaat',
    'csv_import_match_first' => 'Probeer te koppelen aan gebruikers door <strong>voornaam</strong> (<code>jane</code>) formaat',
    'csv_import_match_email' => 'Probeer te koppelen aan gebruikers door <strong>e-mail</strong> als gebruikersnaam',
    'csv_import_match_username' => 'Probeer te koppelen aan gebruikers met <strong>gebruikersnaam</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Foutmeldingen:',
    'success_messages' => 'Succesvolle berichten:',
    'alert_details' => 'Zie hieronder voor details.',
    'custom_export' => 'Aangepaste export',
    'mfg_warranty_lookup' => ':manufacturer Garantiestatus opzoeken',
    'user_department' => 'Gebruiker afdeling',
];
