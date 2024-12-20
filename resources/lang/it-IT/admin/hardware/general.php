<?php

return [
    'about_assets_title'           => 'Informazioni sugli asset',
    'about_assets_text'            => 'Gli asset sono elementi tracciati con il numero di serie o il tag di asset. Tendono ad essere oggetti di valore più elevato dove identificare un elemento specifico.',
    'archived'  				=> 'Archiviato',
<<<<<<< HEAD
    'asset'  					=> 'Asset',
=======
    'asset'  					=> 'Bene',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'bulk_checkout'             => 'Ritiro Asset',
    'bulk_checkin'              => 'Check-in Bene',
    'checkin'  					=> 'Ingresso Asset',
    'checkout'  				=> 'Asset Checkout',
    'clone'  					=> 'Copia Asset',
    'deployable'  				=> 'Assegnabile',
    'deleted'  					=> 'Questo bene è stato eliminato.',
    'delete_confirm'            => 'Sei sicuro di voler eliminare questo bene?',
    'edit'  					=> 'Modifica Asset',
    'model_deleted'  			=> 'Questo modello di asset è stato eliminato. Devi ripristinare il modello prima di poter ripristinare il bene.',
    'model_invalid'             => 'Il modello di questo bene non è valido.',
<<<<<<< HEAD
    'model_invalid_fix'         => 'Il bene deve essere modificato per correggerlo prima di farne il check in o il check out.',
=======
    'model_invalid_fix'         => 'Il bene deve avere un modello valido prima di poterne fare l\'assegnazioni, check-in o controlli.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Disponibile',
    'requested'				    => 'richiesto',
    'not_requestable'           => 'Non Richiedibili',
    'requestable_status_warning' => 'Non cambiare richiedibilità',
    'restore'  					=> 'Ripristina Asset',
    'pending'  					=> 'In attesa',
    'undeployable'  			=> 'Non Distribuilbile',
    'undeployable_tooltip'  	=> 'Questo bene ha una etichetta che lo rende non distribuibile, il check-out non può avvenire.',
    'view'  					=> 'Vedi Asset',
    'csv_error' => 'C\'è un errore nel file CSV:',
<<<<<<< HEAD
    'import_text' => '
    <p>
    Carica un CSV che contiene la storia dei beni. I beni e gli utenti DEVONO essere già esistenti nel sistema, o verranno saltati. Il match dei beni per l\'importazione della storia si basa sul tag del bene. Proveremo a trovare un utente che combacia basandoci sul nome inserito e il criterio scelto qui sotto. Se non scegli alcun criterio, il match avverrà col formato del nome utente configurato in Admin &gt; Impostazioni Generali.
    </p>

    <p>I campi inclusi del CSV devono combaciare con gli headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Eventuali altri campi verranno ignorati. </p>

    <p>Checkin Date: Date di check-in vuote o del futuro causeranno un check-out degli oggetti all\'utente associato. Escludere completamente la data di Check-in creerà una data di check-in con la data di oggi.</p>
    ',
    'csv_import_match_f-l' => 'Abbina gli utenti col formato nome.cognome (jane.smith)',
    'csv_import_match_initial_last' => 'Abbina gli utenti col formato iniziale cognome (jsmith)',
    'csv_import_match_first' => 'Abbina gli utenti col formato nome (jane)',
    'csv_import_match_email' => 'Abbina gli utenti usando l\'email come username',
    'csv_import_match_username' => 'Abbina gli utenti con l\'username',
=======
    'import_text' => '<p>Carica un CSV che contiene la cronologia degli asset. Gli asset e gli utenti DEVONO già esistere nel sistema, o saranno saltati. Le risorse corrispondenti per l\'importazione della cronologia si verificano con il tag dell\'asset. Cercheremo di trovare un utente corrispondente in base al nome dell\'utente che fornisci e ai criteri selezionati qui sotto. Se non si seleziona alcun criterio qui sotto, proverà semplicemente a corrispondere al formato del nome utente che hai configurato in <code>Admin &gt; Impostazioni Generali</code>.</p><p>I campi inclusi nel CSV devono corrispondere alle intestazioni: <strong>Asset Tag, Nome, Data di Checkout, Data di Checkin</strong>. Eventuali campi aggiuntivi verranno ignorati. </p><p>Data di Checkin: le date di check in vuote o future assegneranno gli elementi all\'utente associato. Esclusa la colonna Data di controllo creerà una data di check-in con la data di oggi.</p>
    ',
    'csv_import_match_f-l' => 'Prova ad abbinare gli utenti con il formato <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Prova ad abbinare gli utenti con il formato <strong>primo cognome</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Prova ad abbinare gli utenti con il formato <strong>nome</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Prova a abbinare gli utenti con <strong>email</strong> come nome utente',
    'csv_import_match_username' => 'Prova ad abbinare gli utenti con il nome utente <strong></strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Messaggi di errore:',
    'success_messages' => 'Messaggi di successo:',
    'alert_details' => 'Leggere sotto per maggiori dettagli.',
    'custom_export' => 'Esportazione Personalizzata',
    'mfg_warranty_lookup' => ':manufacturer Cerca Stato Garanzia',
    'user_department' => 'Dipartimento Utente',
];
