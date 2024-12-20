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
<<<<<<< HEAD
    'boolean'              => 'O campo: atributo deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação da :attribute não coincide.',
    'date'                 => 'A :attribute não é uma data válida.',
    'date_format'          => ':attribute não corresponde ao formato :format.',
    'different'            => ':attribute e :other têm que ser diferentes.',
    'digits'               => ':attribute de contem :digits dígitos.',
    'digits_between'       => 'O :attribute deve estar entre :min e :max dígitos.',
    'dimensions'           => 'O atributo: tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo: atributo tem um valor duplicado.',
    'email'                => 'O formato do :attribute é inválido.',
    'exists'               => 'O :attribute é inválido.',
    'file'                 => 'O atributo: deve ser um arquivo.',
    'filled'               => 'O campo: atributo deve ter um valor.',
    'image'                => 'O :attribute tem que ser uma imagem.',
    'import_field_empty'    => 'O valor para :fieldname não pode ser nulo.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O campo: atributo não existe em: outro.',
    'integer'              => 'O :attribute tem que ser um inteiro.',
    'ip'                   => 'O :attribute tem que ser um IP válido.',
    'ipv4'                 => 'O atributo: deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O atributo deve ser um endereço IPv6 válido.',
    'is_unique_department' => 'O :attribute deve ser único para esta localização da empresa',
    'json'                 => 'O atributo: deve ser uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior do que :max.',
        'file'    => 'O :attribute não pode ter mais do que :max kilobytes.',
        'string'  => 'O :attribute não pode tem mais do que :max caracteres.',
        'array'   => 'O atributo: pode não ter mais do que: itens máximos.',
=======
    'boolean' => 'O campo: atributo deve ser verdadeiro ou falso.',
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
    'distinct' => 'O campo: atributo tem um valor duplicado.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'O :attribute selecionado é inválido.',
    'exists' => 'O :attribute é inválido.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'O campo: atributo deve ter um valor.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
<<<<<<< HEAD
    'starts_with'          => 'O :attribute deve começar com um dos seguintes: :values.',
    'ends_with'            => 'O :attribute deve terminar com um dos seguintes: :values.',

    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => ':attribute tem que ser um número.',
    'present'              => 'O campo: atributo deve estar presente.',
    'valid_regex'          => 'Este não é um código regex válido.',
    'regex'                => 'O formato do :attribute é inválido.',
    'required'             => ':attribute é obrigatório.',
    'required_if'          => 'O :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo: atributo é necessário a menos que: outro esteja em: valores.',
    'required_with'        => 'O :attribute é obrigatório quando :values existem.',
    'required_with_all'    => 'O campo: atributo é obrigatório quando: os valores estão presentes.',
    'required_without'     => 'O :attribute é obrigatório quando :values não existem.',
=======
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'import_field_empty'    => 'O valor para :fieldname não pode ser nulo.',
    'in' => 'O :attribute selecionado é inválido.',
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
    'not_in' => 'O :attribute selecionado é inválido.',
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

    'present' => 'O campo: atributo deve estar presente.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => ':attribute é obrigatório.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'O :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'O campo: atributo é necessário a menos que: outro esteja em: valores.',
    'required_with' => 'O :attribute é obrigatório quando :values existem.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'O :attribute é obrigatório quando :values não existem.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'required_without_all' => 'O campo: atributo é obrigatório quando nenhum de: valores estão presentes.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'O atributo deve ser uma string.',
<<<<<<< HEAD
    'timezone'             => 'O atributo: deve ser uma zona válida.',
    'two_column_unique_undeleted' => 'O :attribute deve ser único entre :table1 e :table2. ',
    'unique'               => 'Este :attribute já existe.',
    'uploaded'             => 'O atributo: não foi possível carregar.',
    'url'                  => 'O formato do :attribute é inválido.',
    'unique_undeleted'     => 'O :atribute deve ser único.',
    'non_circular'         => 'O :attribute não deve criar uma referência circular.',
    'not_array'            => ':atribute harus array.',
=======
    'two_column_unique_undeleted' => 'O :attribute deve ser único entre :table1 e :table2. ',
    'unique_undeleted'     => 'O :atribute deve ser único.',
    'non_circular'         => 'O :attribute não deve criar uma referência circular.',
    'not_array'            => ':attribute não pode ser um array.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'A senha não pode ser igual ao nome de utilizador.',
    'letters'              => 'A senha deve conter no mínimo uma letra.',
    'numbers'              => 'A senha deve conter no mínimo um símbolo.',
    'case_diff'            => 'A senha deve usar maiúsculas e minúsculas.',
    'symbols'              => 'A senha deve conter símbolos.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Valor não pode ser negativo'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'Este :attribute já existe.',
    'uploaded' => 'O atributo: não foi possível carregar.',
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
        'alpha_space' => 'O campo: atributo contém um caractere que não é permitido.',
        'email_array'      => 'Um ou mais endereços de e-mail são inválidos.',
        'hashed_pass'      => 'Sua senha atual está incorreta',
        'dumbpwd'          => 'Essa senha é muito comum.',
        'statuslabel_type' => 'Você deve selecionar um tipo de etiqueta de status válido',
        'custom_field_not_found'          => 'This field does not seem to exist, please double check your custom field names.',
        'custom_field_not_found_on_model' => 'This field seems to exist, but is not available on this Asset Model\'s fieldset.',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
<<<<<<< HEAD
        // We use this because the default error message for date_format is reflects php Y-m-d, which non-PHP
        // people won't know how to format. 
=======
        // We use this because the default error message for date_format reflects php Y-m-d, which non-PHP
        // people won't know how to format.
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
        'purchase_date.date_format'     => 'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
        'last_audit_date.date_format'   =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD hh:mm:ss',
        'expiration_date.date_format'   =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
        'termination_date.date_format'  =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
        'expected_checkin.date_format'  =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
        'start_date.date_format'        =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
        'end_date.date_format'          =>  'O :attribute deve ser uma data válida em formato YYYY-MM-DD',
<<<<<<< HEAD
=======
        'checkboxes'           => ':attribute contém opções inválidas.',
        'radio_buttons'        => ':attribute é inválido.',
        'invalid_value_in_field' => 'Valor inválido incluído neste campo',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

        'ldap_username_field' => [
            'not_in' =>         '<code>sAMAccountName</code> (mixed case) will likely not work. You should use <code>samaccountname</code> (lowercase) instead.'
        ],
        'ldap_auth_filter_query' => ['not_in' => '<code>uid=samaccountname</code> is probably not a valid auth filter. You probably want <code>uid=</code> '],
        'ldap_filter' => ['regex' => 'This value should probably not be wrapped in parentheses.'],

        ],
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

    /*
    |--------------------------------------------------------------------------
    | Generic Validation Messages - we use these in the jquery validation where we don't have
    | access to the :attribute
    |--------------------------------------------------------------------------
    */

    'generic' => [
        'invalid_value_in_field' => 'Valor inválido incluído neste campo',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


];
