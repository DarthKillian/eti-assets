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
    'accepted'             => 'Rhaid derbyn y :attribute.',
    'active_url'           => 'Nid ywr :attribute yn URL dilys.',
    'after'                => 'Rhaid i\'r :attribute bod yn dyddiad ar ol :date.',
    'after_or_equal'       => 'Rhaid i\'r :attribute bod yn dyddiad ar ol neu yn hafal i :date.',
    'alpha'                => 'Rhaid ir :attribute cynnwys llythrennau yn unig.',
    'alpha_dash'           => 'Fedrith y :attribute dim ond cynnwys llythrennau, rhifau a dashes.',
    'alpha_num'            => 'Rhaid ir :attribute cynnwys llythrennau a rhifau yn unig.',
    'array'                => 'Rhaid i :attribute fod yn array.',
    'before'               => 'Rhaid i\'r :attribute bod yn dyddiad cyn :date.',
    'before_or_equal'      => 'Rhaid i\'r :attribute bod yn dyddiad cyn neu yn hafal i :date.',
    'between'              => [
        'numeric' => 'Rhaid i\'r :attribute bod rhwng :min - :max.',
        'file'    => 'Rhaid i\'r :attribute bod rhwng :min - :max kilobytes.',
        'string'  => 'Rhaid i\'r :attribute bod rhwng :min - :max characters.',
        'array'   => 'Rhaid i\'r :attribute cael rhwng :min - :max o eitemau.',
    ],
    'boolean'              => 'Rhaid i :attribute fod yn wir neu ddim.',
    'confirmed'            => 'Dydi\'r cadarnhad :attribute ddim yn cydfynd.',
    'date'                 => 'Nid yw\'r :attribute yn dyddiad dilys.',
    'date_format'          => 'Nid yw\'r :attribute yn cydfynd ar format :format.',
    'different'            => 'Rhaid i :attribute a :other bod yn wahanol.',
    'digits'               => 'Rhai i\'r :attribute bod yn :digits o ddigidau.',
    'digits_between'       => 'Rhaid i\'r :attribute bodrhwng :min - :max o digidau.',
    'dimensions'           => 'Mae\'r :attribute hefo maint annilys.',
    'distinct'             => 'Mae\'r :attribute hefo maes sydd wedi\'i dyblygu.',
    'email'                => 'Mae fformat :attribute yn annilys.',
    'exists'               => 'Mae\'r :attribute a dewisir yn annilys.',
    'file'                 => 'Rhaid i\'r :attribute bod yn ffeil.',
    'filled'               => 'Rhaid i\'r maes :attribute cael gwerth.',
    'image'                => 'Rhaid i\'r :attribute bod yn delwedd.',
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in'                   => 'Mae\'r :attribute a dewisir yn annilys.',
    'in_array'             => 'Nid yw\'r maes :attribute yn bodoli yn :other.',
    'integer'              => 'Rhaid i\'r :attribute bod yn cyfanrif.',
    'ip'                   => 'Rhaid i\'r :attribute bod yn cyfeiriad IP dilys.',
    'ipv4'                 => 'Rhaid i\'r :attribute bod yn cyfeiriad IPv4 dilys.',
    'ipv6'                 => 'Rhaid i\'r :attribute bod yn cyfeiriad IPv6 dilys.',
    'is_unique_department' => 'The :attribute must be unique to this Company Location',
    'json'                 => 'Rhaid i\'r :attribute bod yn llinyn JSON dilys.',
    'max'                  => [
        'numeric' => 'Ni ellir :attribute bod yn fwy na :max.',
        'file'    => 'Ni ellir :attribute bod yn fwy na :max kilobytes.',
        'string'  => 'Ni ellir :attribute bod yn fwy na :max chaaracters.',
        'array'   => 'Ni ellir :attribute cael mwy na :max o eitemau.',
    ],
    'mimes'                => 'Rhaid i\'r :attribute bod yn ffeil o\'r math :values.',
    'mimetypes'            => 'Rhaid i\'r :attribute bod yn ffeil o\'r math: :values.',
    'min'                  => [
        'numeric' => 'Rhaid i\'r :attribute bod o leiaf :min.',
        'file'    => 'Rhaid i\'r :attribute bod o leiaf :min kilobytes.',
        'string'  => 'Rhaid i\'r :attribute bod o leiaf :min characters.',
        'array'   => 'Rhaid i\'r :attribute cael o leiaf :min o eitemau.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',

    'not_in'               => 'Mae\'r :attribute a dewisir yn annilys.',
    'numeric'              => 'Rhaid i\'r :attribute bod yn rhif.',
    'present'              => 'Rhaid i\'r maes :attribute bod yn presennol.',
    'valid_regex'          => 'Nid yw hyn yn Regex dilys. ',
    'regex'                => 'Mae\'r fformat :attribute yn annilys.',
    'required'             => 'Mae angen llenwi\'r maes :attribute.',
    'required_if'          => 'Mae angen y maes :attribute pan :other yw :value.',
    'required_unless'      => 'Mae angen y maes :attribute pan :other yn :values.',
    'required_with'        => 'Mae angen y maes :attribute pan mae :values yn bresennol.',
    'required_with_all'    => 'Mae angen y maes :attribute pan mae :values yn bresennol.',
    'required_without'     => 'Mae angen y maes :attribute os dydi\'r :values ddim yn bresennol.',
    'required_without_all' => 'Mae angen y maes :attribute os dydi\'r un o :values yn bresennol.',
    'same'                 => 'Rhaid i :attribute a :other cydfynd.',
    'size'                 => [
        'numeric' => 'Rhaid i\'r :attribute bod :size.',
        'file'    => 'Rhaid i\'r :attribute bod o leiaf :size kilobytes.',
        'string'  => 'Rhaid i\'r :attribute bod o leiaf :size characters.',
        'array'   => 'Rhaid ir :attribute cynnwys :size eitemau.',
    ],
    'string'               => 'Rhaid i\'r :attribute bod yn string.',
    'timezone'             => 'Rhaid i\'r :attribute bod yn barth dilys.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => 'Mae\'r :attribute wedi cymeryd yn barod.',
    'uploaded'             => 'Mae\'r :attribute wedi fethu uwchlwytho.',
    'url'                  => 'Mae fformat :attribute yn annilys.',
    'unique_undeleted'     => 'Rhaid i\'r :attribute bod yn unigryw.',
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
    'distinct' => 'Mae\'r :attribute hefo maes sydd wedi\'i dyblygu.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Mae\'r :attribute a dewisir yn annilys.',
    'exists' => 'Mae\'r :attribute a dewisir yn annilys.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Rhaid i\'r maes :attribute cael gwerth.',
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
    'in' => 'Mae\'r :attribute a dewisir yn annilys.',
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
    'not_in' => 'Mae\'r :attribute a dewisir yn annilys.',
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

    'present' => 'Rhaid i\'r maes :attribute bod yn presennol.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Mae angen llenwi\'r maes :attribute.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Mae angen y maes :attribute pan :other yw :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Mae angen y maes :attribute pan :other yn :values.',
    'required_with' => 'Mae angen y maes :attribute pan mae :values yn bresennol.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Mae angen y maes :attribute os dydi\'r :values ddim yn bresennol.',
    'required_without_all' => 'Mae angen y maes :attribute os dydi\'r un o :values yn bresennol.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Rhaid i\'r :attribute bod yn string.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique_undeleted'     => 'Rhaid i\'r :attribute bod yn unigryw.',
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
    'unique' => 'Mae\'r :attribute wedi cymeryd yn barod.',
    'uploaded' => 'Mae\'r :attribute wedi fethu uwchlwytho.',
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
        'alpha_space' => 'Mae\'r maes :attribute yn cynnwys cymeriad na chaniateir.',
        'email_array'      => 'Mae un neu fwy o gyfeiriadau e-bost yn annilys.',
        'hashed_pass'      => 'Mae eich cyfrinair cyfredol yn anghywir',
        'dumbpwd'          => 'Mae\'r cyfrinair hwnnw\'n rhy gyffredin.',
        'statuslabel_type' => 'Rhaid i chi ddewis math label statws dilys',
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
