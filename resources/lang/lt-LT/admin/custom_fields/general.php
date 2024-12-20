<?php

return [
    'custom_fields'		        => 'Pritaikyti laukai',
<<<<<<< HEAD
    'manage'                    => 'Manage',
    'field'		                => 'Laukas',
    'about_fieldsets_title'		=> 'Apie laukų grupes',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Šifruoti šio lauko vertę duomenų bazėje',
    'encrypt_field_help'      => 'ĮSPĖJIMAS: lauko šifravimas daro jį nepastebimos.',
    'encrypted'      	        => 'Šifruotas',
    'fieldset'      	        => 'Laukų grupė',
    'qty_fields'      	      => 'Laukų kiekis',
    'fieldsets'      	        => 'Laukų grupės',
    'fieldset_name'           => 'Laukų grupės pavadinimas',
    'field_name'              => 'Lauko pavadinimas',
    'field_values'            => 'Lauko vertės',
    'field_values_help'       => 'Pridėti pasirinktinas parinktis, po vieną eilutėje. Tuščios eilutės, išskyrus pirmąją eilutę, bus ignoruojamos.',
    'field_element'           => 'Laukelio elementas',
    'field_element_short'     => 'Elementas',
    'field_format'            => 'Formatas',
    'field_custom_format'     => 'Pritaikomas formatas',
    'field_custom_format_help'     => 'Šis laukelis leidžia Jums naudoti REGEX validaciją. Tai turėtų prasidėti "regax:" - pavyzdžiui norint validuoti pasirinkto laukelio reikšmę IMEI (15 skaičių), privalote naudoti <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Privalomas',
    'req'   		              => 'Privaloma.',
    'used_by_models'   		    => 'Naudojama modelių',
    'order'   		            => 'Užsakymas',
    'create_fieldset'         => 'Nauja laukų grupė',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Naujas pritaikomas laukelis',
    'create_field_title' => 'Sukurti naują nestandartinį laukelį',
    'value_encrypted'      	        => 'Šio lauko vertė yra užkoduota duomenų bazėje. Tik admin vartotojai galės peržiūrėti iššifruotą vertę',
    'show_in_email'     => 'Įterptos šio laukelio išdavimo reikšmės bus siunčiamos vartotojams? Užšifruoti laukai negali būti įterpti į el. laišką',
    'show_in_email_short'     => 'Include in emails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'Apie nestandartinius laukelius',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Privaloma - paspauskite, kad būtų neprivaloma',
    'make_required' => 'Neprivaloma - paspauskite, kad būtų privaloma',
    'reorder' => 'Užsakyti iš naujo',
    'db_field' => 'DB laukas',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'Ši reikšmė tui būti unikali visai įrangai',
    'unique' => 'Unikalu',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Matoma naudotojui',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Rodyti sąraše',
    'show_in_requestable_list_short' => 'Rodyti prašomos įrangos sąraše',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'Šis laukelis užšifruotas, todėl kai kurios peržiūros galimybės nepasiekiamos.',
=======
    'manage'                    => 'Tvarkyti',
    'field'		                => 'Laukas',
    'about_fieldsets_title'		=> 'Apie laukų grupes',
    'about_fieldsets_text'		=> 'Laukų rinkiniai leidžia kurti pritaikytų laukų grupes, kurios dažnai naudojamos konkretiems turto modelių tipams.',
    'custom_format'             => 'Tinkintas Regex formatas...',
    'encrypt_field'      	        => 'Šifruoti šio lauko reikšmę duomenų bazėje',
    'encrypt_field_help'      => 'ĮSPĖJIMAS: Užšifravus lauką, jo nebebus galima ieškoti.',
    'encrypted'      	        => 'Šifruotas',
    'fieldset'      	        => 'Laukų rinkinys',
    'qty_fields'      	      => 'Laukų kiekis',
    'fieldsets'      	        => 'Laukų rinkiniai',
    'fieldset_name'           => 'Laukų rinkinio pavadinimas',
    'field_name'              => 'Lauko pavadinimas',
    'field_values'            => 'Lauko reikšmės',
    'field_values_help'       => 'Pridėkite pasirenkamas parinktis, po vieną eilutėje. Tuščios eilutės, išskyrus pirmą eilutę, bus ignoruojamos.',
    'field_element'           => 'Formos elementas',
    'field_element_short'     => 'Elementas',
    'field_format'            => 'Formatas',
    'field_custom_format'     => 'Tinkintas Regex formatas',
    'field_custom_format_help'     => 'Šis laukas jums leidžia patikrai naudoti Regex išraiškas. Jos turėtų prasidėti „regex:“,- pavyzdžiui, norėdami patvirtinti, kad pritaikytame lauke nurodyta teisinga IMEI reikšmė (15 skaitmenų), turėtumėte naudoti <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Privalomas',
    'req'   		              => 'Privaloma',
    'used_by_models'   		    => 'Naudojamas modeliuose',
    'order'   		            => 'Rikiavimas',
    'create_fieldset'         => 'Naujas laukų rinkinys',
    'update_fieldset'         => 'Atnaujinti laukų rinkinį',
    'fieldset_does_not_exist'   => 'Laukų rinkinio :id nėra',
    'fieldset_updated'         => 'Laukų rinkinys atnaujintas',
    'create_fieldset_title' => 'Sukurkite naują laukų rinkinį',
    'create_field'            => 'Naujas pritaikytas laukas',
    'create_field_title' => 'Sukurti naują pritaikytą lauką',
    'value_encrypted'      	        => 'Šio lauko reikšmė yra užšifruota duomenų bazėje. Tik administratoriai gali matyti iššifruotą reikšmę',
    'show_in_email'     => 'Įtraukti šio lauko reikšmę į išdavimo el. laiškus, siunčiamus naudotojams? Šifruotų laukų į el. laiškus įtraukti negalima',
    'show_in_email_short'     => 'Įtraukti į el. laiškus.',
    'help_text' => 'Pagalbos tekstas',
    'help_text_description' => 'Tai yra nebūtinas tekstas, kuris redaguojant turtą, bus rodomas po formos elementais, kad suteiktų kontekstą tam laukui.',
    'about_custom_fields_title' => 'Apie pritaikytus laukus',
    'about_custom_fields_text' => 'Pritaikyti laukai leidžia turtui pridėti pasirinktinių atributų.',
    'add_field_to_fieldset' => 'Įtraukti lauką į rinkinį',
    'make_optional' => 'Privaloma – spustelėkite, kad būtų neprivaloma',
    'make_required' => 'Neprivaloma – spustelėkite, kad būtų privaloma',
    'reorder' => 'Perrikiuoti',
    'db_field' => 'DB laukas',
    'db_convert_warning' => 'ĮSPĖJIMAS. Šis laukas pritaikytų laukų lentelėje yra kaip <code>:db_column</code>, bet turėtų būti <code>:expected</code>.',
    'is_unique' => 'Ši reikšmė turi būti unikali visam turtui',
    'unique' => 'Unikalu',
    'display_in_user_view' => 'Leisti turtą gavusiam naudotojui peržiūrėti šias reikšmes puslapyje „Peržiūrėti gautą turtą“',
    'display_in_user_view_table' => 'Matoma naudotojui',
    'auto_add_to_fieldsets' => 'Automatiškai pridėti prie kiekvieno naujo laukų rinkinio',
    'add_to_preexisting_fieldsets' => 'Pridėti prie esamų laukų rinkinių',
    'show_in_listview' => 'Standartiškai rodyti sąrašo rodiniuose. Įgalioti naudotojai vis tiek galės pasirinkti, rodyti ar slėpti stulpelį, naudodami parinkiklį',
    'show_in_listview_short' => 'Rodyti sąrašuose',
    'show_in_requestable_list_short' => 'Rodyti užsakomo turto sąraše',
    'show_in_requestable_list' => 'Rodyti reikšmę užsakomo turto sąraše. Šifruoti laukai nebus rodomi',
    'encrypted_options' => 'Šis laukas yra užšifruotas, todėl kai kurios rodymo parinktys nebus pasiekiamos.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

];
