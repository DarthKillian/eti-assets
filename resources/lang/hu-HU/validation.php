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
    'accepted'             => 'A :attribute el kell fogadni.',
    'active_url'           => 'A :attribute nem valós URL.',
    'after'                => 'Az :attribute ezután a dátum után kell, hogy legyen :date.',
    'after_or_equal'       => 'A: attribútumnak dátumnak kell lennie, vagy egyenlőnek kell lennie: dátummal.',
    'alpha'                => 'A :attribute csak betűket tartalmazhat.',
    'alpha_dash'           => 'A :attribute csak betűket, számokat és perjelet tartalmazhat.',
    'alpha_num'            => 'A :attribute csak betűket, számokat tartalmazhat.',
    'array'                => 'A: attribútumnak tömbnek kell lennie.',
    'before'               => 'A :attribute csak :date elötti dátum lehet.',
    'before_or_equal'      => 'A: attribútumnak dátumnak kell lennie, vagy egyenlőnek kell lennie: dátummal.',
    'between'              => [
        'numeric' => 'A :attribute az érték között kell lennie :min -:max.',
        'file'    => 'A :attribute :min - :max kilobájt között kell lenni.',
        'string'  => 'A :attribute :min - :max karakter között kell lenni.',
        'array'   => 'A: attribútumnak rendelkeznie kell: min és max elem között.',
    ],
    'boolean'              => 'Az attribútumnak igaznak, vagy hamisnak kell lennie (true/false).',
    'confirmed'            => 'A :attribute ellenörzés nem egyezik.',
    'date'                 => 'A :attribute nem egy valós dátum.',
    'date_format'          => 'A :attribute nem egyezik a formátummal :format.',
    'different'            => 'A :attribute és :other különböznie kell.',
    'digits'               => 'A :attribute :digits számjegynek kell lenni.',
    'digits_between'       => 'A :attribute :min - :max számjegy között kell lenni.',
    'dimensions'           => 'A: attribútum érvénytelen képmérettel rendelkezik.',
    'distinct'             => 'A: attribútum mező duplikált értéket tartalmaz.',
    'email'                => 'Az :attribute formátuma érvénytelen.',
    'exists'               => 'A kiválasztott :attribute étvénytelen.',
    'file'                 => 'A: attribútumnak fájlnak kell lennie.',
    'filled'               => 'A: attribútum mezőnek értéket kell tartalmaznia.',
    'image'                => 'A :attribute képnek kell lenni.',
    'import_field_empty'    => 'A :fieldname mező értéke nem lehet üres.',
    'in'                   => 'A kiválasztott :attribute étvénytelen.',
    'in_array'             => 'A: attribútum mező nem létezik: más.',
    'integer'              => 'A :attribute számnak kell lennie.',
    'ip'                   => 'A :attribute érvényes IP címnek kell lenni.',
    'ipv4'                 => 'A: attribútumnak érvényes IPv4-címnek kell lennie.',
    'ipv6'                 => 'A: attribútumnak érvényes IPv6-címnek kell lennie.',
    'is_unique_department' => ':attribute egyedi kell, hogy legyen ehhez a helyhez',
    'json'                 => 'A: attribútumnak érvényes JSON-karakterláncnak kell lennie.',
    'max'                  => [
        'numeric' => 'A :attribute nem lehet nagyobb, mint :max.',
        'file'    => 'A :attribute nem lehet nagyobb, mint :max kilobájt.',
        'string'  => 'A :attribute nem lehet nagyobb, mint :max karakter.',
        'array'   => 'A: attribútumnak nem lehet több: max eleme.',
    ],
    'mimes'                => 'A :attribute ilyen fájl típusnak kell lennie: :values.',
    'mimetypes'            => 'A: attribútumnak a következő típusú fájlnak kell lennie:: values.',
    'min'                  => [
        'numeric' => 'A :attribute legalább :min kell lenni.',
        'file'    => 'A :attribute legalább :min kilobájt kell lenni.',
        'string'  => 'A :attribute legalább :min karakter kell lenni.',
        'array'   => 'A: attribútumnak rendelkeznie kell legalább: min elemekkel.',
    ],
    'starts_with'          => 'A(z) :attribute a következővel kell kezdődnie: :values.',
    'ends_with'            => 'A(z) :attribute a következővel kell végződjön: :values.',

    'not_in'               => 'A kiválasztott :attribute étvénytelen.',
    'numeric'              => 'A :attribute csak szám lehet.',
    'present'              => 'A: attribútum mezőnek jelen kell lennie.',
    'valid_regex'          => 'Ez nem érvényes regex kifejezés. ',
    'regex'                => 'Az :attribute formátuma érvénytelen.',
    'required'             => 'A :attribute mező kötelező.',
    'required_if'          => 'A :attribute mező kötelező ha :other egy :value.',
    'required_unless'      => 'A: attribútummezőt csak akkor kell megadni, ha: az egyéb értéke: értéke.',
    'required_with'        => 'A :attribute mező kötelező ha :value jelen van.',
    'required_with_all'    => 'A: attribútum mező akkor szükséges, ha: értékek vannak jelen.',
    'required_without'     => 'A :attribute mező kötelező ha :value nincs jelen.',
    'required_without_all' => 'A: attribútummező akkor szükséges, ha egyik sem: értéke nincs.',
    'same'                 => 'A :attribute és :other egyeznie kell.',
    'size'                 => [
        'numeric' => 'A :attribute kötelező mérete :size.',
        'file'    => 'A :attribute kötelező mérete :size kilobájt.',
        'string'  => 'A :attribute kötelező mérete :size karakter.',
        'array'   => 'A: attribútumnak tartalmaznia kell: méretű elemeket.',
    ],
    'string'               => 'A: attribútumnak stringnek kell lennie.',
    'timezone'             => 'A: attribútumnak érvényes zónának kell lennie.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => 'A :attribute már foglalt.',
    'uploaded'             => 'A: attribútum nem sikerült feltölteni.',
    'url'                  => 'Az :attribute formátuma érvénytelen.',
    'unique_undeleted'     => 'A(z) :attribute egyedinek kell lennie.',
    'non_circular'         => 'A(z) :attribute nem hozhat létre körkörös hivatkozást.',
    'not_array'            => ':atribute harus array.',
=======
    'accepted' => 'The :attribute field must be accepted.',
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    'active_url' => 'The :attribute field must be a valid URL.',
    'after' => 'The :attribute field must be a date after :date.',
    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
    'alpha' => 'The :attribute field must only contain letters.',
    'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'The :attribute field must only contain letters and numbers.',
    'array' => 'The :attribute field must be an array.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute field must be a date before :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute field must have between :min and :max items.',
        'file' => 'The :attribute field must be between :min and :max kilobytes.',
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
    'distinct' => 'A: attribútum mező duplikált értéket tartalmaz.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'A kiválasztott :attribute étvénytelen.',
    'exists' => 'A kiválasztott :attribute étvénytelen.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'A: attribútum mezőnek értéket kell tartalmaznia.',
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
    'import_field_empty'    => 'A :fieldname mező értéke nem lehet üres.',
    'in' => 'A kiválasztott :attribute étvénytelen.',
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
    'not_in' => 'A kiválasztott :attribute étvénytelen.',
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

    'present' => 'A: attribútum mezőnek jelen kell lennie.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'A :attribute mező kötelező.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'A :attribute mező kötelező ha :other egy :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'A: attribútummezőt csak akkor kell megadni, ha: az egyéb értéke: értéke.',
    'required_with' => 'A :attribute mező kötelező ha :value jelen van.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'A :attribute mező kötelező ha :value nincs jelen.',
    'required_without_all' => 'A: attribútummező akkor szükséges, ha egyik sem: értéke nincs.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'A: attribútumnak stringnek kell lennie.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique_undeleted'     => 'A(z) :attribute egyedinek kell lennie.',
    'non_circular'         => 'A(z) :attribute nem hozhat létre körkörös hivatkozást.',
    'not_array'            => ':attribute cannot be an array.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'A jelszó nem lehet azonos a felhasználónévvel.',
    'letters'              => 'A jelszónak tartalmaznia kell legalább egy betűt.',
    'numbers'              => 'A jelszónak tartalmaznia kell legalább egy számot.',
    'case_diff'            => 'A jelszónak tartalmaznia kell kis- és nagybetűket.',
    'symbols'              => 'A jelszónak tartalmaznia kell legalább egy szimbólumot.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Az érték nem lehet negatív'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'A :attribute már foglalt.',
    'uploaded' => 'A: attribútum nem sikerült feltölteni.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
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
        'alpha_space' => 'A: attribútum mező olyan karaktert tartalmaz, amely nem megengedett.',
        'email_array'      => 'Egy vagy több e-mail cím érvénytelen.',
        'hashed_pass'      => 'A jelenlegi jelszava helytelen',
        'dumbpwd'          => 'Ez a jelszó túl gyakori.',
        'statuslabel_type' => 'Meg kell határoznia egy érvényes állapotcímke típust',
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
        'purchase_date.date_format'     => ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
        'last_audit_date.date_format'   =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD hh:mm:ss formátumban',
        'expiration_date.date_format'   =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
        'termination_date.date_format'  =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
        'expected_checkin.date_format'  =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
        'start_date.date_format'        =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
        'end_date.date_format'          =>  ':attribute mező értékének érvényes dátumnak kell lennie YYYY-MM-DD formátumban',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute contains invalid options.',
        'radio_buttons'        => ':attribute is invalid.',
        'invalid_value_in_field' => 'Invalid value included in this field',

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
        'invalid_value_in_field' => 'Invalid value included in this field',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
