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
    'accepted'             => 'Το: χαρακτηριστικό πρέπει να γίνει δεκτό.',
    'active_url'           => 'Η: το χαρακτηριστικό δεν έχει έγκυρη διεύθυνση URL.',
    'after'                => 'Η ιδιότητα: πρέπει να είναι ημερομηνία μετά την ημερομηνία.',
    'after_or_equal'       => 'Η ιδιότητα: πρέπει να είναι ημερομηνία μετά ή ίσο με: ημερομηνία.',
    'alpha'                => 'Η: το χαρακτηριστικό μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash'           => 'Το χαρακτηριστικό:: μπορεί να περιέχει μόνο γράμματα, αριθμούς και παύλες.',
    'alpha_num'            => 'Το χαρακτηριστικό:: μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array'                => 'Το χαρακτηριστικό πρέπει να είναι ένας πίνακας.',
    'before'               => 'Η ιδιότητα: πρέπει να είναι μια ημερομηνία πριν: η ημερομηνία.',
    'before_or_equal'      => 'Η ιδιότητα: πρέπει να είναι ημερομηνία πριν ή ίσο με: ημερομηνία.',
    'between'              => [
        'numeric' => 'Το χαρακτηριστικό πρέπει να είναι μεταξύ: min - :max.',
        'file'    => 'Το χαρακτηριστικό πρέπει να είναι μεταξύ: min και: max kilobytes.',
        'string'  => 'Η ιδιότητα: πρέπει να είναι μεταξύ: min και max χαρακτήρες.',
        'array'   => 'Η ιδιότητα: πρέπει να έχει μεταξύ: min και max στοιχεία.',
    ],
    'boolean'              => 'Το πεδίο ιδιοτήτων πρέπει να είναι αληθές ή ψευδές.',
    'confirmed'            => 'Η επιβεβαίωση του χαρακτηριστικού δεν αντιστοιχεί.',
    'date'                 => 'Το χαρακτηριστικό: δεν είναι έγκυρη.',
    'date_format'          => 'Το χαρακτηριστικό: δεν αντιστοιχεί στη μορφή: format.',
    'different'            => 'Το χαρακτηριστικό: και: άλλα πρέπει να είναι διαφορετικά.',
    'digits'               => 'Το χαρακτηριστικό: πρέπει να είναι: ψηφία ψηφία.',
    'digits_between'       => 'Το χαρακτηριστικό: πρέπει να είναι μεταξύ: min και max.',
    'dimensions'           => 'Το χαρακτηριστικό:: έχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct'             => 'Το πεδίο ιδιοτήτων: έχει διπλή τιμή.',
    'email'                => 'Το χαρακτηριστικό: πρέπει να είναι έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου.',
    'exists'               => 'Το επιλεγμένο: χαρακτηριστικό δεν είναι έγκυρο.',
    'file'                 => 'Το χαρακτηριστικό πρέπει να είναι ένα αρχείο.',
    'filled'               => 'Το πεδίο ιδιοτήτων πρέπει να έχει τιμή.',
    'image'                => 'Το: χαρακτηριστικό πρέπει να είναι μια εικόνα.',
    'import_field_empty'    => 'Η τιμή για :fieldname δεν μπορεί να είναι μηδενική.',
    'in'                   => 'Το χαρακτηριστικό επιλεγμένο: δεν είναι έγκυρο.',
    'in_array'             => 'Το πεδίο ιδιοτήτων: δεν υπάρχει σε: άλλο.',
    'integer'              => 'Το χαρακτηριστικό: πρέπει να είναι ένας ακέραιος αριθμός.',
    'ip'                   => 'Το χαρακτηριστικό: πρέπει να είναι μια έγκυρη διεύθυνση IP.',
    'ipv4'                 => 'Το χαρακτηριστικό: πρέπει να είναι μια έγκυρη διεύθυνση IPv4.',
    'ipv6'                 => 'Το χαρακτηριστικό: πρέπει να είναι μια έγκυρη διεύθυνση IPv6.',
    'is_unique_department' => 'Το :attribute πρέπει να είναι μοναδικό σε αυτή την Τοποθεσία Εταιρείας',
    'json'                 => 'Το χαρακτηριστικό: πρέπει να είναι μια έγκυρη συμβολοσειρά JSON.',
    'max'                  => [
        'numeric' => 'Η ιδιότητα: δεν μπορεί να είναι μεγαλύτερη από: max.',
        'file'    => 'Η ιδιότητα: δεν μπορεί να είναι μεγαλύτερη από: μέγιστα kilobyte.',
        'string'  => 'Το χαρακτηριστικό:: δεν μπορεί να είναι μεγαλύτερο από: max χαρακτήρες.',
        'array'   => 'Το χαρακτηριστικό:: δεν μπορεί να έχει περισσότερα από: max στοιχεία.',
    ],
    'mimes'                => 'Το χαρακτηριστικό: πρέπει να είναι ένα αρχείο τύπου:: τιμές.',
    'mimetypes'            => 'Το χαρακτηριστικό: πρέπει να είναι ένα αρχείο τύπου:: τιμές.',
    'min'                  => [
        'numeric' => 'Η ιδιότητα: πρέπει να είναι τουλάχιστον: min.',
        'file'    => 'Το χαρακτηριστικό πρέπει να είναι τουλάχιστον: min kilobytes.',
        'string'  => 'Το χαρακτηριστικό: πρέπει να είναι τουλάχιστον: min χαρακτήρες.',
        'array'   => 'Το χαρακτηριστικό: πρέπει να έχει τουλάχιστον: λεπτά στοιχεία.',
    ],
    'starts_with'          => 'Το :attribute πρέπει να ξεκινά με ένα από τα εξής: :values.',
    'ends_with'            => 'Το :attribute πρέπει να τελειώνει με ένα από τα εξής: :values.',

    'not_in'               => 'Το επιλεγμένο: χαρακτηριστικό δεν είναι έγκυρο.',
    'numeric'              => 'Το χαρακτηριστικό πρέπει να είναι ένας αριθμός.',
    'present'              => 'Πρέπει να υπάρχει το πεδίο ιδιοτήτων: attribute.',
    'valid_regex'          => 'Μη έγκυρη συμβολοσειρά χαρακτήρων ελέγχου πρότυπου. ',
    'regex'                => 'Η μορφή του χαρακτηριστικού είναι μη έγκυρη.',
    'required'             => 'Το πεδίο ιδιοτήτων: απαιτείται.',
    'required_if'          => 'Το πεδίο ιδιοτήτων: απαιτείται όταν: το άλλο είναι: τιμή.',
    'required_unless'      => 'Το πεδίο ιδιοτήτων: απαιτείται εκτός εάν: το άλλο είναι σε: τιμές.',
    'required_with'        => 'Το πεδίο ιδιοτήτων: απαιτείται όταν υπάρχουν: τιμές.',
    'required_with_all'    => 'Το πεδίο ιδιοτήτων: απαιτείται όταν υπάρχουν: τιμές.',
    'required_without'     => 'Το πεδίο ιδιοτήτων: απαιτείται όταν: δεν υπάρχουν τιμές.',
    'required_without_all' => 'Το πεδίο ιδιοτήτων είναι απαραίτητο όταν δεν υπάρχουν καμία από τις τιμές.',
    'same'                 => 'Το χαρακτηριστικό: και: άλλα πρέπει να ταιριάζουν.',
    'size'                 => [
        'numeric' => 'Το χαρακτηριστικό: πρέπει να είναι: μέγεθος.',
        'file'    => 'Το χαρακτηριστικό: πρέπει να είναι: kilobytes μεγέθους.',
        'string'  => 'Το χαρακτηριστικό: πρέπει να είναι: χαρακτήρες μεγέθους.',
        'array'   => 'Το χαρακτηριστικό: πρέπει να περιέχει: στοιχεία μεγέθους.',
    ],
    'string'               => 'Το χαρακτηριστικό πρέπει να είναι μια συμβολοσειρά.',
    'timezone'             => 'Το χαρακτηριστικό: πρέπει να είναι μια έγκυρη ζώνη.',
    'two_column_unique_undeleted' => 'Το :attribute πρέπει να είναι μοναδικό σε :table1 και :table2. ',
    'unique'               => 'Το χαρακτηριστικό: έχει ήδη ληφθεί.',
    'uploaded'             => 'Το χαρακτηριστικό:: απέτυχε να μεταφορτωθεί.',
    'url'                  => 'Η μορφή του χαρακτηριστικού είναι μη έγκυρη.',
    'unique_undeleted'     => 'Το :χαρακτηριστικό πρέπει να είναι μοναδικό.',
    'non_circular'         => 'Το χαρακτηριστικό: δεν πρέπει να δημιουργήσει μια κυκλική αναφορά.',
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
    'boolean' => 'Το πεδίο ιδιοτήτων πρέπει να είναι αληθές ή ψευδές.',
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
    'distinct' => 'Το πεδίο ιδιοτήτων: έχει διπλή τιμή.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'Το επιλεγμένο: χαρακτηριστικό δεν είναι έγκυρο.',
    'exists' => 'Το επιλεγμένο: χαρακτηριστικό δεν είναι έγκυρο.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'Το πεδίο ιδιοτήτων πρέπει να έχει τιμή.',
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
    'import_field_empty'    => 'Η τιμή για :fieldname δεν μπορεί να είναι μηδενική.',
    'in' => 'Το χαρακτηριστικό επιλεγμένο: δεν είναι έγκυρο.',
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
    'not_in' => 'Το επιλεγμένο: χαρακτηριστικό δεν είναι έγκυρο.',
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

    'present' => 'Πρέπει να υπάρχει το πεδίο ιδιοτήτων: attribute.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'Το πεδίο ιδιοτήτων: απαιτείται.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'Το πεδίο ιδιοτήτων: απαιτείται όταν: το άλλο είναι: τιμή.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'Το πεδίο ιδιοτήτων: απαιτείται εκτός εάν: το άλλο είναι σε: τιμές.',
    'required_with' => 'Το πεδίο ιδιοτήτων: απαιτείται όταν υπάρχουν: τιμές.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'Το πεδίο ιδιοτήτων: απαιτείται όταν: δεν υπάρχουν τιμές.',
    'required_without_all' => 'Το πεδίο ιδιοτήτων είναι απαραίτητο όταν δεν υπάρχουν καμία από τις τιμές.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string'               => 'Το χαρακτηριστικό πρέπει να είναι μια συμβολοσειρά.',
    'two_column_unique_undeleted' => 'Το :attribute πρέπει να είναι μοναδικό σε :table1 και :table2. ',
    'unique_undeleted'     => 'Το :χαρακτηριστικό πρέπει να είναι μοναδικό.',
    'non_circular'         => 'Το χαρακτηριστικό: δεν πρέπει να δημιουργήσει μια κυκλική αναφορά.',
    'not_array'            => ':attribute δεν μπορεί να είναι ένας πίνακας.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'disallow_same_pwd_as_user_fields' => 'Ο κωδικός πρόσβασης δεν μπορεί να είναι ο ίδιος με το όνομα χρήστη.',
    'letters'              => 'Ο κωδικός πρόσβασης πρέπει να περιέχει τουλάχιστον ένα γράμμα.',
    'numbers'              => 'Ο κωδικός πρόσβασης πρέπει να περιέχει τουλάχιστον έναν αριθμό.',
    'case_diff'            => 'Ο κωδικός πρόσβασης πρέπει να χρησιμοποιεί κεφαλαία μικτά.',
    'symbols'              => 'Ο κωδικός πρόσβασης πρέπει να περιέχει σύμβολα.',
<<<<<<< HEAD
    'gte'                  => [
        'numeric'          => 'Η τιμή δεν μπορεί να είναι αρνητική'
    ],
=======
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'Το χαρακτηριστικό: έχει ήδη ληφθεί.',
    'uploaded' => 'Το χαρακτηριστικό:: απέτυχε να μεταφορτωθεί.',
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
        'alpha_space' => 'Το πεδίο ιδιοτήτων: περιέχει ένα χαρακτήρα που δεν επιτρέπεται.',
        'email_array'      => 'Μία ή περισσότερες διευθύνσεις ηλεκτρονικού ταχυδρομείου δεν είναι έγκυρες.',
        'hashed_pass'      => 'Ο τρέχων κωδικός πρόσβασης είναι εσφαλμένος',
        'dumbpwd'          => 'Αυτός ο κωδικός πρόσβασης είναι πολύ συνηθισμένος.',
        'statuslabel_type' => 'Πρέπει να επιλέξετε έναν έγκυρο τύπο ετικέτας κατάστασης',
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
        'purchase_date.date_format'     => 'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
        'last_audit_date.date_format'   =>  'Το :attribute πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD hh:mm:ss',
        'expiration_date.date_format'   =>  'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
        'termination_date.date_format'  =>  'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
        'expected_checkin.date_format'  =>  'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
        'start_date.date_format'        =>  'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
        'end_date.date_format'          =>  'Το χαρακτηριστικό: πρέπει να είναι έγκυρη ημερομηνία σε μορφή YYYY-MM-DD',
<<<<<<< HEAD

    ],

=======
        'checkboxes'           => ':attribute περιέχει μη έγκυρες επιλογές.',
        'radio_buttons'        => ':attribute δεν είναι έγκυρο.',
        'invalid_value_in_field' => 'Μη έγκυρη τιμή που περιλαμβάνεται σε αυτό το πεδίο',

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
        'invalid_value_in_field' => 'Μη έγκυρη τιμή που περιλαμβάνεται σε αυτό το πεδίο',
        'required' => 'This field is required',
        'email' => 'Please enter a valid email address',
    ],


>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
];
