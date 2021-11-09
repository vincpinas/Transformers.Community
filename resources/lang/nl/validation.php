<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Het following language lines contain het default error messages used by
    | het validator class. Some van these rules have multiple versions such
    | as het size rules. Feel free to tweak each van these messages here.
    |
    */

    'accepted' => 'Het :attribute moet geaccepteerd worden.',
    'accepted_if' => 'Het :attribute moet geaccepteerd worden wanneer :other is :value.',
    'active_url' => 'Het :attribute is niet een geldig URL.',
    'after' => 'Het :attribute moet een date na :date zijn.',
    'after_or_equal' => 'Het :attribute moet een date na of gelijk aan :date zijn.',
    'alpha' => 'Het :attribute moet only contain letters.',
    'alpha_dash' => 'Het :attribute moet only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'Het :attribute moet only contain letters and numbers.',
    'array' => 'Het :attribute moet an array zijn.',
    'before' => 'Het :attribute moet een date before :date zijn.',
    'before_or_equal' => 'Het :attribute moet een date before of gelijk aan to :date zijn.',
    'between' => [
        'numeric' => 'Het :attribute moet between :min and :max zijn.',
        'file' => 'Het :attribute moet between :min and :max kilobytes zijn.',
        'string' => 'Het :attribute moet between :min and :max characters zijn.',
        'array' => 'Het :attribute moet have between :min and :max items.',
    ],
    'boolean' => 'Het :attribute veld moet true of false zijn.',
    'confirmed' => 'Het :attribute confirmation does niet overeenkomen.',
    'current_password' => 'Het wachtwoord is incorrect.',
    'date' => 'Het :attribute is niet een geldig date.',
    'date_equals' => 'Het :attribute moet een date gelijk aan to :date zijn.',
    'date_format' => 'Het :attribute does niet overeenkomen het format :format.',
    'different' => 'Het :attribute and :other moet anders zijn.',
    'digits' => 'Het :attribute moet :digits digits zijn.',
    'digits_between' => 'Het :attribute moet zijn between :min and :max digits.',
    'dimensions' => 'Het :attribute heeft invalid image dimensions.',
    'distinct' => 'Het :attribute veld heeft een dubbele waarde.',
    'email' => 'Het :attribute moet een geldig email address zijn.',
    'ends_with' => 'Het :attribute moet end with one van het following: :values.',
    'exists' => 'Het geselecteerde :attribute is invalid.',
    'file' => 'Het :attribute moet een file zijn.',
    'filled' => 'Het :attribute veld moet een waarde hebben.',
    'gt' => [
        'numeric' => 'Het :attribute moet groter dan :value zijn.',
        'file' => 'Het :attribute moet groter dan :value kilobytes zijn.',
        'string' => 'Het :attribute moet groter dan :value characters zijn.',
        'array' => 'Het :attribute moet have meer dan :value items.',
    ],
    'gte' => [
        'numeric' => 'Het :attribute moet groter dan of gelijk aan :value zijn.',
        'file' => 'Het :attribute moet groter dan of gelijk aan :value kilobytes zijn.',
        'string' => 'Het :attribute moet groter dan of gelijk aan :value characters zijn.',
        'array' => 'Het :attribute moet have :value items of meer.',
    ],
    'image' => 'Het :attribute moet an image zijn.',
    'in' => 'Het geselecteerde :attribute is invalid.',
    'in_array' => 'Het :attribute veld does niet exist in :other.',
    'integer' => 'Het :attribute moet an integer zijn.',
    'ip' => 'Het :attribute moet een geldig IP address zijn.',
    'ipv4' => 'Het :attribute moet een geldig IPv4 address zijn.',
    'ipv6' => 'Het :attribute moet een geldig IPv6 address zijn.',
    'json' => 'Het :attribute moet een geldig JSON string zijn.',
    'lt' => [
        'numeric' => 'Het :attribute moet minder dan :value zijn.',
        'file' => 'Het :attribute moet minder dan :value kilobytes zijn.',
        'string' => 'Het :attribute moet minder dan :value characters zijn.',
        'array' => 'Het :attribute moet have minder dan :value items.',
    ],
    'lte' => [
        'numeric' => 'Het :attribute moet minder dan of gelijk aan :value zijn.',
        'file' => 'Het :attribute moet minder dan of gelijk aan :value kilobytes zijn.',
        'string' => 'Het :attribute moet minder dan of gelijk aan :value characters zijn.',
        'array' => 'Het :attribute moet niet meer dan :value items zijn.',
    ],
    'max' => [
        'numeric' => 'Het :attribute moet niet zijn groter dan :max.',
        'file' => 'Het :attribute moet niet zijn groter dan :max kilobytes.',
        'string' => 'Het :attribute moet niet zijn groter dan :max characters.',
        'array' => 'Het :attribute moet niet have meer dan :max items.',
    ],
    'mimes' => 'Het :attribute moet een file van type: :values zijn.',
    'mimetypes' => 'Het :attribute moet zijn een file van type: :values.',
    'min' => [
        'numeric' => 'Het :attribute moet at least :min zijn.',
        'file' => 'Het :attribute moet at least :min kilobytes zijn.',
        'string' => 'Het :attribute moet at least :min characters zijn.',
        'array' => 'Het :attribute moet have at least :min items.',
    ],
    'multiple_of' => 'Het :attribute moet een multiple van :value zijn.',
    'not_in' => 'Het geselecteerde :attribute is invalid.',
    'not_regex' => 'Het :attribute format is invalid.',
    'numeric' => 'Het :attribute moet een number zijn.',
    'password' => 'Het wachtwoord is incorrect.',
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'regex' => 'Het :attribute format is invalid.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_if' => 'Het :attribute veld is verplicht when :other is :value.',
    'required_unless' => 'Het :attribute veld is verplicht unless :other is in :values.',
    'required_with' => 'Het :attribute veld is verplicht when :values is aanwezig.',
    'required_with_all' => 'Het :attribute veld is verplicht when :values are aanwezig.',
    'required_without' => 'Het :attribute veld is verplicht when :values is niet aanwezig.',
    'required_without_all' => 'Het :attribute veld is verplicht when none van :values are aanwezig.',
    'prohibited' => 'Het :attribute veld is verboden.',
    'prohibited_if' => 'Het :attribute veld is verboden when :other is :value.',
    'prohibited_unless' => 'Het :attribute veld is verboden unless :other is in :values.',
    'prohibits' => 'Het :attribute veld prohibits :other from being aanwezig.',
    'same' => 'Het :attribute and :other moeten overeenkomen.',
    'size' => [
        'numeric' => 'Het :attribute moet :size zijn.',
        'file' => 'Het :attribute moet :size kilobytes zijn.',
        'string' => 'Het :attribute moet :size characters zijn.',
        'array' => 'Het :attribute moet contain :size items.',
    ],
    'starts_with' => 'Het :attribute moet start with one van het following: :values.',
    'string' => 'Het :attribute moet een string zijn.',
    'timezone' => 'Het :attribute moet een geldig timezone zijn.',
    'unique' => 'Het :attribute heeft already been taken.',
    'uploaded' => 'Het :attribute failed to upload.',
    'url' => 'Het :attribute moet een geldig URL zijn.',
    'uuid' => 'Het :attribute moet een geldig UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using het
    | convention "attribute.rule" to name het lines. This makes it quick to
    | specify een specific custom language line for een given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Het following language lines are used to swap our attribute placeholder
    | with something meer reader friendly such as "E-Mail Address" instead
    | van "email". This simply helps us make our message meer expressive.
    |
    */

    'attributes' => [],

];
