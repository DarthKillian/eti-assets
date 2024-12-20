<?php

return [

    'update' => [
<<<<<<< HEAD
        'error'                 => 'Atnaujinant iškilo nenumatyta problema. ',
        'success'               => 'Nustatymai sėkmingai atnaujinti.',
    ],
    'backup' => [
        'delete_confirm'        => 'Ar tikrai norite ištrinti atsarginę kopiją? Šis veiksmas negalimas. ',
        'file_deleted'          => 'Atsarginė kopija sėkmingai ištrinta. ',
        'generated'             => 'Atsarginė kopija sėkmingai sukurta.',
        'file_not_found'        => 'Atsarginė kopija nerasta.',
        'restore_warning'       => 'Yes, restore it. I acknowledge that this will overwrite any existing data currently in the database. This will also log out all of your existing users (including you).',
        'restore_confirm'       => 'Are you sure you wish to restore your database from :filename?'
    ],
    'purge' => [
        'error'     => 'Išvalant įvyko klaida.',
        'validation_failed'     => 'Jūsų valymo patvirtinimas yra neteisingas. Patvirtinimo laukelyje įrašykite žodį "DELETE".',
        'success'               => 'Ištrinti įrašai sėkmingai išvalomi.',
    ],
    'mail' => [
        'sending' => 'Sending Test Email...',
        'success' => 'El. laiškas išsiųstas!',
        'error' => 'El. laiško išsiųsti nepavyko.',
        'additional' => 'No additional error message provided. Check your mail settings and your app log.'
    ],
    'ldap' => [
        'testing' => 'Testing LDAP Connection, Binding & Query ...',
        '500' => '500 Server Error. Please check your server logs for more information.',
        'error' => 'Kažkas nepavyko :(',
        'sync_success' => 'A sample of 10 users returned from the LDAP server based on your settings:',
        'testing_authentication' => 'Testing LDAP Authentication...',
        'authentication_success' => 'User authenticated against LDAP successfully!'
    ],
    'webhook' => [
        'sending' => 'Sending :app test message...',
        'success' => 'Your :webhook_name Integration works!',
        'success_pt1' => 'Sėkmė! Patikrink ',
        'success_pt2' => ' channel for your test message, and be sure to click SAVE below to store your settings.',
        '500' => '500 serverio klaida.',
        'error' => 'Something went wrong. :app responded with: :error_message',
        'error_redirect' => 'ERROR: 301/302 :endpoint returns a redirect. For security reasons, we don’t follow redirects. Please use the actual endpoint.',
        'error_misc' => 'Kažkas nepavyko. :( ',
=======
        'error'                 => 'Atnaujinant įvyko klaida. ',
        'success'               => 'Nustatymai atnaujinti sėkmingai.',
    ],
    'backup' => [
        'delete_confirm'        => 'Ar tikrai norite ištrinti atsarginę kopiją? Šis veiksmas negrįžtamas. ',
        'file_deleted'          => 'Atsarginė kopija ištrinta sėkmingai. ',
        'generated'             => 'Atsarginė kopija sukurta sėkmingai.',
        'file_not_found'        => 'Šio atsarginės kopijos failo serveryje rasti nepavyko.',
        'restore_warning'       => 'Taip, atkurti. Suprantu, kad tai perrašys visus šiuo metu duomenų bazėje esančius duomenis. Taip pat, kad bus atjungti visi esami naudotojai (įskaitant mane).',
        'restore_confirm'       => 'Ar tikrai norite atkurti savo duomenų bazę iš :filename?'
    ],
    'restore' => [
        'success'               => 'Jūsų sistemos atsarginė kopija buvo atkurta. Prisijunkite iš naujo.'
    ],
    'purge' => [
        'error'     => 'Valymo metu įvyko klaida. ',
        'validation_failed'     => 'Jūsų įvestas išvalymo patvirtinimas yra neteisingas. Patvirtinimo lauke įveskite žodį „DELETE“.',
        'success'               => 'Anksčiau panaikinti įrašai sėkmingai išvalyti.',
    ],
    'mail' => [
        'sending' => 'Siunčiamas bandomasis el. laiškas...',
        'success' => 'El. laiškas išsiųstas!',
        'error' => 'El. laiško išsiųsti nepavyko.',
        'additional' => 'Nėra jokio papildomo klaidos pranešimo. Patikrinkite pašto nustatymus ir programos žurnalą.'
    ],
    'ldap' => [
        'testing' => 'Tikrinamas LDAP ryšys, susiejimas ir užklausos...',
        '500' => '500 serverio klaida. Norėdami gauti daugiau informacijos, patikrinkite savo serverio žurnalus.',
        'error' => 'Kažkas ne taip :(',
        'sync_success' => '10 naudotojų, gautų iš LDAP serverio, pagal jūsų nustatymus:',
        'testing_authentication' => 'Tikrinamas LDAP autentifikavimas...',
        'authentication_success' => 'Naudotojas sėkmingai atpažintas naudojant LDAP!'
    ],
    'webhook' => [
        'sending' => ':app siunčiamas bandomasis pranešimas...',
        'success' => 'Jūsų :webhook_name integracija veikia!',
        'success_pt1' => 'Pavyko! Patikrink ',
        'success_pt2' => ' bandomojo pranešimo kanalą ir spustelėkite IŠSAUGOTI, kad išsaugotumėte nustatymus.',
        '500' => '500 serverio klaida.',
        'error' => 'Kažkas ne taip. :app atsakė: :error_message',
        'error_redirect' => 'KLAIDA: 301/302 :endpoint rodo peradresavimą. Saugumo sumetimais peradresavimų nevykdome. Naudokite tikrąjį galinį tašką.',
        'error_misc' => 'Kažkas ne taip. :( ',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ]
];
