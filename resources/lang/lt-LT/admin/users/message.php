<?php

return array(

<<<<<<< HEAD
    'accepted'                  => 'Jūs sėkmingai priėmėte šią įrangą.',
    'declined'                  => 'Jūs sėkmingai atšaukėte šią įrangą.',
    'bulk_manager_warn'	        => 'Jūsų vartotojai buvo sėkmingai atnaujinti, tačiau jūsų valdytojo įrašas nebuvo išsaugotas, nes pasirinktas valdytojas taip pat buvo naudotojo sąraše, kurį reikia redaguoti, o vartotojai gali būti ne jų valdytojai. Prašome vėl pasirinkti naudotojus, išskyrus valdytoją.',
    'user_exists'               => 'Naudotojas jau yra!',
    'user_not_found'            => 'Naudotojo nėra.',
    'user_login_required'       => 'Prisijungimo laukelis privalomas',
    'user_has_no_assets_assigned' => 'No assets currently assigned to user.',
    'user_password_required'    => 'Slaptažodis būtinas.',
    'insufficient_permissions'  => 'Nepakankamos teisės.',
    'user_deleted_warning'      => 'Šis naudotojas ištrintas. Jūs turėsite atkurti naudotoją norėdami redaguoto ar priskirti jam naują įrangą.',
    'ldap_not_configured'        => 'LDAP integracija nebuvo sukonfikuruota šiam diegimui.',
    'password_resets_sent'      => 'The selected users who are activated and have a valid email addresses have been sent a password reset link.',
    'password_reset_sent'       => 'A password reset link has been sent to :email!',
    'user_has_no_email'         => 'This user does not have an email address in their profile.',
    'log_record_not_found'        => 'Atitinkamas log įrašas šiam naudotojui nerastas.',


    'success' => array(
        'create'    => 'Naudotojas sėkmingai sukurtas.',
        'update'    => 'Naudotojas sėkmingai atnaujintas.',
        'update_bulk'    => 'Vartotojai buvo sėkmingai atnaujinti!',
        'delete'    => 'Naudotojas sėkmingai ištrintas.',
        'ban'       => 'Naudotojas sėkmingai užblokuotas.',
        'unban'     => 'Naudotojas sėkmingai atblokuotas.',
        'suspend'   => 'Naudotojas sėkmingai užšaldytas.',
        'unsuspend' => 'Naudotojas sėkmingai atšaldytas.',
        'restored'  => 'Naudotojas sėkmingai atkurtas.',
        'import'    => 'Naudotojai sėkmingai įkelti.',
    ),

    'error' => array(
        'create' => 'Nepavyko sukurti naudotojo. Prašome bandykite dar kartą.',
        'update' => 'Nepavyko atnaujinti naudotojo. Prašome bandykite dar kartą.',
        'delete' => 'Nepavyko ištrinti naudotojo. Prašome bandykite dar kartą.',
        'delete_has_assets' => 'Šis vartotojas turi priskirtus elementus, kurių negalima ištrinti.',
        'unsuspend' => 'Nepavyko atšaldyti naudotojo. Prašome bandykite dar kartą.',
        'import'    => 'Nepavyko įkelti naudotojų. Prašome bandykite dar kartą.',
        'asset_already_accepted' => 'ši įranga jau buvo priimta.',
        'accept_or_decline' => 'Jūs turite arba priimti arba atmesti šią įrangą.',
        'incorrect_user_accepted' => 'Įranga kurią bandote priimti, nebuvo priskirta Jums.',
        'ldap_could_not_connect' => 'Negali prisijungti prie LDAP serverio. Prašome patikrinkite savo LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>Klaida iš LDAP Serverio:',
        'ldap_could_not_bind' => 'Negali nustatyti vartotojo prisijungiant prie LDAP serverio. Prašome patikrinkite savo LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>Klaida iš LDAP Serverio: ',
        'ldap_could_not_search' => 'Negali rasti LDAP serverio. Prašome patikrinkite savo LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>Klaida iš LDAP Serverio:',
        'ldap_could_not_get_entries' => 'Negali gauti prieigos prie LDAP serverio. Prašome patikrinkite savo LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>Klaida iš LDAP Serverio:',
        'password_ldap' => 'Šios paskyros slaptažodį tvarko LDAP / Active Directory. Prašome susisiekti su savo IT departamentu, kad pakeistumėte slaptažodį.',
    ),

    'deletefile' => array(
        'error'   => 'Failas neištrintas. Prašome bandykite dar kartą.',
        'success' => 'Failas sėkmingai ištrintas.',
    ),

    'upload' => array(
        'error'   => 'Failas (-ai) neįkelti. Prašome bandykite dar kartą.',
        'success' => 'Failas (-ai) sėkmingai įkelti.',
        'nofiles' => 'Įkėlimui jūs nepasirinkote jokių failų',
        'invalidfiles' => 'Vienas ar keli failai yra per dideli arba neleidžiamas šis failų formatas. Primename, kad leidžiami sekantys formatai png, gif, jpg, doc, docx, pdf, txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'This user has no email set.',
        'success' => 'The user has been notified about their current inventory.'
=======
    'accepted'                  => 'Jūs sėkmingai priėmėte šį turtą.',
    'declined'                  => 'Jūs sėkmingai atsisakėte priimti šį turtą.',
    'bulk_manager_warn'	        => 'Jūsų naudotojai buvo sėkmingai atnaujinti, tačiau tiesioginio vadovo informacija nebuvo išsaugota, nes jūsų nurodytas tiesioginis vadovas taip pat buvo redaguojamų naudotojų sąraše. Naudotojas negali būti savo paties tiesioginiu vadovu, todėl dar kartą pasirinkite naudotojus, neįtraukdami tiesioginio vadovo.',
    'user_exists'               => 'Toks naudotojas jau yra!',
    'user_not_found'            => 'Tokio naudotojo nėra arba jūs neturite teisės jo peržiūrėti.',
    'user_login_required'       => 'Prisijungimo laukas yra privalomas',
    'user_has_no_assets_assigned' => 'Naudotojui neišduotas joks turtas.',
    'user_password_required'    => 'Slaptažodis yra privalomas.',
    'insufficient_permissions'  => 'Nepakanka teisių.',
    'user_deleted_warning'      => 'Šis naudotojas buvo panaikintas. Turėsite atkurti naudotoją, jeigu norėsite jį redaguoti ar priskirti jam naują turtą.',
    'ldap_not_configured'        => 'LDAP integracija nebuvo sukonfigūruota šiam diegimui.',
    'password_resets_sent'      => 'Pasirinktiems naudotojams, kurie yra aktyvuoti ir turi galiojančius el. pašto adresus, buvo išsiųsta slaptažodžio nustatymo iš naujo nuoroda.',
    'password_reset_sent'       => 'Slaptažodžio nustatymo iš naujo nuoroda buvo išsiųsta į :email!',
    'user_has_no_email'         => 'Šis naudotojas savo profilyje neturi el. pašto adreso.',
    'log_record_not_found'        => 'Su šiuo naudotoju susijusių žurnalo įrašų nerasta.',


    'success' => array(
        'create'    => 'Naudotojas sukurtas sėkmingai.',
        'update'    => 'Naudotojas atnaujintas sėkmingai.',
        'update_bulk'    => 'Naudotojai atnaujinti sėkmingai!',
        'delete'    => 'Naudotojas panaikintas sėkmingai.',
        'ban'       => 'Naudotojas užblokuotas sėkmingai.',
        'unban'     => 'Naudotojas atblokuotas sėkmingai.',
        'suspend'   => 'Naudotojas išjungtas sėkmingai.',
        'unsuspend' => 'Naudotojas įjungtas sėkmingai.',
        'restored'  => 'Naudotojas atkurtas sėkmingai.',
        'import'    => 'Naudotojai importuoti sėkmingai.',
    ),

    'error' => array(
        'create' => 'Bandant sukurti naudotoją įvyko klaida. Bandykite dar kartą.',
        'update' => 'Bandant atnaujinti naudotoją įvyko klaida. Bandykite dar kartą.',
        'delete' => 'Bandant panaikinti naudotoją įvyko klaida. Bandykite dar kartą.',
        'delete_has_assets' => 'Šis naudotojas turi jam išduotų daiktų, todėl jo panaikinti negalima.',
        'delete_has_assets_var' => 'Šiam naudotojui yra išduotas turtas. Pirmiausia paimkite jį.|Šiam naudotojui yra išduoti :count vienetai (-ų) turto. Pirmiausia paimkite jų turtą.',
        'delete_has_licenses_var' => 'Šiam naudotojui yra priskirta licencija. Pirmiausia paimkite ją.|Šiam naudotojui yra priskirtos :count licencijos (-ų). Pirmiausia paimkite jas.',
        'delete_has_accessories_var' => 'Šiam naudotojui yra išduotas priedas. Pirmiausia paimkite jį.|Šiam naudotojui yra išduoti :count priedai (-ų). Pirmiausia paimkite juos.',
        'delete_has_locations_var' => 'Šis naudotojas vis dar atsakingas už vieną vietą. Pirmiausia parinkite kitą valdytoją.|Šis naudotojas vis dar atsakingas už :count vietas (-ų). Pirmiausia parinkite kitą valdytoją.',
        'delete_has_users_var' => 'Šis naudotojas vis dar turi pavaldinį. Pirmiausia parinkite kitą tiesioginį vadovą šiam pavaldiniui.|Šis naudotojas vis dar turi :count pavaldinius (-ių). Pirmiausia parinkite kitą tiesioginį vadovą šiems naudotojams.',
        'unsuspend' => 'Bandant įjungti naudotoją įvyko klaida. Bandykite dar kartą.',
        'import'    => 'Bandant importuoti naudotojus įvyko klaida. Bandykite dar kartą.',
        'asset_already_accepted' => 'Šis turtas jau buvo priimtas.',
        'accept_or_decline' => 'Turite arba priimti šį turtą, arba jo atsisakyti.',
        'cannot_delete_yourself' => 'Jaustumėmės labai blogai, jei panaikintumėte save, dar kartą apsvarstykite.',
        'incorrect_user_accepted' => 'Turtas kurį bandote priimti, nebuvo jums išduotas.',
        'ldap_could_not_connect' => 'Nepavyko prisijungti prie LDAP serverio. Patikrinkite LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>LDAP serverio klaida:',
        'ldap_could_not_bind' => 'Nepavyko susieti su LDAP serveriu. Patikrinkite LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>LDAP serverio klaida: ',
        'ldap_could_not_search' => 'Nepavyko paieška LDAP serveryje. Patikrinkite LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>LDAP serverio klaida:',
        'ldap_could_not_get_entries' => 'Nepavyko gauti įrašų iš LDAP serverio. Patikrinkite LDAP serverio konfigūraciją LDAP konfigūracijos faile. <br>LDAP serverio klaida:',
        'password_ldap' => 'Šios paskyros slaptažodį tvarko LDAP / Active Directory. Prašome susisiekti su savo IT skyriumi, kad pakeistumėte slaptažodį. ',
        'multi_company_items_assigned' => 'Šiam naudotojui yra priskirti daiktai, priklausantys kitai įmonei. Paimkite juos arba pakeiskite jų įmonę.'
    ),

    'deletefile' => array(
        'error'   => 'Failas nebuvo panaikintas. Bandykite dar kartą.',
        'success' => 'Failas panaikintas sėkmingai.',
    ),

    'upload' => array(
        'error'   => 'Failo (-ų) įkelti nepavyko. Bandykite dar kartą.',
        'success' => 'Failas (-ai) įkelti sėkmingai.',
        'nofiles' => 'Nepasirinkote jokių failų įkėlimui',
        'invalidfiles' => 'Vienas ar keli failai yra per dideli arba neleistinas šis failų formatas. Leidžiami failų tipai yra: png, gif, jpg, doc, docx, pdf ir txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'Šis naudotojas neturi el. pašto adreso.',
        'success' => 'Naudotojui buvo pranešta apie jo turimą inventorių.'
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    )
);