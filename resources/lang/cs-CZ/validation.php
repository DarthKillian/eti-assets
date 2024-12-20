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
    'accepted'             => 'Je potřeba potvrdit :attribute.',
    'active_url'           => ':attribute není platnou URL.',
    'after'                => ':attribute nemůže být dříve než :date.',
    'after_or_equal'       => 'Atribut musí mít datum následující nebo rovné: datum.',
    'alpha'                => ':attribute může obsahovat pouze písmena.',
    'alpha_dash'           => ':attribute může obsahovat pouze písmena, čísla, a pomlčky.',
    'alpha_num'            => ':attribute může obsahovat pouze písmena čísla.',
    'array'                => 'Atribut musí být atribut.',
    'before'               => ':attribute nemůže být později než :date.',
    'before_or_equal'      => 'Atribut: musí mít datum před datem nebo se rovnat: datum.',
    'between'              => [
        'numeric' => ':attribute musí být mezi :min - :max.',
        'file'    => ':attribute musí být mezi :min - :max kilobajtů.',
        'string'  => ':attribute smí obsahovat pouze :min - :max znaků.',
        'array'   => 'Atribut: musí obsahovat položky: min a max.',
    ],
    'boolean'              => ':attribute musí být true nebo false.',
    'confirmed'            => 'Potvrzení :attribute se neshoduje.',
    'date'                 => ':attribute není platným datem.',
    'date_format'          => 'Atribut  :attribute nesouhlasí s formátem :format.',
    'different'            => ':attribute a  :other se musí lišit.',
    'digits'               => ':attribute musí být :digits číslo.',
    'digits_between'       => ':attribute musí být mezi hodnotami :min a :max.',
    'dimensions'           => 'Atribut: má neplatné kóty obrázku.',
    'distinct'             => 'Pole atributu: atribut má duplicitní hodnotu.',
    'email'                => 'Formát :attribute je neplatný.',
    'exists'               => 'Zvolený :attribute je neplatný.',
    'file'                 => 'Atribut: musí být soubor.',
    'filled'               => 'Pole atributu: musí mít hodnotu.',
    'image'                => ':attribute musí být obrázek.',
    'import_field_empty'    => 'Hodnota pro :fieldname nemůže být null.',
    'in'                   => 'Zvolený :attribute je neplatný.',
    'in_array'             => 'Pole atributu neexistuje v: jiné.',
    'integer'              => ':attribute musí být celočíselný.',
    'ip'                   => ':attribute musí být platná IP adresa.',
    'ipv4'                 => 'Atribut: musí mít platnou adresu IPv4.',
    'ipv6'                 => 'Atribut: musí být platná adresa IPv6.',
    'is_unique_department' => ':attribute musí být unikátní pro tuto lokalitu společnosti',
    'json'                 => 'Atribut: musí být platný řetězec JSON.',
    'max'                  => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file'    => ':attribute nesmí být větší než :max kilobajtů.',
        'string'  => ':attribute nesmí být větší než :max znaků.',
        'array'   => 'Atribut: Atribut nesmí mít více než: max položky.',
    ],
    'mimes'                => ':attribute musí být soubor typu: :values.',
    'mimetypes'            => 'Atribut: musí být soubor typu:: values.',
    'min'                  => [
        'numeric' => ':attribute musí být minimálne :min.',
        'file'    => ':attribute musí být minimálně :min kilobajtů.',
        'string'  => ':attribute musí mít minimálně :min znaků.',
        'array'   => 'Atribut musí mít alespoň: min položky.',
    ],
    'starts_with'          => ':attribute musí končit jednou z následujících hodnot: :values.',
    'ends_with'            => ':attribute musí končit jedním z těchto znaků: :values.',

    'not_in'               => 'Zvolený :attribute je neplatný.',
    'numeric'              => ':attribute musí být číslo.',
    'present'              => 'Pole atributu musí být přítomno.',
    'valid_regex'          => 'Toto není platný regulární výraz. ',
    'regex'                => 'Formát :attribute je neplatný.',
    'required'             => 'Pole :attribute je požadováno.',
    'required_if'          => 'Položka :attribute je vyžadována, když :other je :value.',
    'required_unless'      => 'Pole atributu: je povinné, pokud: jiný není v: hodnoty.',
    'required_with'        => 'Hodnota :attribute je vyžadována, když je přítomno :values.',
    'required_with_all'    => 'Pole atributu: je požadováno, když: jsou přítomny hodnoty.',
    'required_without'     => 'Hodnota :attribute je vyžadována, když není přítomno :values.',
    'required_without_all' => 'Pole atributu: je vyžadováno, pokud nejsou žádné hodnoty: existují.',
    'same'                 => ':attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':attribute musí být :size.',
        'file'    => ':attribute musí být :size kilobajtů.',
        'string'  => ':attribute musí mít :size znaků.',
        'array'   => 'Atribut: musí obsahovat: položky velikosti.',
    ],
    'string'               => 'Atribut: musí být řetězec.',
    'timezone'             => 'Atribut: musí být platnou zónou.',
    'two_column_unique_undeleted' => ':attribute musí být unikátní napříč :table1 a :table2. ',
    'unique'               => ':attribute byl již vybrán.',
    'uploaded'             => 'Atribut: se nepodařilo nahrát.',
    'url'                  => 'Formát :attribute je neplatný.',
    'unique_undeleted'     => 'Je třeba, aby se :attribute neopakoval.',
    'non_circular'         => ':attribute nesmí vytvořit kruhový odkaz.',
    'not_array'            => ':atribute harus array.',
=======
    'accepted' => 'Je potřeba potvrdit :attribute.',
    'accepted_if' => 'Položka :attribute je vyžadována, když :other je :value.',
    'active_url' => ':attribute není platnou URL.',
    'after' => ':attribute nemůže být později než :date.',
    'after_or_equal' => 'Atribut musí mít datum následující nebo rovné :date.',
    'alpha' => ':attribute může obsahovat pouze písmena.',
    'alpha_dash' => ':attribute může obsahovat pouze písmena, čísla, a pomlčky.',
    'alpha_num' => ':attribute může obsahovat pouze písmena a čísla.',
    'array' => 'The :attribute field must be an array.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute field must be a date before :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => ':attribute musí být mezi hodnotami :min a :max.',
        'file' => ':attribute musí být větší než :min a menší než :max kilobytů.',
        'numeric' => 'The :attribute field must be between :min and :max.',
        'string' => 'The :attribute field must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => 'The :attribute field confirmation does not match.',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute field must be a valid date.',
    'date_equals' => 'The :attribute field must be a date equal to :date.',
    'date_format' => 'The :attribute field must match the format :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'The :attribute field must be declined.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',
    'different' => 'The :attribute field and :other must be different.',
    'digits' => 'The :attribute field must be :digits digits.',
    'digits_between' => 'The :attribute field must be between :min and :max digits.',
    'dimensions' => 'The :attribute field has invalid image dimensions.',
    'distinct' => 'Pole atributu: atribut má duplicitní hodnotu.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Zvolený :attribute je neplatný.',
    'exists' => 'Zvolený :attribute je neplatný.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Pole atributu: musí mít hodnotu.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'import_field_empty'    => 'Hodnota pro :fieldname nemůže být null.',
    'in' => 'Zvolený :attribute je neplatný.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute field must not have more than :max items.',
        'file' => 'The :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute field must not be greater than :max.',
        'string' => 'The :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'Zvolený :attribute je neplatný.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'percent'       => 'The depreciation minimum must be between 0 and 100 when depreciation type is percentage.',

    'present' => 'Pole atributu musí být přítomno.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Pole :attribute je požadováno.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Položka :attribute je vyžadována, když :other je :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Pole atributu: je povinné, pokud: jiný není v: hodnoty.',
    'required_with' => 'Hodnota :attribute je vyžadována, když je přítomno :values.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Hodnota :attribute je vyžadována, když není přítomno :values.',
    'required_without_all' => 'Pole atributu: je vyžadováno, pokud nejsou žádné hodnoty: existují.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Atribut: musí být řetězec.',
    'two_column_unique_undeleted' => ':attribute musí být unikátní napříč :table1 a :table2. ',
    'unique_undeleted'     => 'Je třeba, aby se :attribute neopakoval.',
    'non_circular'         => ':attribute nesmí vytvořit kruhový odkaz.',
    'not_array'            => ':attribute nemůže být pole.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'Heslo nemůže být stejné jako uživatelské jméno.',
    'letters'              => 'Heslo musí obsahovat nejméně jedno písmeno.',
    'numbers'              => 'Heslo musí obsahovat alespoň jednu číslici.',
    'case_diff'            => 'Heslo musí použít smíšené znaky.',
    'symbols'              => 'Heslo musí obsahovat symboly.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Hodnota nemůže být záporná'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => ':attribute byl již vybrán.',
    'uploaded' => 'Atribut: se nepodařilo nahrát.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => ':attribute není platnou URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',
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
        'alpha_space' => 'Pole atributu: atribut obsahuje znak, který není povolen.',
        'email_array'      => 'Jedna nebo více e-mailových adres je neplatná.',
        'hashed_pass'      => 'Vaše současné heslo je nesprávné',
        'dumbpwd'          => 'Toto heslo je příliš běžné.',
        'statuslabel_type' => 'Musíte vybrat platný typ štítku stavu',
<<<<<<< HEAD

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format is reflects php Y-m-d, which non-PHP
        // people won't know how to format. 
=======
        'custom_field_not_found'          => 'This field does not seem to exist, please double check your custom field names.',
        'custom_field_not_found_on_model' => 'This field seems to exist, but is not available on this Asset Model\'s fieldset.',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format reflects php Y-m-d, which non-PHP
        // people won't know how to format.
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'purchase_date.date_format'     => ':attribute musí být platné datum ve formátu RRRR-MM-DD',
        'last_audit_date.date_format'   =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD hh:mm:ss',
        'expiration_date.date_format'   =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD',
        'termination_date.date_format'  =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD',
        'expected_checkin.date_format'  =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD',
        'start_date.date_format'        =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD',
        'end_date.date_format'          =>  ':attribute musí být platné datum ve formátu RRRR-MM-DD',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute obsahuje neplatné možnosti.',
        'radio_buttons'        => ':attribute je neplatný.',
        'invalid_value_in_field' => 'Neplatná hodnota zahrnutá v tomto poli',

        'ldap_username_field' => [
            'not_in' =>         '<code>sAMAccountName</code> (mixed case) will likely not work. You should use <code>samaccountname</code> (lowercase) instead.'
        ],
        'ldap_auth_filter_query' => ['not_in' => '<code>uid=samaccountname</code> is probably not a valid auth filter. You probably want <code>uid=</code> '],
        'ldap_filter' => ['regex' => 'This value should probably not be wrapped in parentheses.'],

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
        'invalid_value_in_field' => 'Neplatná hodnota zahrnutá v tomto poli',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
