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
    'accepted'             => 'Үүнд: аттрибут хүлээн авах ёстой.',
    'active_url'           => 'Үүнд: атрибут нь зөв URL биш байна.',
    'after'                => 'Үүнд: аттрибут нь дараах огноо байх ёстой: date.',
    'after_or_equal'       => 'Үүнд: аттрибут нь дараах огноо эсвэл тэнцүү байх огноо байх ёстой.',
    'alpha'                => 'Үүнд: аттрибут нь зөвхөн үсэг агуулдаг.',
    'alpha_dash'           => 'Үүнд: аттрибут нь зөвхөн үсэг, тоо, зураас агуулсан байж болно.',
    'alpha_num'            => 'Үүнд: аттрибут нь зөвхөн үсэг, тоо агуулж болно.',
    'array'                => 'Үүнд: атрибут нь массив байх ёстой.',
    'before'               => 'Үүнд: аттрибут нь огноогоос өмнө он сар байх ёстой.',
    'before_or_equal'      => 'Үүнд: аттрибут нь огноогоос өмнө эсвэл огноо байх ёстой.',
    'between'              => [
        'numeric' => 'Үүнд: атрибут нь дараах байх ёстой: min ба: max.',
        'file'    => 'Үүнд: аттрибут нь: min ба: max килобайт хооронд байх ёстой.',
        'string'  => 'Үүнд: аттрибут нь дараах байх ёстой: min ба: max тэмдэгтүүд.',
        'array'   => 'Үүнд: аттрибут нь дараах байх ёстой: min ба: max items.',
    ],
    'boolean'              => 'Үүнд: аттрибутын талбар нь үнэн эсвэл худал байна.',
    'confirmed'            => 'Үүнд: атрибут баталгаажуулалт таарахгүй байна.',
    'date'                 => 'Үүнд: атрибут нь хүчинтэй хугацаа биш.',
    'date_format'          => 'Үүнд: атрибут формат хэлбэрээр тохирохгүй байна.',
    'different'            => 'Үүнд: аттрибут болон бусад нь өөр байх ёстой.',
    'digits'               => 'Үүнд: аттрибут нь: цифрүүд цифр байна.',
    'digits_between'       => 'Үүнд: аттрибут нь дараах байх ёстой: min ба: хамгийн их цифрүүд.',
    'dimensions'           => 'Үүнд: атрибут буруу зургийн хэмжээстэй байна.',
    'distinct'             => 'Үүнд: атрибутын талбар нь давхар утгатай.',
    'email'                => 'Үүнд: атрибут нь зөв имэйл хаяг байх ёстой.',
    'exists'               => 'Сонгосон: шинж чанар буруу байна.',
    'file'                 => 'Үүнд: атрибут нь файл байх ёстой.',
    'filled'               => 'Үүнд: аттрибутын талбар нь утгатай байх ёстой.',
    'image'                => 'Үүнд: атрибут нь зураг байх ёстой.',
    'import_field_empty'    => 'The value for :fieldname cannot be null.',
    'in'                   => 'Сонгосон: шинж чанар буруу байна.',
    'in_array'             => 'Үүнд: атрибутын талбар байхгүй байна: бусад.',
    'integer'              => 'Үүнд: атрибут нь бүхэл тоо байх ёстой.',
    'ip'                   => 'Үүнд: атрибут нь зөв IP хаяг байх ёстой.',
    'ipv4'                 => 'Үүнд: атрибут нь хүчин төгөлдөр IPv4 хаяг байх ёстой.',
    'ipv6'                 => 'Үүнд: аттрибут нь зөв IPv6 хаяг байх ёстой.',
    'is_unique_department' => 'The :attribute must be unique to this Company Location',
    'json'                 => 'Үүнд: атрибут нь JSON тэмдэгт байх ёстой.',
    'max'                  => [
        'numeric' => 'Үүнд: аттрибут нь: max.',
        'file'    => 'Үүнд: аттрибут нь: килобайтаас ихгүй байж болно.',
        'string'  => 'Үүнд: аттрибут нь хамгийн их тэмдэгтүүдээс их байж болохгүй.',
        'array'   => 'Үүнд: аттрибут нь дараахи зүйлсээс ихгүй байна.',
    ],
    'mimes'                => 'Үүнд: аттрибут нь төрөл:: утгуудтай файл байх ёстой.',
    'mimetypes'            => 'Үүнд: аттрибут нь төрөл:: утгуудтай файл байх ёстой.',
    'min'                  => [
        'numeric' => 'Үүнд: аттрибут дор хаяж байх ёстой.',
        'file'    => 'Үүнд: атрибут дор хаяж нэг килобайт байх ёстой.',
        'string'  => 'Үүнд: атрибут дор хаяж байх ёстой: min тэмдэгтүүд.',
        'array'   => 'Үүнд: атрибут дор хаяж дараах зүйлсийг агуулсан байх ёстой.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',

    'not_in'               => 'Сонгосон: шинж чанар буруу байна.',
    'numeric'              => 'Үүнд: атрибут нь тоо байх ёстой.',
    'present'              => 'Үүнд: атрибутын талбар байх ёстой.',
    'valid_regex'          => 'Энэ regex нь хүчин төгөлдөр биш. ',
    'regex'                => 'Агуулга формат буруу байна.',
    'required'             => 'Үүнд: атрибутын талбар шаардлагатай.',
    'required_if'          => 'Үүнд: аттрибутын талбар шаардлагатай үед: бусад нь: утга.',
    'required_unless'      => 'Үүнд: аттрибутын талбар шаардлагатай: бусад нь: утга байна.',
    'required_with'        => 'Үүнд: аттрибутын талбар шаардлагатай бол: утга байгаа болно.',
    'required_with_all'    => 'Үүнд: аттрибутын талбар шаардлагатай бол: утга байгаа болно.',
    'required_without'     => 'Үүнд: аттрибутын талбар шаардлагатай үед: утга байхгүй байна.',
    'required_without_all' => 'Үүнд: аттрибутын талбар нь: утга байх ёсгүй.',
    'same'                 => 'Үүнд: атрибут болон бусад нь таарах ёстой.',
    'size'                 => [
        'numeric' => 'Үүнд: атрибут нь байх ёстой: хэмжээ.',
        'file'    => 'Үүнд: атрибут нь: хэмжээ килобайт байх ёстой.',
        'string'  => 'Үүнд: аттрибут нь: хэмжээст тэмдэгтүүд.',
        'array'   => 'Үүнд: атрибут нь дараах хэмжээтэй байна: size items.',
    ],
    'string'               => 'Үүнд: атрибут нь мөр байх ёстой.',
    'timezone'             => 'Үүнд: атрибут нь хүчинтэй бүс байх ёстой.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique'               => 'Үүнд: атрибут аль хэдийн авсан байна.',
    'uploaded'             => 'Үүнд: атрибут байршуулах боломжгүй байна.',
    'url'                  => 'Агуулга формат буруу байна.',
    'unique_undeleted'     => ':attribute дахин давтагдашгүй байх ёстой.',
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
    'boolean' => 'Үүнд: аттрибутын талбар нь үнэн эсвэл худал байна.',
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
    'distinct' => 'Үүнд: атрибутын талбар нь давхар утгатай.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Сонгосон: шинж чанар буруу байна.',
    'exists' => 'Сонгосон: шинж чанар буруу байна.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Үүнд: аттрибутын талбар нь утгатай байх ёстой.',
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
    'in' => 'Сонгосон: шинж чанар буруу байна.',
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
    'not_in' => 'Сонгосон: шинж чанар буруу байна.',
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

    'present' => 'Үүнд: атрибутын талбар байх ёстой.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Үүнд: атрибутын талбар шаардлагатай.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Үүнд: аттрибутын талбар шаардлагатай үед: бусад нь: утга.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Үүнд: аттрибутын талбар шаардлагатай: бусад нь: утга байна.',
    'required_with' => 'Үүнд: аттрибутын талбар шаардлагатай бол: утга байгаа болно.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Үүнд: аттрибутын талбар шаардлагатай үед: утга байхгүй байна.',
    'required_without_all' => 'Үүнд: аттрибутын талбар нь: утга байх ёсгүй.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Үүнд: атрибут нь мөр байх ёстой.',
    'two_column_unique_undeleted' => 'The :attribute must be unique across :table1 and :table2. ',
    'unique_undeleted'     => ':attribute дахин давтагдашгүй байх ёстой.',
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
    'unique' => 'Үүнд: атрибут аль хэдийн авсан байна.',
    'uploaded' => 'Үүнд: атрибут байршуулах боломжгүй байна.',
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
        'alpha_space' => 'Үүнд: аттрибут талбар нь зөвшөөрөгдөөгүй тэмдэгт агуулна.',
        'email_array'      => 'Нэг буюу хэд хэдэн имэйл хаяг буруу байна.',
        'hashed_pass'      => 'Таны одоогийн нууц үг буруу байна',
        'dumbpwd'          => 'Энэ нууц үг хэтэрхий нийтлэг байна.',
        'statuslabel_type' => 'Та зөв статустай шошгын төрлийг сонгох ёстой',
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
