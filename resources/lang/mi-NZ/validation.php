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
    'accepted'             => 'Ko te: me whakaae te huanga.',
    'active_url'           => 'Ko: ko te huanga ehara i te URL whaimana.',
    'after'                => 'Ko: ko te huanga me te ra i muri i: ra.',
    'after_or_equal'       => 'Ko: ko te huanga me te ra i muri i te waa ranei: te ra.',
    'alpha'                => 'Ko te: ko te huanga anake he reta.',
    'alpha_dash'           => 'Ko te: ko te huanga anake he reta, he tau, he panga.',
    'alpha_num'            => 'Ko te: ko te huanga anake he reta me nga tau.',
    'array'                => 'Ko te: me tohu he huanga.',
    'before'               => 'Ko: ko te huanga me te ra i mua i: ra.',
    'before_or_equal'      => 'Ko: ko te huanga me he ra i mua atu i te wa ranei: te ra.',
    'between'              => [
        'numeric' => 'Te: ko te tohu i waenganui i: min me te: max.',
        'file'    => 'Ko: ko te tohu i waenganui i: min me te: max kilobytes.',
        'string'  => 'Ko te: ko te tohu i waenganui i: min me te: max.',
        'array'   => 'Ko te: ko te tohu i waenganui i: min me te: max max.',
    ],
    'boolean'              => 'Ko: Ko te waahi tohu he pono, he teka ranei.',
    'confirmed'            => 'Ko: ko te tohu whakatairanga kaore e taurite.',
    'date'                 => 'Ko: ko te huanga ehara i te ra whaimana.',
    'date_format'          => 'Ko: ko te huanga kaore e rite ki te horopaki: te whakatakotoranga.',
    'different'            => 'Ko: te huanga me: me wehe ke atu.',
    'digits'               => 'Ko: ko te tohu: ko nga nama tau.',
    'digits_between'       => 'Ko te: ko te tohu i waenganui i: min me te: max tohu.',
    'dimensions'           => 'Ko te: ko te ahuatanga o te ahua o te ahua o te whakapakoko.',
    'distinct'             => 'Ko te: ko te tahua huanga ko te uara taapiri.',
    'email'                => 'Ko te: ko te huanga he wahitau īmēra tika.',
    'exists'               => 'Ko te mea i tīpakohia: he muhu te huanga.',
    'file'                 => 'Ko: ko te huanga he kōnae.',
    'filled'               => 'Ko: Ko te waahi tohu ka whai hua.',
    'image'                => 'Ko te: me kii he huanga.',
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in'                   => 'Ko te mea i tīpakohia: he muhu te huanga.',
    'in_array'             => 'Ko te: ko te waahi huanga kaore i roto i: atu.',
    'integer'              => 'Ko te: ko te huanga me he tau.',
    'ip'                   => 'Ko: ko te huanga me waiho he wāhitau IP tika.',
    'ipv4'                 => 'Ko: ko te huanga me waiho he wāhitau IPv4 tika.',
    'ipv6'                 => 'Ko te: me tohu he huanga IPv6 tika.',
    'is_unique_department' => 'The :attribute must be unique to this Company Location',
    'json'                 => 'Ko: he tohu JSON tika te huanga.',
    'max'                  => [
        'numeric' => 'Ko te: ko te huanga ka nui atu i te: max.',
        'file'    => 'Ko te: ko te huanga ka nui atu i te: max kilobytes.',
        'string'  => 'Ko te: ko te huanga kaore e nui atu i: max tohu.',
        'array'   => 'Ko te: ko te huanga kaore i nui atu i: te maha o nga mea.',
    ],
    'mimes'                => 'Ko: ko te huanga he kōnae o te momo:: uara.',
    'mimetypes'            => 'Ko: ko te huanga he kōnae o te momo:: uara.',
    'min'                  => [
        'numeric' => 'Ko: ko te tikanga kia iti ake: min.',
        'file'    => 'Ko te: ko te tikanga kia iti ake: min kilobytes.',
        'string'  => 'Ko te: ko te tohu ko te iti rawa: min.',
        'array'   => 'Ko te: me whai i te huanga: iti rawa nga taonga.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',

    'not_in'               => 'Ko te mea i tīpakohia: he muhu te huanga.',
    'numeric'              => 'Ko te: me tohu he huanga.',
    'present'              => 'Ko te: ko te waahi tohu kia noho.',
    'valid_regex'          => 'That is not a valid regex. ',
    'regex'                => 'Ko te: ko te hōputu huanga he muhu.',
    'required'             => 'Ko te: e hiahiatia ana te waahi huanga.',
    'required_if'          => 'Ko te: ka hiahiatia te waahi huanga ina: ko etahi atu: te uara.',
    'required_unless'      => 'Ko: E hiahiatia ana te waahi huanga engari: ko etahi atu kei roto: nga uara.',
    'required_with'        => 'Ko: e hiahiatia ana te waahi huanga ina: kei te waahi nga uara.',
    'required_with_all'    => 'Ko: e hiahiatia ana te waahi huanga ina: kei te waahi nga uara.',
    'required_without'     => 'Ko: e hiahiatia ana te waahi huanga ka: kaore nga uara i te wa.',
    'required_without_all' => 'Ko te: ka hiahiatia te waahi huanga kaore he: ko nga uara kei reira.',
    'same'                 => 'Ko: te huanga me te: me uru atu tetahi atu.',
    'size'                 => [
        'numeric' => 'Ko: ko te huanga: te rahi.',
        'file'    => 'Ko te: ko te tohu: ko te rahi o nga kaitao.',
        'string'  => 'Ko: ko te tohu: ko te rahi o te kaituhi.',
        'array'   => 'Ko te: me whai kohinga: nga taonga rahi.',
    ],
    'string'               => 'Ko te: me tohu he huanga.',
    'timezone'             => 'Ko: ko te huanga he waa whaimana.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => 'Ko te: kua tangohia te huanga.',
    'uploaded'             => 'Ko te: ko te huanga i rahua te tuku.',
    'url'                  => 'Ko te: ko te hōputu huanga he muhu.',
    'unique_undeleted'     => 'Ko te: me tino ahurei te huanga.',
    'non_circular'         => 'The :attribute must not create a circular reference.',
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
    'boolean' => 'Ko te waahi  :attribute tohu he pono, he teka ranei.',
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
    'distinct' => 'Ko te: ko te tahua huanga ko te uara taapiri.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Ko te mea i  :attribute he muhu te huanga.',
    'exists' => 'Ko te mea i tīpakohia: he muhu te huanga.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Ko: Ko te waahi tohu ka whai hua.',
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
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in' => 'Ko te mea i tīpakohia: he muhu te huanga.',
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
    'not_in' => 'Ko te mea i tīpakohia: he muhu te huanga.',
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

    'present' => 'Ko te: ko te waahi tohu kia noho.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Ko te: e hiahiatia ana te waahi huanga.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Ko te: ka hiahiatia te waahi huanga ina: ko etahi atu: te uara.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Ko: E hiahiatia ana te waahi huanga engari: ko etahi atu kei roto: nga uara.',
    'required_with' => 'Ko: e hiahiatia ana te waahi huanga ina: kei te waahi nga uara.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Ko: e hiahiatia ana te waahi huanga ka: kaore nga uara i te wa.',
    'required_without_all' => 'Ko te: ka hiahiatia te waahi huanga kaore he: ko nga uara kei reira.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Ko te: me tohu he huanga.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique_undeleted'     => 'Ko te: me tino ahurei te huanga.',
    'non_circular'         => 'The :attribute must not create a circular reference.',
    'not_array'            => ':attribute cannot be an array.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'Password cannot be the same as the username.',
    'letters'              => 'Password must contain at least one letter.',
    'numbers'              => 'Password must contain at least one number.',
    'case_diff'            => 'Password must use mixed case.',
    'symbols'              => 'Password must contain symbols.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Value cannot be negative'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'Ko te: kua tangohia te huanga.',
    'uploaded' => 'Ko te: ko te huanga i rahua te tuku.',
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
        'alpha_space' => 'Ko te: kei roto i te waahi tohu he momo e kore e whakaaetia.',
        'email_array'      => 'Kotahi, neke atu ranei nga wahitau īmēra he muhu.',
        'hashed_pass'      => 'He hē tō kupuhipa o nāianei',
        'dumbpwd'          => 'He noa rawa te kupuhipa.',
        'statuslabel_type' => 'Me tīpako i te momo tahua tohu whaimana',
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
        'purchase_date.date_format'     => 'The :attribute must be a valid date in YYYY-MM-DD format',
        'last_audit_date.date_format'   =>  'The :attribute must be a valid date in YYYY-MM-DD hh:mm:ss format',
        'expiration_date.date_format'   =>  'The :attribute must be a valid date in YYYY-MM-DD format',
        'termination_date.date_format'  =>  'The :attribute must be a valid date in YYYY-MM-DD format',
        'expected_checkin.date_format'  =>  'The :attribute must be a valid date in YYYY-MM-DD format',
        'start_date.date_format'        =>  'The :attribute must be a valid date in YYYY-MM-DD format',
        'end_date.date_format'          =>  'The :attribute must be a valid date in YYYY-MM-DD format',
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
