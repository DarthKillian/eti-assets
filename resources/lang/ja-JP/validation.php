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
    'accepted'             => ':attribute は、承認される必要があります。',
    'active_url'           => ':attribute は、有効なURLではありません。',
    'after'                => ':attribute は :date よりも後の日付にして下さい。',
    'after_or_equal'       => ':attribute は :date よりも後の日付か同じ日にして下さい。',
    'alpha'                => ':attribute は、文字が含まれている必要があります。',
    'alpha_dash'           => ':attribute は、文字列、数字、ダッシュ（−）のみ含めることが出来ます。',
    'alpha_num'            => ':attribute は、文字列と数字のみ含めることが出来ます。',
    'array'                => ':attribute は配列にして下さい。',
    'before'               => ':attribute は :date よりも前の日付にして下さい。',
    'before_or_equal'      => ':attribute は :date よりも前の日付か同じ日にして下さい。',
    'between'              => [
        'numeric' => ':attribute は :min - :max の範囲内にして下さい。',
        'file'    => ':attribute は :min - :max キロバイトの範囲内にして下さい。',
        'string'  => ':attribute は :min - :max 文字の範囲内にして下さい。',
        'array'   => ':attribute は :min ～ :max 内の数値にして下さい。',
    ],
    'boolean'              => ':attribute は、 true もしくは false にしてください。',
    'confirmed'            => ':attribute が、一致しませんでした。',
    'date'                 => ':attribute は、無効な日付です。',
    'date_format'          => ':attribute フォーマット :format に一致しません。',
    'different'            => ':attribute と :other は、異なっている必要があります。',
    'digits'               => ':attribute は :digits 数値にして下さい。',
    'digits_between'       => ':attribute は :min - :max 内の数値にして下さい。',
    'dimensions'           => ':attribute に無効な画像サイズがあります。',
    'distinct'             => ':attribute フィールドに重複する値があります。',
    'email'                => ':attribute フォーマットが不正です。',
    'exists'               => '選択された :attribute は不正です。',
    'file'                 => ':attribute はファイルにして下さい。',
    'filled'               => ':attribute フィールドは空に出来ません。',
    'image'                => ':attribute は画像にして下さい。',
    'import_field_empty'    => ':fieldname の値は null にはできません。',
    'in'                   => '選択された :attribute は不正です。',
    'in_array'             => ':attribute フィールドが :other に存在しません。',
    'integer'              => ':attribute は整数にして下さい。',
    'ip'                   => ':attribute は有効なIPアドレスにして下さい。',
    'ipv4'                 => ':attribute は有効なIPアドレスにして下さい。',
    'ipv6'                 => ':attribute は有効なIPv6アドレスにして下さい。',
    'is_unique_department' => ':attribute は、この会社の場所に一意である必要があります。',
    'json'                 => ':attribute は有効なJSON文字列にして下さい。',
    'max'                  => [
        'numeric' => ':attribute は :max 以上にして下さい。',
        'file'    => ':attribute は :max キロバイト以上にして下さい。',
        'string'  => ':attribute は :max 文字以上にして下さい。',
        'array'   => ':attribute は :max 以上のアイテムを持つことは出来ません。',
    ],
    'mimes'                => ':attribute は ファイルタイプ :values にして下さい。',
    'mimetypes'            => ':attribute はファイルタイプ :values にして下さい。',
    'min'                  => [
        'numeric' => ':attribute は、少なくとも :min 以上にして下さい。',
        'file'    => ':attribute は、少なくとも :min キロバイト以上にして下さい。',
        'string'  => ':attribute は、少なくとも :min 文字以上にして下さい。',
        'array'   => ':attribute は少なくとも :min 以上にして下さい。',
    ],
    'starts_with'          => ':attribute は、いずれかの値で始まる必要があります: :values.',
    'ends_with'            => ':attribute は、以下のいずれかの :values で終了する必要があります。',

    'not_in'               => '選択された :attribute は不正です。',
    'numeric'              => ':attribute は数字にして下さい。',
    'present'              => ':attribute フィールドは必須です。',
    'valid_regex'          => '有効な正規表現ではありません。',
    'regex'                => ':attribute フォーマットが不正です。',
    'required'             => ':attribute フィールドは、必須です。',
    'required_if'          => ':other が :value の時、:attribute フィールドは必須です。',
    'required_unless'      => ':other が :value の時でなければ、:attribute フィールドは必須です。',
    'required_with'        => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_with_all'    => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_without'     => ':value が存在しな場合、:attribute フィールドは必須です。',
    'required_without_all' => ':value が存在しない場合、:attribute フィールドは必須です。',
    'same'                 => ':attribute と :other は、一致しなければなりません。',
    'size'                 => [
        'numeric' => ':attribute は :size にして下さい。',
        'file'    => ':attribute は :size キロバイトにして下さい。',
        'string'  => ':attribute は :size 文字にして下さい。',
        'array'   => ':attribute には、 :size が含まれていなければなりません。',
    ],
    'string'               => ':attribute は文字列にして下さい。',
    'timezone'             => ':attribute は有効なゾーンにして下さい。',
    'two_column_unique_undeleted' => ':attributeは:table1と:table2で一意である必要があります。 ',
    'unique'               => ':attribute は、取得済みです。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute フォーマットが不正です。',
    'unique_undeleted'     => ':attribute は 一意の値である必要があります。',
    'non_circular'         => ':attribute は、循環参照を作成してはいけません。',
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
    'distinct' => ':attribute フィールドに重複する値があります。',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => '選択された :attribute は不正です。',
    'exists' => '選択された :attribute は不正です。',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => ':attribute フィールドは空に出来ません。',
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
    'import_field_empty'    => ':fieldname の値は null にはできません。',
    'in' => '選択された :attribute は不正です。',
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
    'not_in' => '選択された :attribute は不正です。',
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

    'present' => ':attribute フィールドは必須です。',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => ':attribute フィールドは、必須です。',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':other が :value の時、:attribute フィールドは必須です。',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => ':other が :value の時でなければ、:attribute フィールドは必須です。',
    'required_with' => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => ':value が存在しな場合、:attribute フィールドは必須です。',
    'required_without_all' => ':value が存在しない場合、:attribute フィールドは必須です。',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => ':attribute は文字列にして下さい。',
    'two_column_unique_undeleted' => ':attributeは:table1と:table2で一意である必要があります。 ',
    'unique_undeleted'     => ':attribute は 一意の値である必要があります。',
    'non_circular'         => ':attribute は、循環参照を作成してはいけません。',
    'not_array'            => ':attributeには配列を指定できません。',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'パスワードはユーザー名と同じにすることはできません。',
    'letters'              => 'パスワードには英字が1文字以上必要です。',
    'numbers'              => 'パスワードには数字が1つ以上必要です。',
    'case_diff'            => 'パスワードは英字と数字を混在させる必要があります。',
    'symbols'              => 'パスワードには記号を含める必要があります',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => '負の値にすることはできません'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => ':attribute は、取得済みです。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
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
        'alpha_space' => ':attribute フィールドに、禁止文字列が含まれています。',
        'email_array'      => '1 つまたは複数の電子メール アドレスが無効です。',
        'hashed_pass'      => '現在のパスワードが正しくありません。',
        'dumbpwd'          => 'そのパスワードはあまりにも脆弱です。',
        'statuslabel_type' => '有効なステータスラベルの種類を選択する必要があります。',
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
        'purchase_date.date_format'     => ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
        'last_audit_date.date_format'   =>  ':attribute は YYYY-MM-DD hh:mm:ss 形式の有効な日時にして下さい',
        'expiration_date.date_format'   =>  ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
        'termination_date.date_format'  =>  ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
        'expected_checkin.date_format'  =>  ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
        'start_date.date_format'        =>  ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
        'end_date.date_format'          =>  ':attribute は YYYY-MM-DD 形式の有効な日付にして下さい',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute に無効なオプションが含まれています。',
        'radio_buttons'        => ':attribute は不正です。',
        'invalid_value_in_field' => 'このフィールドに含まれる値が無効です',

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
        'invalid_value_in_field' => 'このフィールドに含まれる値が無効です',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
