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
    'accepted'             => ':attribute musi zostać zaakceptowany.',
    'active_url'           => ':attribute nie jest poprawnym adresem URL.',
    'after'                => ':attribute musi być późniejszą datą w stosunku do :date.',
    'after_or_equal'       => ':attribute musi być datą po lub równa :date.',
    'alpha'                => ':attribute może zawierać tylko litery.',
    'alpha_dash'           => ':attribute może zawierać tylko litery, cyfry i myślniki.',
    'alpha_num'            => ':attribute może zawierać tylko litery i cyfry.',
    'array'                => ':attribute musi być zbiorem.',
    'before'               => ':attribute musi być późniejszą datą w stosunku do :date.',
    'before_or_equal'      => ':attribute musi być datą po lub równa :date.',
    'between'              => [
        'numeric' => ':attribute musi być pomiędzy :min - :max.',
        'file'    => ':attribute musi być pomiędzy :min - :max kilobajtów.',
        'string'  => ':attribute musi być pomiędzy :min - :max znaków.',
        'array'   => ':attribute musi być pomiędzy :min - :max.',
    ],
    'boolean'              => 'Pole atrybutu: musi być prawdziwe lub fałszywe.',
    'confirmed'            => 'Potwierdzenie :attribute nie pasuje.',
    'date'                 => ':attribute nie jest prawidłową datą.',
    'date_format'          => 'Format :attribute nie pasuje do :format.',
    'different'            => ':attribute musi różnić się od :other.',
    'digits'               => ':attribute musi posiadać cyfry :digits.',
    'digits_between'       => ':attribute musi być pomiędzy cyframi :min i :max.',
    'dimensions'           => 'Atrybut: atrybut ma nieprawidłowe wymiary obrazu.',
    'distinct'             => 'Pole :attribute ma zduplikowane wartości.',
    'email'                => 'Format pola :attribute jest niewłaściwy.',
    'exists'               => 'Wybrane :attribute jest niewłaściwe.',
    'file'                 => ':attribute musi być plikiem.',
    'filled'               => 'Pole :attribute musi posiadać wartość.',
    'image'                => ':attribute musi być obrazkiem.',
    'import_field_empty'    => 'Wartość dla :fieldname nie może być pusta.',
    'in'                   => 'Wybrane :attribute jest niewłaściwe.',
    'in_array'             => 'Pole: attribute nie istnieje w: other.',
    'integer'              => ':attribute must musi być liczbą całkowitą.',
    'ip'                   => ':attribute musi być poprawnym adresem IP.',
    'ipv4'                 => 'Atrybut: musi być prawidłowym adresem IPv4.',
    'ipv6'                 => 'Atrybut: musi być prawidłowym adresem IPv6.',
    'is_unique_department' => ':attribute musi być unikatowy dla tej firmy',
    'json'                 => 'Atrybut: musi być prawidłowym ciągiem JSON.',
    'max'                  => [
        'numeric' => ':attribute nie może być większy niż :max.',
        'file'    => ':attribute nie może być więszky niż :max kilobajtów.',
        'string'  => ':attribute nie może posiadać więcej znaków niż :max.',
        'array'   => 'Atrybut: atrybut nie może zawierać więcej niż: max elementów.',
    ],
    'mimes'                => ':attribute musi być plikiem z rozszerzeniami :values.',
    'mimetypes'            => 'Atrybut: atrybut musi być plikiem typu:: wartości.',
    'min'                  => [
        'numeric' => ':attribute musi być przynajmniej :min.',
        'file'    => ':attribute musi być przynajmniej wielkości :min kilobajtów.',
        'string'  => ':attribute musi być posiadać minimum :min znaki.',
        'array'   => 'Atrybut: musi zawierać co najmniej: min.',
    ],
    'starts_with'          => ':attribute musi zaczynać się jednym z następujących wartości: :values.',
    'ends_with'            => ':attribute musi kończyć się jedną z następujących wartości: :values.',

    'not_in'               => 'Wybrany :attribute jest nieprawidłowy.',
    'numeric'              => ':attribute musi być liczbą.',
    'present'              => ':attribute nie może być puste.',
    'valid_regex'          => 'Nieprawidłowe wyrażenie regularne. ',
    'regex'                => 'Format :attribute jest niewłaściwy.',
    'required'             => ':attribute nie może być puste.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'      => 'Pole atrybutów: wymagane jest, chyba że inne są w: wartościach.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_with_all'    => 'Pole atrybutu: atrybut jest wymagane, gdy: wartości są obecne.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest podana.',
    'required_without_all' => 'Pole atrybutu: attribute jest wymagane, gdy żadna z: wartości nie jest obecna.',
    'same'                 => ':attribute i :other muszą pasować.',
    'size'                 => [
        'numeric' => ':attribute musi być wielkości :size.',
        'file'    => ':attribute musi być :size kilobajtów.',
        'string'  => ':attribute musi być :size znakowy.',
        'array'   => 'Atrybut: musi zawierać: elementy rozmiaru.',
    ],
    'string'               => 'Atrybut: atrybut musi być ciągiem.',
    'timezone'             => 'Atrybut: musi być poprawną strefą.',
    'two_column_unique_undeleted' => ':attribute musi być unikalny pomiędzy :table1 i :table2. ',
    'unique'               => ':attribute został już wzięty.',
    'uploaded'             => 'Nie udało się przesłać atrybutu:.',
    'url'                  => 'Format pola :attribute jest niewłaściwy.',
    'unique_undeleted'     => 'Wartość :attribute musi być unikalna.',
    'non_circular'         => ':attribute nie może tworzyć odwołań cyklicznych.',
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
    'boolean' => 'Pole atrybutu: musi być prawdziwe lub fałszywe.',
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
    'distinct' => 'Pole :attribute ma zduplikowane wartości.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Wybrany :attribute jest nieprawidłowy.',
    'exists' => 'Wybrane :attribute jest niewłaściwe.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Pole :attribute musi posiadać wartość.',
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
    'import_field_empty'    => 'Wartość dla :fieldname nie może być pusta.',
    'in' => 'Wybrane :attribute jest niewłaściwe.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'Atrybut: musi być prawidłowym adresem IPv4.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'Atrybut: musi być prawidłowym ciągiem JSON.',
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
    'not_in' => 'Wybrany :attribute jest nieprawidłowy.',
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

    'present' => ':attribute nie może być puste.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => ':attribute nie może być puste.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Pole atrybutów: wymagane jest, chyba że inne są w: wartościach.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie jest podana.',
    'required_without_all' => 'Pole atrybutu: attribute jest wymagane, gdy żadna z: wartości nie jest obecna.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Atrybut: atrybut musi być ciągiem.',
    'two_column_unique_undeleted' => ':attribute musi być unikalny pomiędzy :table1 i :table2. ',
    'unique_undeleted'     => 'Wartość :attribute musi być unikalna.',
    'non_circular'         => ':attribute nie może tworzyć odwołań cyklicznych.',
    'not_array'            => ':attribute nie może być tablicą.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'Hasło nie może być takie samo jak nazwa użytkownika.',
    'letters'              => 'Hasło musi zawierać co najmniej jedną literę.',
    'numbers'              => 'Hasło musi zawierać co najmniej jedną cyfrę.',
    'case_diff'            => 'Hasło musi zawierać małe i wielkie litery.',
    'symbols'              => 'Hasło musi zawierać znaki specjalne.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Wartość nie może być ujemna'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => ':attribute został już wzięty.',
    'uploaded' => 'Nie udało się przesłać atrybutu:.',
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
        'alpha_space' => 'Pole: attribute zawiera znak, który nie jest dozwolony.',
        'email_array'      => 'Jeden lub więcej adresów e-mail jest nieprawidłowy.',
        'hashed_pass'      => 'Twoje bieżące hasło jest niepoprawne',
        'dumbpwd'          => 'To hasło jest zbyt powszechne.',
        'statuslabel_type' => 'Musisz wybrać odpowiedni typ etykiety statusu',
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
        'purchase_date.date_format'     => ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
        'last_audit_date.date_format'   =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD hh:mm:ss',
        'expiration_date.date_format'   =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
        'termination_date.date_format'  =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
        'expected_checkin.date_format'  =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
        'start_date.date_format'        =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
        'end_date.date_format'          =>  ':attribute musi być prawidłową datą w formacie YYYY-MM-DD',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute zawiera nieprawidłowe opcje.',
        'radio_buttons'        => ':attribute jest nieprawidłowy.',
        'invalid_value_in_field' => 'Nieprawidłowa wartość dołączona do tego pola',

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
        'invalid_value_in_field' => 'Nieprawidłowa wartość dołączona do tego pola',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
