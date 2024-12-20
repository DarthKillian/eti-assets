<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

<<<<<<< HEAD
    'accepted'             => ':attribute turi būti patvirtintas.',
    'active_url'           => ':attribute nėra tinkamas interentinis puslapis.',
    'after'                => ':attribute privalo būti data po :date.',
    'after_or_equal'       => 'Atributas turi būti datos, kuri yra arba lygi: data.',
    'alpha'                => ':attribute gali būti tik raidės.',
    'alpha_dash'           => ':attribute gali būti tik raidės, skaičiai ir brūkšneliai.',
    'alpha_num'            => ':attribute gali būti tik raidės ir skaičiai.',
    'array'                => 'Atributas turi būti masyvas.',
    'before'               => ':attribute turi būti data prieš :date.',
    'before_or_equal'      => 'Atributas turi būti data prieš arba lygus: data.',
    'between'              => [
        'numeric' => ':attribute privalo būti tarp :min - :max.',
        'file'    => ':attribute privalo būti tarp :min - :max kilobaitų.',
        'string'  => ':attribute privalo būti tarp :min - :max ženklų.',
        'array'   => 'Atributas turi būti tarp: min ir: max elementų.',
    ],
    'boolean'              => 'Laukas: attribute turi būti teisingas arba klaidingas.',
    'confirmed'            => ':attribute patvirtinimas nesutampa.',
    'date'                 => ':attribute nėra galiojanti data.',
    'date_format'          => ':attribute nesutampa su formatu :format.',
    'different'            => ':attribute ir :other turi būti skirtingi.',
    'digits'               => ':attribute privalo būti :digits skaičiai.',
    'digits_between'       => ':attribute privalo būti tarp :min ir:max skaičių.',
    'dimensions'           => 'Atributui yra netinkamų vaizdo matmenų.',
    'distinct'             => 'Atributo laukas turi dvigubą reikšmę.',
    'email'                => ':attribute formatas neteisingas.',
    'exists'               => 'Pasirinktas :attribute neteisingas.',
    'file'                 => 'Atributas turi būti failas.',
    'filled'               => 'Atributo laukas turi turėti reikšmę.',
    'image'                => ':attribute privalo būti paveikslėlis.',
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in'                   => 'Pasirinktas :attribute neteisingas.',
    'in_array'             => 'Atributo laukas neegzistuoja: kitame.',
    'integer'              => ':attribute turi būti sveikas skaičius.',
    'ip'                   => ':attribute privalo būti tinkamas IP adresas.',
    'ipv4'                 => 'Atributas turi būti galiojantis IPv4 adresas.',
    'ipv6'                 => 'Atributas turi būti galiojantis IPv6 adresas.',
    'is_unique_department' => 'The :attribute must be unique to this Company Location',
    'json'                 => 'Atributas turi būti galiojantis JSON eilutė.',
    'max'                  => [
        'numeric' => ':attribute negali būti didesnis nei :max.',
        'file'    => ':attribute negali būti didesnis nei :max kilobaitų.',
        'string'  => ':attribute negali būti didesnis nei :max ženklai.',
        'array'   => 'Atributas gali būti ne daugiau kaip: max elementai.',
    ],
    'mimes'                => ':attribute privalo būti failas, kurio formatas :values.',
    'mimetypes'            => 'Atributas turi būti failo tipas:: reikšmės.',
    'min'                  => [
        'numeric' => ':attribute privalo būti ne mažesnis nei :min.',
        'file'    => ':attribute turi būti bent :min kilobaitų.',
        'string'  => ':attribute privalo būti bent :min ženklai.',
        'array'   => 'Atributui turi būti bent: min elementai.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',

    'not_in'               => 'Pasirinktas :attribute neteisingas.',
    'numeric'              => ':attribute privalo būti skaičius.',
    'present'              => 'Atributo laukas turi būti.',
    'valid_regex'          => 'Tai nėra tinkamas regex. ',
    'regex'                => ':attribute formatas neteisingas.',
    'required'             => ':attribute laukelis privalomas.',
    'required_if'          => ':attribute laukelis yra privalomas kai :other yra :value.',
    'required_unless'      => 'Atributo laukas reikalingas, nebent: kitame yra: reikšmės.',
    'required_with'        => ':attribute laukelis privalomas kai :values yra nurodytas.',
    'required_with_all'    => 'Atributo laukas reikalingas tada, kai yra reikšmės.',
    'required_without'     => ':attribute laukelis privalomas kai :values yra nenurodytas.',
    'required_without_all' => 'Atributo laukas reikalingas, kai nėra nė vieno iš: vertės.',
    'same'                 => ':attribute ir :other privalo sutapti.',
    'size'                 => [
        'numeric' => ':attribute privalo būti :size.',
        'file'    => ':attribute privalo būti :size kilobaitų.',
        'string'  => ':attribute privalo būti :size ženklų.',
        'array'   => 'Atributas turi būti: dydžio elementai.',
    ],
    'string'               => 'Atributas turi būti eilutė.',
    'timezone'             => 'Atributas turi būti tinkama zona.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => ':attribute jau užimtas.',
    'uploaded'             => 'Nepavyko įkelti atributo.',
    'url'                  => ':attribute formatas neteisingas.',
    'unique_undeleted'     => ':attribute turi būti unikalus.',
    'non_circular'         => 'The :attribute must not create a circular reference.',
    'not_array'            => ':atribute harus array.',
    'disallow_same_pwd_as_user_fields' => 'Slaptažodis negali sutapti su vartotojo vardu.',
    'letters'              => 'Slaptažodis turi turėti bent vieną raidę.',
    'numbers'              => 'Slaptažodis turi turėti bent vieną skaitmenį.',
    'case_diff'            => 'Slaptažodis turi turėti didžiųjų ir mažųjų raidžių.',
    'symbols'              => 'Slaptažodis turi turėti simbolių.',
    'gte'                  => [
        'numeric'          => 'Value cannot be negative'
    ],
=======
    'accepted' => ':attribute laukas turi būti patvirtintas.',
    'accepted_if' => ':attribute laukas turi būti patvirtintas, kai :other yra :value.',
    'active_url' => ':attribute lauke turi būti galiojantis URL adresas.',
    'after' => ':attribute lauke turi būti data po :date.',
    'after_or_equal' => ':attribute lauke turi būti data lygi arba vėlesnė negu :date.',
    'alpha' => ':attribute lauke gali būti tik raidės.',
    'alpha_dash' => ':attribute lauke gali būti tik raidės, skaičiai ir brūkšneliai.',
    'alpha_num' => ':attribute lauke gali būti tik raidės ir skaičiai.',
    'array' => ':attribute lauke turi būti masyvas.',
    'ascii' => ':attribute lauke turi būti tik vieno baito raidės, skaičiai ir simboliai.',
    'before' => ':attribute lauke turi būti data iki :date.',
    'before_or_equal' => ':attribute lauke turi būti data lygi arba ankstesnė negu :date.',
    'between' => [
        'array' => ':attribute lauke turi būti nuo :min iki :max elementų.',
        'file' => ':attribute laukas turi būti nuo :min iki :max kilobaitų.',
        'numeric' => ':attribute laukas turi būti nuo :min iki :max.',
        'string' => ':attribute lauke turi būti nuo :min iki :max simbolių.',
    ],
    'boolean' => ':attribute lauke turi būti „Taip“ arba „Ne“.',
    'can' => ':attribute lauke yra neleistina reikšmė.',
    'confirmed' => ':attribute lauko patvirtinimas nesutampa.',
    'contains' => ':attribute lauke trūksta privalomos reikšmės.',
    'current_password' => 'Neteisingas slaptažodis.',
    'date' => ':attribute lauke turi būti teisinga data.',
    'date_equals' => ':attribute lauke turi būti data, lygi :date.',
    'date_format' => ':attribute laukas turi atitikti formatą :format.',
    'decimal' => ':attribute lauke turi būti :decimal skaičiai po kablelio.',
    'declined' => ':attribute laukas turi būti atmestas.',
    'declined_if' => ':attribute laukas turi būti atmestas, kai :other yra :value.',
    'different' => ':attribute laukas ir :other turi būti skirtingi.',
    'digits' => ':Attribute lauke turi būti :digits skaitmenys.',
    'digits_between' => ':attribute lauke turi būti nuo :min iki :max skaitmenų.',
    'dimensions' => ':attribute lauke esančio atvaizdo matmenys yra netinkami.',
    'distinct' => ':attribute lauke yra pasikartojanti reikšmė.',
    'doesnt_end_with' => ':attribute laukas negali baigtis vienu iš šių: :values.',
    'doesnt_start_with' => ':attribute laukas negali prasidėti vienu iš šių: :values.',
    'email' => ':attribute lauke turi būti teisingas el. pašto adresas.',
    'ends_with' => ':attribute laukas privalo baigtis vienu iš šių: :values.',
    'enum' => 'Pasirinktas :attribute yra neteisingas.',
    'exists' => 'Pasirinktas :attribute yra neteisingas.',
    'extensions' => ':attribute laukas privalo turėti vieną iš šių plėtinių: :values.',
    'file' => ':attribute lauke turi būti failas.',
    'filled' => ':attribute laukas turi turėti reikšmę.',
    'gt' => [
        'array' => ':attribute lauke turi būti daugiau nei :value elementai (-ų).',
        'file' => ':attribute laukas turi būti didesnis nei :max kilobaitai (-ų).',
        'numeric' => ':attribute laukas turi būti didesnis nei :value.',
        'string' => ':attribute lauke turi būti daugiau nei :value simboliai (-ių).',
    ],
    'gte' => [
        'array' => ':attribute lauke turi būti :value arba daugiau elementų.',
        'file' => ':attribute laukas turi būti didesnis arba lygus :value kilobaitams (-ų).',
        'numeric' => ':attribute laukas turi būti didesnis arba lygus :value.',
        'string' => ':attribute laukas turi būti didesnis arba lygus :value simboliams (-ų).',
    ],
    'hex_color' => ':attribute lauke turi būti teisinga šešioliktainė spalva.',
    'image' => ':attribute lauke turi būti atvaizdas.',
    'import_field_empty'    => ':fieldname reikšmė negali būti tuščia.',
    'in' => 'Pasirinktas :attribute neteisingas.',
    'in_array' => ':attribute laukas turi egzistuoti :other.',
    'integer' => ':attribute lauke turi būti sveikasis skaičius.',
    'ip' => ':attribute lauke turi būti teisingas IP adresas.',
    'ipv4' => ':attribute lauke turi būti teisingas IPv4 adresas.',
    'ipv6' => ':attribute lauke turi būti teisingas IPv6 adresas.',
    'json' => ':attribute lauke turi būti teisinga JSON eilutė.',
    'list' => ':attribute lauke turi būti sąrašas.',
    'lowercase' => ':attribute lauke turi būti tik mažosios raidės.',
    'lt' => [
        'array' => ':attribute lauke turi būti mažiau nei :value elementai (-ų).',
        'file' => ':attribute laukas turi būti mažesnis nei :max kilobaitai (-ų).',
        'numeric' => ':attribute laukas turi būti mažesnis nei :value.',
        'string' => ':attribute lauke turi būti mažiau nei :value simboliai (-ių).',
    ],
    'lte' => [
        'array' => ':attribute lauke turi būti mažiau nei :value elementai (-ų).',
        'file' => ':attribute laukas turi būti mažesnis arba lygus :value kilobaitams (-ų).',
        'numeric' => ':attribute laukas turi būti mažesnis arba lygus :value.',
        'string' => ':attribute laukas turi būti mažesnis arba lygus :value simboliams (-ų).',
    ],
    'mac_address' => ':attribute lauke turi būti teisingas MAC adresas.',
    'max' => [
        'array' => ':attribute lauke negali būti daugiau nei :max elementai (-ų).',
        'file' => ':attribute laukas negali būti didesnis nei :max kilobaitai (-ų).',
        'numeric' => ':attribute laukas negali būti didesnis nei :max.',
        'string' => ':attribute lauke negali būti daugiau nei :max simboliai (-ių).',
    ],
    'max_digits' => ':attribute lauke negali būti daugiau nei :max skaitmenys (-ų).',
    'mimes' => ':attribute lauke turi būti failas, kurio formatas: :values.',
    'mimetypes' => ':attribute lauke turi būti failas, kurio formatas: :values.',
    'min' => [
        'array' => ':attribute lauke turi būti bent :min elementai (-ų).',
        'file' => ':attribute laukas turi būti bent :min kilobaito (-ų).',
        'numeric' => ':attribute laukas turi būti ne mažesnis nei :min.',
        'string' => ':attribute lauke turi būti bent :min simboliai (-ių).',
    ],
    'min_digits' => ':attribute lauke turi būti bent :min skaitmenys.',
    'missing' => ':attribute lauko turi nebūti.',
    'missing_if' => ':attribute lauko turi nebūti, kai :other yra :value.',
    'missing_unless' => ':attribute lauko turi nebūti, nebent :other yra :value.',
    'missing_with' => ':attribute lauko turi nebūti, kai egzistuoja :values.',
    'missing_with_all' => ':attribute lauko turi nebūti, kai egzistuoja :values.',
    'multiple_of' => ':attribute laukas turi būti :value kartotinis.',
    'not_in' => 'Pasirinktas :attribute yra neteisingas.',
    'not_regex' => ':attribute lauko formatas neteisingas.',
    'numeric' => ':attribute lauke turi būti skaičius.',
    'password' => [
        'letters' => ':attribute lauke turi būti bent viena raidė.',
        'mixed' => ':attribute lauke turi būti bent viena didžioji ir viena mažoji raidė.',
        'numbers' => ':attribute lauke turi būti bent vienas skaičius.',
        'symbols' => ':attribute lauke turi būti bent vienas simbolis.',
        'uncompromised' => 'Pateiktas :attribute buvo rastas tarp nutekėjusių duomenų. Pasirinkite kitą :attribute.',
    ],
    'percent'       => 'Nusidėvėjimo minimumas turi būti nuo 0 iki 100, kai nusidėvėjimo tipas yra procentinis.',

    'present' => ':attribute laukas turi būti esamas.',
    'present_if' => ':attribute laukas turi egzistuoti, kai :other yra :value.',
    'present_unless' => ':attribute laukas turi egzistuoti, nebent :other yra :value.',
    'present_with' => ':attribute laukas turi egzistuoti, kai egzistuoja :values.',
    'present_with_all' => ':attribute laukas turi egzistuoti, kai egzistuoja :values.',
    'prohibited' => ':attribute laukas yra draudžiamas.',
    'prohibited_if' => ':attribute laukas yra draudžiamas, kai :other yra :value.',
    'prohibited_unless' => ':attribute laukas yra draudžiamas, nebent :other yra :values.',
    'prohibits' => ':attribute laukas uždraudžia :other egzistavimą.',
    'regex' => ':attribute lauko formatas neteisingas.',
    'required' => ':attribute laukas yra privalomas.',
    'required_array_keys' => ':attribute lauke turi būti įrašų, skirtų: :values.',
    'required_if' => ':attribute laukas yra privalomas, kai :other yra :value.',
    'required_if_accepted' => ':attribute laukas yra privalomas, kai :other yra priimta.',
    'required_if_declined' => ':attribute laukas yra privalomas, kai :other yra atmesta.',
    'required_unless' => ':attribute laukas yra būtinas, nebent :other yra :values.',
    'required_with' => ':attribute laukas yra privalomas, kai :values yra nurodyta.',
    'required_with_all' => ':attribute laukas yra privalomas, kai nurodyta :values.',
    'required_without' => ':attribute laukelis privalomas kai :values yra nenurodytas.',
    'required_without_all' => ':attribute laukas ir privalomas, kai nėra nei vienos iš :values.',
    'same' => ':attribute laukas turi sutapti su :other.',
    'size' => [
        'array' => ':attribute lauke turi būti :size elementai (-ų).',
        'file' => ':attribute laukas turi būti :size kilobaito (-ų).',
        'numeric' => ':attribute laukas turi būti :size.',
        'string' => ':attribute lauke turi būti :size simboliai (-ių).',
    ],
    'starts_with' => ':attribute laukas turi prasidėti vienu iš šių: :values.',
    'string'               => ':attribute turi būti eilutė.',
    'two_column_unique_undeleted' => ':attribute turi būti unikalus :table1 ir :table2. ',
    'unique_undeleted'     => ':attribute turi būti unikalus.',
    'non_circular'         => ':attribute neturi kurti žiedinės nuorodos.',
    'not_array'            => ':attribute negali būti masyvas.',
    'disallow_same_pwd_as_user_fields' => 'Slaptažodis negali sutapti su naudotojo vardu.',
    'letters'              => 'Slaptažodyje turi būti bent viena raidė.',
    'numbers'              => 'Slaptažodyje turi būti bent vienas skaičius.',
    'case_diff'            => 'Slaptažodyje turi būti naudojamos didžiosios ir mažosios raidės.',
    'symbols'              => 'Slaptažodyje turi būti simbolių.',
    'timezone' => ':attribute lauke turi būti teisinga laiko juosta.',
    'unique' => ':attribute jau užimtas.',
    'uploaded' => ':attribute įkelti nepavyko.',
    'uppercase' => ':attribute lauke turi būti tik didžiosios raidės.',
    'url' => ':attribute lauke turi būti galiojantis URL adresas.',
    'ulid' => ':attribute lauke turi būti galiojantis ULID identifikatorius.',
    'uuid' => ':attribute lauke turi būti galiojantis UUID identifikatorius.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
<<<<<<< HEAD
        'alpha_space' => 'Lauke: atributo lauke yra simbolis, kuris nėra leidžiamas.',
        'email_array'      => 'Vienas ar keli el. Pašto adresai yra netinkami.',
        'hashed_pass'      => 'Jūsų dabartinis slaptažodis yra neteisingas',
        'dumbpwd'          => 'Šis slaptažodis yra per dažnas.',
        'statuslabel_type' => 'Turite pasirinkti tinkamą statuso etiketės tipą',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format is reflects php Y-m-d, which non-PHP
        // people won't know how to format. 
        'purchase_date.date_format'     => ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'last_audit_date.date_format'   =>  'The :attribute must be a valid date in YYYY-MM-DD hh:mm:ss format',
=======
        'alpha_space' => 'Lauke :attribute yra simbolis, kurio negalima naudoti.',
        'email_array'      => 'Vienas ar keli el. pašto adresai yra neteisingi.',
        'hashed_pass'      => 'Jūsų dabartinis slaptažodis yra neteisingas',
        'dumbpwd'          => 'Šis slaptažodis yra per dažnas.',
        'statuslabel_type' => 'Turite pasirinkti tinkamą būsenos žymos tipą',
        'custom_field_not_found'          => 'Panašu, kad tokio lauko nėra. Patikrinkite savo pritaikytų laukų pavadinimus.',
        'custom_field_not_found_on_model' => 'Panašu, kad šis laukas egzistuoja, tačiau jo nėra šio turto modelio laukų rinkinyje.',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format reflects php Y-m-d, which non-PHP
        // people won't know how to format.
        'purchase_date.date_format'     => ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'last_audit_date.date_format'   =>  ':attribute turi būti galiojanti data YYYY-MM-DD hh:mm:ss formatu',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'expiration_date.date_format'   =>  ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'termination_date.date_format'  =>  ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'expected_checkin.date_format'  =>  ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'start_date.date_format'        =>  ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
        'end_date.date_format'          =>  ':attribute turi būti galiojanti data YYYY-MM-DD formatu',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute yra neteisingų parinkčių.',
        'radio_buttons'        => ':attribute yra neteisingas.',
        'invalid_value_in_field' => 'Šiame lauke yra neteisinga reikšmė',

        'ldap_username_field' => [
            'not_in' =>         'Tikėtina, kad <code>sAMAccountName</code> (didžiosios ir mažosios raidės) neveiks. Vietoj to turėtumėte naudoti <code>samaccountname</code> (mažąsias raides).'
        ],
        'ldap_auth_filter_query' => ['not_in' => '<code>uid=samaccountname</code> tikriausiai nėra tinkamas autentifikavimo filtras. Tikriausiai jums reikia <code>uid=</code> '],
        'ldap_filter' => ['regex' => 'Šios reikšmės tikriausiai nereikėtų rašyti skliausteliuose.'],

        ],
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

<<<<<<< HEAD
=======
    /*
    |--------------------------------------------------------------------------
    | Generic Validation Messages - we use these in the jquery validation where we don't have
    | access to the :attribute
    |--------------------------------------------------------------------------
    */

    'generic' => [
        'invalid_value_in_field' => 'Šiame lauke yra neteisinga reikšmė',
        'required' => 'Šis laukas yra privalomas',
        'email' => 'Įveskite galiojantį el. pašto adresą',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
