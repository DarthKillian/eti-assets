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
    'accepted'             => ':attribute 가 수락되었습니다.',
    'active_url'           => ':attribute 는 잘못된 URL 입니다.',
    'after'                => ':attribute 는 :date 뒤에 오는 날짜 형식이어야 합니다.',
    'after_or_equal'       => ':attribute 는 :date 이후거나 같아야 합니다.',
    'alpha'                => ':attribute 는 문자만 포함해야 합니다.',
    'alpha_dash'           => ':attribute는 문자, 숫자, 대쉬기호만 포함 할 수 있습니다.',
    'alpha_num'            => ':attribute 는 문자와 숫자만 포함할 수 있습니다.',
    'array'                => ':attribute는 배열이어야 합니다.',
    'before'               => ':attribute 는 :date 앞의 날짜 형식이 되야 합니다.',
    'before_or_equal'      => ':attribute 는 :date 이전이거나 같아야 합니다.',
    'between'              => [
        'numeric' => ':attribute 는 :min - :max 사이의 값입니다.',
        'file'    => ':attribute 는 :min - :max Kbyte 사이의 값입니다.',
        'string'  => ':attribute 는 :min - :max 자 사이의 문자입니다.',
        'array'   => ':attribute 는 :min - :max 품목 사이여야 합니다.',
    ],
    'boolean'              => ':attribute 는 참 또는 거짓의 속성만 지정 가능합니다.',
    'confirmed'            => ':attribute 확인이 일치 하지 않습니다.',
    'date'                 => ':attribute 는 잘못된 날짜 입니다.',
    'date_format'          => ':attribute 는 :format 형식과 일치하지 않습니다.',
    'different'            => ':attribute 와 :other 는 서로 달라야 합니다.',
    'digits'               => ':attribute 는 :digits 자리수여야 합니다.',
    'digits_between'       => ':attribute 는 :min - :max 자릿수 사이여야 합니다.',
    'dimensions'           => ':attribute에 잘못된 이미지 크기가 있습니다.',
    'distinct'             => ':attribute 항목은 중복된 값입니다.',
    'email'                => ':attribute 형식이 부정확 합니다.',
    'exists'               => '선택한 :attribute 가 부정확 합니다.',
    'file'                 => ':attribute는 파일이어야 합니다.',
    'filled'               => ':attribute 항목은 값이 있어야 합니다.',
    'image'                => ':attribute 는 이미지 형식만 가능합니다.',
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in'                   => '선택한 :attribute 가 부정확 합니다.',
    'in_array'             => ':attribute항목이 :other에 없습니다.',
    'integer'              => ':attribute 는 정수이어야 합니다.',
    'ip'                   => ':attribute 는 유효한 IP 주소이어야 합니다.',
    'ipv4'                 => ':attribute는 유효한 IPv4 주소여야 합니다.',
    'ipv6'                 => ':attribute는 유효한 IPv6 주소여야 합니다.',
    'is_unique_department' => 'The :attribute must be unique to this Company Location',
    'json'                 => ':attribute는 유효한 JSON 문자값이어야 합니다.',
    'max'                  => [
        'numeric' => ':attribute 는 :max 보다 작아야 합니다.',
        'file'    => ':attribute 는 :max Kbyte보다 작아야 합니다.',
        'string'  => ':attribute 는 :max 자보다 작아야 합니다.',
        'array'   => ':attribute는 :max 항목보다 작어야 합니다.',
    ],
    'mimes'                => ':attribute 는 :values 형식의 파일만 가능합니다.',
    'mimetypes'            => ':attribute 는 :values 형식의 파일만 가능합니다.',
    'min'                  => [
        'numeric' => ':attribute 는 최소 :min 이어야 합니다.',
        'file'    => ':attribute 는 최소 :min Kbyte 이어야 합니다.',
        'string'  => ':attribute 는 최소 :min 자 이어야 합니다.',
        'array'   => ':attribute는 최소 :min 항목이어야 합니다.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',

    'not_in'               => '선택한 :attribute 가 부정확 합니다.',
    'numeric'              => ':attribute 는 숫자만 가능합니다.',
    'present'              => ':attribute 항목이 있어야 합니다.',
    'valid_regex'          => '그것은 유효한 정규 표현식이 아닙니다. ',
    'regex'                => ':attribute 형식이 부정확 합니다.',
    'required'             => ':attribute 항목을 입력해 주세요.',
    'required_if'          => ':attribute 항목은 :other가 :value 일때 필요합니다.',
    'required_unless'      => ':values에 :other가 있는 경우 : attribute 항목은 필요하지 않습니다.',
    'required_with'        => ':attribute 항목은 :values 가 존재할 때 필요합니다.',
    'required_with_all'    => ':attribute 항목은 :values가 있을 때 필요합니다.',
    'required_without'     => ':attribute 항목은 :values 가 존재하지 않을 때 필요합니다.',
    'required_without_all' => ':attribute 항목은 :values 가 전혀 없다면 필수입니다.',
    'same'                 => ':attribute 와 :other 는 일치해야 합니다.',
    'size'                 => [
        'numeric' => ':attribute 는 :size 가 되야 합니다.',
        'file'    => ':attribute 는 :size Kbyte 가 되야 합니다.',
        'string'  => ':attribute 는 :size 자가 되야 합니다.',
        'array'   => ':attribute 는 :size 품목에 포함되야 합니다.',
    ],
    'string'               => ':attribute는 글자여야 합니다.',
    'timezone'             => ':attribute는 유효한 지역이어야 합니다.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => ':attribute 는 이미 획득하였습니다.',
    'uploaded'             => ':attribute는 업로드 하지 못했습니다.',
    'url'                  => ':attribute 형식이 부정확 합니다.',
    'unique_undeleted'     => ':attribute 는 고유의 값만 가져야 합니다.',
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
    'distinct' => ':attribute 항목은 중복된 값입니다.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => '선택한 :attribute 가 부정확 합니다.',
    'exists' => '선택한 :attribute 가 부정확 합니다.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => ':attribute 항목은 값이 있어야 합니다.',
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
    'in' => '선택한 :attribute 가 부정확 합니다.',
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
    'not_in' => '선택한 :attribute 가 부정확 합니다.',
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

    'present' => ':attribute 항목이 있어야 합니다.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => ':attribute 항목을 입력해 주세요.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':attribute 항목은 :other가 :value 일때 필요합니다.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => ':values에 :other가 있는 경우 : attribute 항목은 필요하지 않습니다.',
    'required_with' => ':attribute 항목은 :values 가 존재할 때 필요합니다.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => ':attribute 항목은 :values 가 존재하지 않을 때 필요합니다.',
    'required_without_all' => ':attribute 항목은 :values 가 전혀 없다면 필수입니다.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => ':attribute는 글자여야 합니다.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique_undeleted'     => ':attribute 는 고유의 값만 가져야 합니다.',
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
    'unique' => ':attribute 는 이미 획득하였습니다.',
    'uploaded' => ':attribute는 업로드 하지 못했습니다.',
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
        'alpha_space' => ':attribute 항목에는 문자를 입력할 수 없습니다.',
        'email_array'      => '하나 이상의 이메일 주소가 유효하지 않습니다.',
        'hashed_pass'      => '현재 비밀번호가 잘못되었습니다.',
        'dumbpwd'          => '그 비밀번호는 너무 일반적입니다.',
        'statuslabel_type' => '유효한 상태 라벨 형식을 선택해 주셔야 합니다',
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
