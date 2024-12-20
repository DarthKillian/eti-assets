<?php

return [
    'about_assets_title'           => 'Om assets',
    'about_assets_text'            => 'Eiendeler er sporet av serienummer eller assetsmerke.  De pleier å være høyere verdi f. eks for å identifisere spesielle ting.',
    'archived'  				=> 'Arkivert',
    'asset'  					=> 'Eiendel',
    'bulk_checkout'             => 'Sjekk ut Eiendeler',
    'bulk_checkin'              => 'Sjekk inn ressurser',
    'checkin'  					=> 'Sjekk inn eiendel',
    'checkout'  				=> 'Sjekk ut asset',
    'clone'  					=> 'Klon eiendel',
    'deployable'  				=> 'Utleverbar',
    'deleted'  					=> 'Denne eiendelen har blitt slettet.',
    'delete_confirm'            => 'Er du sikker på at du vil slette denne ressursen?',
    'edit'  					=> 'Rediger eiendel',
    'model_deleted'  			=> 'Denne eiendelsmodellen er slettet. Du må gjenopprette modellen før du kan gjenopprette eiendelen.',
<<<<<<< HEAD
    'model_invalid'             => 'Modellen til denne ressursen er ugyldig.',
    'model_invalid_fix'         => 'Ressursen burde endres for å rette opp dette før du prøver å sjekke det inn eller ut.',
    'requestable'               => 'Forespørrbar',
    'requested'				    => 'Forespurt',
    'not_requestable'           => 'Ikke mulig å spørre etter',
    'requestable_status_warning' => 'Do not change requestable status',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Forespørrbar',
    'requested'				    => 'Forespurt',
    'not_requestable'           => 'Ikke mulig å spørre etter',
    'requestable_status_warning' => 'Ikke endre forespørselsstatus',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'restore'  					=> 'Gjenopprett eiendel',
    'pending'  					=> 'Under arbeid',
    'undeployable'  			=> 'Ikke utleverbar',
    'undeployable_tooltip'  	=> 'Denne ressursen har en statusetikett som ikke er distribuerbar og kan ikke sjekkes ut på dette tidspunktet.',
    'view'  					=> 'Vis eiendel',
    'csv_error' => 'Du har en feil i din CSV-fil:',
<<<<<<< HEAD
    'import_text' => '
<p>
    Last opp en CSV-fil som inneholder eiendelshistorikk. Eiendeler og brukere i fila MÅ allerede finnes i systemet, hvis ikke blir de oversett. Eiendelene blir matchet mot Eiendelsmerke (Asset Tag). Vi vil forsøke å finne en matchende bruker basert på brukerens navn og de kriteriene du spesifiserer under. Hvis du ikke spesifiserer noen kriterier vil vi forsøke å matche brukere på brukernavn-formatet som er satt opp i Admin &gt; Generelle innstillinger
</p>

    <p>CSV-fila må inneholde headerne <strong>Asset Tag, Name, Checkout Data, Checkin Date</strong>. Ekstra felter blir oversett.</p>

    <p>Checkin Date: Tomme eller datoer i fremtiden vil sjekke ut eiendelen til den tilknyttede brukeren. Manger Checkin Date-kolonnen vil det føre til at innsjekk blir dagens dato.</p>
    ',
    'csv_import_match_f-l' => 'Prøv å matche brukere med formatet fornavn.etternavn (eli.nordmann)',
    'csv_import_match_initial_last' => 'Prøv å matche brukere med formatet initial+etternavn (enordmann)',
    'csv_import_match_first' => 'Prøv å matche brukere med formatet fornavn (eli)',
    'csv_import_match_email' => 'Prøv å matche brukere med e-post som brukernavn',
    'csv_import_match_username' => 'Prøv å matche brukere med brukernavn',
=======
    'import_text' => '<p>Last opp en CSV som inneholder eiendeler. Eiendelene og brukerne MÅ allerede finnes i systemet, ellers vil de bli hoppet over. Samsvarende ressurser for tidligere import skjer mot eiendeler. Vi vil prøve å finne en matchende bruker basert på navnet du oppgiver, og kriteriene du velger nedenfor. Hvis du ikke velger noen av kriteriene nedenfor, det vil bare prøve å matche på brukernavnet formatet du konfigurert i <code>Admin &gt; Generelle innstillinger</code>.</p><p>Felter som er inkludert i CSV, må samsvare med overskriftene: <strong>Asset Tag, Navn, Kasse Dato, Innsjekkingsdato</strong>. Eventuelle ekstra felt vil bli ignorert. </p><p>Innsjekkingsdato: tomme eller fremtidige sjekkingsdatoer vil kassere elementer til tilhørende bruker. Ekskluder kolonnen Sjekkinn dato vil opprette en avmerkingsdato med dagens dato.</p>
    ',
    'csv_import_match_f-l' => 'Prøv å matche brukere av <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Prøv å matche brukere med <strong>første første etternavn</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Prøv å matche brukere med <strong>fornavn</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Prøv å matche brukere med <strong>email</strong> som brukernavn',
    'csv_import_match_username' => 'Prøv å matche brukere av <strong>brukernavn</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Feilmeldinger:',
    'success_messages' => 'Suksessmeldinger:',
    'alert_details' => 'Vennligst se nedenfor for detaljer.',
    'custom_export' => 'Egendefinert eksport',
    'mfg_warranty_lookup' => ':manufacturer Garanti statusoppslag',
    'user_department' => 'Bruker avdeling',
];
