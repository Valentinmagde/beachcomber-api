<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => "Le :attribute doit être acceptée.",
    'accepted_if' => "Le :attribute doit être accepté lorsque :other est :value.",
    'active_url' => "Le :attribute n'est pas une URL valide.",
    'after' => "Le :attribute doit être une date postérieure à :date.",
    'after_or_equal' => "Le :attribute doit être une date postérieure ou égale à  :date.",
    'alpha' => "Le :attribute ne doit contenir que des lettres.",
    'alpha_dash' => "Le :attribute ne doit contenir que des lettres, des chiffres, des tirets et des caractères de soulignement.",
    'alpha_num' => "Le :attribute ne doit contenir que des lettres et des chiffres.",
    'array' => "Le :attribute doit être un tableau.",
    'before' => "Le :attribute doit être une date antérieure à :date.",
    'before_or_equal' => "Le :attribute doit être une date antérieure ou égale à :date.",
    'between' => [
        'numeric' => "Le :attribute doit être comprise entre :min et :max.",
        'file' => "Le :attribute doit être comprise entre :min et :max kilo-octets.",
        'string' => "Le :attribute doit être comprise entre :min et :max characters.",
        'array' => "Le :attribute doit avoir entre :min et :max items.",
    ],
    'boolean' => 'Le :attribute doit être vrai ou faux.',
    'confirmed' => "La confirmation de :attribute ne correspond pas.",
    'current_password' => 'Le le mot de passe est incorrect.',
    'date' => "Le :attribute n'est pas une date valide.",
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le :attribute et :other doivent être différentes.',
    'digits' => 'Le :attribute doit être :digits chiffres.',
    'digits_between' => 'Le :attribute doit être comprise entre :min et :max chiffres.',
    'dimensions' => "Le :attribute a des dimensions d'image invalides.",
    'distinct' => 'Le :attribute a une valeur en double.',
    'email' => 'Le :attribute doit être une adresse électronique valide.',
    'ends_with' => "Le :attribute doit se terminer par l'un des éléments suivants : :values.",
    'enum' => 'La sélection :attribute est invalid.',
    'exists' => 'La sélection :attribute est invalid.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit être supérieure à :value.',
        'file' => 'Le :attribute doit être supérieure à :value kilo-octets.',
        'string' => 'Le :attribute doit être supérieure à :value caractères.',
        'array' => 'Le :attribute doit avoir plus que :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieure ou égale à :value.',
        'file' => 'Le :attribute doit être supérieure ou égale à :value kilo-octets.',
        'string' => 'Le :attribute doit être supérieure ou égale à :value caractères.',
        'array' => 'Le :attribute doit avoir :value ou plus.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => "Le :attribute sélectionné n'est pas valide.",
    'in_array' => "Le :attribute n'existe pas dans :other.",
    'integer' => 'Le :attribute doit être un nombre entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
        'array' => 'Le :attribute ne doit pas avoir plus de :value items.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
        'numeric' => 'Le :attribute ne doit pas être supérieure à :max.',
        'file' => 'Le :attribute ne doit pas être supérieure à :max kilo-octets.',
        'string' => 'Le :attribute ne doit pas être supérieure à :max caractères',
        'array' => 'Le :attribute ne doit pas avoir plus de :max éléments.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file' => 'Le :attribute doit être au moins :min kilo-octets.',
        'string' => 'Le :attribute doit être au moins :min caractères',
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
    ],
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => "Le:attribute sélectionné n'est pas valide.",
    'not_regex' => 'Le :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le :attribute doit être présent.',
    'prohibited' => 'Le :attribute est interdite.',
    'prohibited_if' => 'Le :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le :attribute Le champ est interdit sauf si :other est en :values.',
    'prohibits' => "Le :attribute Le champ interdit :other d'être présent.",
    'regex' => 'Le :attribute est invalide.',
    'required' => 'Le :attribute est obligatoire.',
    'required_array_keys' => 'Le :attribute doit contenir des entrées pour: :values.',
    'required_if' => 'Le :attribute Le champ est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le :attribute Le champ est obligatoire sauf si :other est en :values.',
    'required_with' => 'Le :attribute Le champ est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le :attribute Le champ est obligatoire lorsque :values sont présents.',
    'required_without' => "Le :attribute Le champ est obligatoire lorsque :values n'est pas présent.",
    'required_without_all' => "Le :attribute est requis lorsqu'aucun des champs :values sont présents.",
    'same' => 'Le :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Le :attribute doit être :size.',
        'file' => 'Le :attribute doit être :size kilo-octets.',
        'string' => 'Le :attribute doit être :size caractères.',
        'array' => 'Le :attribute doit contenir :size éléments.',
    ],
    'starts_with' => "Le :attribute doit commencer par l'un des éléments suivants: :values.",
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été prise.',
    'uploaded' => 'Le :attribute a échoué à télécharger.',
    'url' => 'Le :attribute doit être une URL valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
