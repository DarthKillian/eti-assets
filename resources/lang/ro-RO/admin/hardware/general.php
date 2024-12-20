<?php

return [
    'about_assets_title'           => 'Despre Active',
    'about_assets_text'            => 'Activele sunt elemente urmărite prin numărul de serie sau eticheta de activ. Ele tind să fie elemente de valoare mai mare în cazul în care identificarea unui anumit element contează.',
    'archived'  				=> 'Arhivate',
    'asset'  					=> 'Activ',
    'bulk_checkout'             => 'Predă activ',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Verifica activ',
    'checkout'  				=> 'Checkout Asset',
    'clone'  					=> 'Cloneaza activ',
    'deployable'  				=> 'Lansabil',
    'deleted'  					=> 'Acest activ a fost șters.',
    'delete_confirm'            => 'Sunteţi sigur că doriţi să ştergeţi acest activ?',
    'edit'  					=> 'Editeaza activ',
    'model_deleted'  			=> 'Acest model de active a fost șters. Trebuie să restaurați modelul înainte de a putea restaura activul.',
<<<<<<< HEAD
    'model_invalid'             => 'Modelul acestui activ nu este valid.',
    'model_invalid_fix'         => 'Activul trebuie editat pentru a corecta acest lucru înainte de a încerca să îl verificați înăuntru sau afară.',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => 'Requestable',
    'requested'				    => 'Solicitat',
    'not_requestable'           => 'Nu poate fi solicitat',
    'requestable_status_warning' => 'Nu schimba starea care poate fi solicitată',
    'restore'  					=> 'Restabilirea activului',
    'pending'  					=> 'In asteptare',
    'undeployable'  			=> 'Nelansabil',
    'undeployable_tooltip'  	=> 'Acest activ are o etichetă de stare care nu poate fi implementată și nu poate fi verificată în acest moment.',
    'view'  					=> 'Vizualizeaza activ',
    'csv_error' => 'Aveți o eroare în fișierul dvs. CSV:',
<<<<<<< HEAD
    'import_text' => '
    <p>
    Încărcați un CSV care conține istoricul activelor. Activele și utilizatorii TREBUIE să existe deja în sistem sau acestea vor fi ignorate. Potrivirea activelor pentru importul istoricului  se face pe baza etichetei activului. Vom încerca să găsim un utilizator care se potrivește pe baza numelui de utilizator pe care îl furnizați, și a criteriilor pe care le selectați mai jos. Dacă nu selectați niciun criteriu de mai jos, va încerca potrivirea pe baza formatul numelui de utilizator configurat în Admin &gt; Setări Generale.
    </p>

    <p>Câmpurile incluse în CSV trebuie să se potrivească cu antetul: <strong>Etichetă Activ, Nume, Dată Predare, Dată Primire</strong>. Alte câmpuri suplimentare vor fi ignorate. </p>

    <p>Dată Primire: datele de primire în gestiune necompletate sau viitoare vor marca produsele ca predate către utilizatorul asociat. Dacă coloana Dată Primire este exclusă, data primirii în gestiune va fi data curentă.</p>
    ',
    'csv_import_match_f-l' => 'Încercați potrivirea utilizatorilor după prenume.nume de familie (de ex. jane.smith)',
    'csv_import_match_initial_last' => 'Încercați potrivirea utilizatorilor după inițiala numelui și numele de familie (de ex. jsmith)',
    'csv_import_match_first' => 'Încercați potrivirea utilizatorilor după prenume (de ex. jane)',
    'csv_import_match_email' => 'Încercați potrivirea utilizatorilor folosind emailul ca nume utilizator',
    'csv_import_match_username' => 'Încercați potrivirea utilizatorilor după numele de utilizator',
=======
    'import_text' => '<p>Încărcați un CSV care conține istoricul activelor. Activele și utilizatorii TREBUIE să existe deja în sistem sau acestea vor fi ignorate. Se potrivește activele pentru importul din istorie se întâmplă cu eticheta activului. Vom încerca să găsim un utilizator care se potrivește pe baza numelui de utilizator pe care îl furnizați, și a criteriilor pe care le selectați mai jos. Dacă nu selectați niciun criteriu de mai jos, va încerca pur şi simplu să se potrivească în formatul de nume de utilizator configurat în <code>Admin &gt; General Settings</code>.</p><p>Câmpurile incluse în CSV trebuie să se potrivească cu header-urile: <strong>Tag-ul de activ, nume, data de checkkout, data de Checkin data</strong>. Orice câmpuri suplimentare vor fi ignorate. </p>Data de verificare<p>: datele de verificare necompletate sau viitoare vor verifica articole către utilizatorul asociat. Cu excepția coloanei cu data de Checkin va crea o dată de verificare cu data de jocuri.</p>
    ',
    'csv_import_match_f-l' => 'Încercați să potriviți utilizatorii după formatul <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Încercați să potriviți utilizatorii după <strong>primul nume de familie</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Încercați să potriviți utilizatorii după formatul <strong>prenume</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Încercați să potriviți utilizatorii <strong>e-mail</strong> ca nume de utilizator',
    'csv_import_match_username' => 'Încercați să potriviți utilizatorii <strong>nume de utilizator</strong>',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'Mesaje de eroare:',
    'success_messages' => 'Mesaje de succes:',
    'alert_details' => 'Vezi mai jos pentru detalii.',
    'custom_export' => 'Export date personalizat',
    'mfg_warranty_lookup' => ':manufacturer Garanție Căutare stare',
    'user_department' => 'Departamentul Utilizatori',
];
