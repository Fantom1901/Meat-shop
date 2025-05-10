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

    'accepted' => 'Атрибут :attribute должен быть принят.',
    'accepted_if' => 'Атрибут :attribute должен быть принят, когда :other равно :value.',
    'active_url' => 'Атрибут :attribute не является действительным URL.',
    'after' => 'Атрибут :attribute должен быть датой после :date.',
    'after_or_equal' => 'Атрибут :attribute должен быть датой после или равной :date.',
    'alpha' => 'Атрибут :attribute должен содержать только буквы.',
    'alpha_dash' => 'Атрибут :attribute должен содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => 'Атрибут :attribute должен содержать только буквы и цифры.',
    'array' => 'Атрибут :attribute должен быть массивом.',
    'before' => 'Атрибут :attribute должен быть датой до :date.',
    'before_or_equal' => 'Атрибут :attribute должен быть датой до или равной :date.',
    'between' => [
        'array' => 'Атрибут :attribute должен содержать от :min до :max элементов.',
        'file' => 'Атрибут :attribute должен быть размером от :min до :max килобайт.',
        'numeric' => 'Атрибут :attribute должен быть в диапазоне от :min до :max.',
        'string' => 'Атрибут :attribute должен содержать от :min до :max символов.',
    ],
    'boolean' => 'Поле атрибута :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение атрибута :attribute не совпадает.',
    'current_password' => 'Пароль неверен.',
    'date' => 'Атрибут :attribute не является действительной датой.',
    'date_equals' => 'Атрибут :attribute должен быть датой, равной :date.',
    'date_format' => 'Атрибут :attribute не соответствует формату :format.',
    'declined' => 'Атрибут :attribute должен быть отклонен.',
    'declined_if' => 'Атрибут :attribute должен быть отклонен, когда :other равно :value.',
    'different' => 'Атрибуты :attribute и :other должны отличаться.',
    'digits' => 'Атрибут :attribute должен содержать :digits цифр.',
    'digits_between' => 'Атрибут :attribute должен содержать от :min до :max цифр.',
    'dimensions' => 'У атрибута :attribute недопустимые размеры изображения.',
    'distinct' => 'Поле атрибута :attribute имеет дублирующее значение.',
    'email' => 'Атрибут :attribute должен быть действительным адресом электронной почты.',
    'ends_with' => 'Атрибут :attribute должен заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранный атрибут :attribute недействителен.',
    'exists' => 'Выбранный атрибут :attribute недействителен.',
    'file' => 'Атрибут :attribute должен быть файлом.',
    'filled' => 'Поле атрибута :attribute должно иметь значение.',
    'gt' => [
        'array' => 'Атрибут :attribute должен содержать более чем :value элементов.',
        'file' => 'Атрибут :attribute должен быть больше чем :value килобайт.',
        'numeric' => 'Атрибут :attribute должен быть больше чем :value.',
        'string' => 'Атрибут :attribute должен содержать более чем :value символов.',
    ],
    'gte' => [
        'array' => 'Атрибут :attribute должен содержать не менее чем :value элементов.',
        'file' => 'Атрибут :attribute должен быть больше или равен :value килобайт.',
        'numeric' => 'Атрибут :attribute должен быть больше или равен :value.',
        'string' => 'Атрибут :attribute должен содержать не менее чем :value символов.',
    ],
    'image' => 'Атрибут :attribute должен быть изображением.',
    'in' => 'Выбранный атрибут :attribute недействителен.',
    'in_array' => 'Поле атрибута :attribute не существует в :other.',
    'integer' => 'Атрибут :attribute должен быть целым числом.',
    'ip' => 'Атрибут :attribute должен быть действительным IP-адресом.',
    'ipv4' => 'Атрибут :attribute должен быть действительным IPv4-адресом.',
    'ipv6' => 'Атрибут :attribute должен быть действительным IPv6-адресом.',
    'json' => 'Атрибут :attribute должен быть действительной строкой JSON.',
    'lt'=> [
        'array' => 'Атрибут :attribute должен содержать менее чем :value элементов.',
        'file' => 'Атрибут :attribute должен быть меньше чем :value килобайт.',
        'numeric' => 'Атрибут :attribute должен быть меньше чем :value.',
        'string' => 'Атрибут :attribute должен содержать менее чем :value символов.',
    ],
    'lte' => [    'array' => 'Атрибут :attribute не должен содержать более чем :value элементов.',
        'file' => 'Атрибут :attribute должен быть меньше или равен :value килобайт.',
        'numeric' => 'Атрибут :attribute должен быть меньше или равен :value.'
    ],
    'string' => 'Атрибут :attribute должен содержать не более :value символов.',
    'mac_address' => 'Атрибут :attribute должен быть действительным MAC-адресом.',
    'max' => [
        'array' => 'Атрибут :attribute не должен содержать более :max элементов.',
        'file' => 'Атрибут :attribute не должен превышать :max килобайт.',
        'numeric' => 'Атрибут :attribute не должен быть больше чем :max.',
        'string' => 'Атрибут :attribute не должен содержать более :max символов.',
    ],
    'mimes' => 'Атрибут :attribute должен быть файлом типа: :values.',
    'mimetypes' => 'Атрибут :attribute должен быть файлом типа: :values.',
    'min' => [
        'array' => 'Атрибут :attribute должен содержать как минимум :min элементов.',
        'file' => 'Атрибут :attribute должен быть не менее :min килобайт.',
        'numeric' => 'Атрибут :attribute должен быть не менее :min.',
        'string' => 'Атрибут :attribute должен содержать не менее :min символов.',
    ],
    'multiple_of' => 'Атрибут :attribute должен быть кратным :value.',
    'not_in' => 'Выбранный атрибут :attribute недействителен.',
    'not_regex' => 'Формат атрибута :attribute недействителен.',
    'numeric' => 'Атрибут :attribute должен быть числом.',
    'present' => 'Поле атрибута :attribute должно присутствовать.',
    'prohibited' => 'Поле атрибута :attribute запрещено.',
    'prohibited_if' => 'Поле атрибута :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' => 'Поле атрибута :attribute запрещено, если только :other не находится в :values.',
    'prohibits' => 'Поле атрибута :attribute запрещает присутствие :other.',
    'regex' => 'Формат атрибута :attribute недействителен.',
    'required' => 'Поле атрибута :attribute обязательно для заполнения.',
    'required_array_keys' => 'Поле атрибута :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле атрибута :attribute обязательно, когда :other равно :value.',
    'required_unless' => 'Поле атрибута :attribute обязательно, если только :other не находится в :values.',
    'required_with' => 'Поле атрибута :attribute обязательно, когда присутствует :values.',
    'required_with_all' => 'Поле атрибута :attribute обязательно, когда присутствуют :values.',
    'required_without' => 'Поле атрибута :attribute обязательно, когда отсутствует :values.',
    'required_without_all' => 'Поле атрибута :attribute обязательно, когда ни одно из :values не присутствует.',
    'same' => 'Атрибуты :attribute и :other должны совпадать.',
    'size' => [
        'array' => 'Атрибут :attribute должен содержать :size элементов.',
        'file' => 'Атрибут :attribute должен быть равен :size килобайт.',
        'numeric' => 'Атрибут :attribute должен быть равен :size.',
        'string' => 'Атрибут :attribute должен содержать ровно :size символов.',
    ],
    'starts_with' => 'Атрибут :attribute должен начинаться с одного из следующих значений: :values.',
    'timezone' => 'Атрибут :attribute должен быть действительным часовым поясом.',
    'unique' => 'Атрибут :attribute уже занят.',
    'uploaded' => 'Не удалось загрузить атрибут :attribute.',
    'url' => 'Атрибут :attribute должен быть действительным URL-адресом.',
    'uuid' => 'Атрибут :attribute должен быть действительным UUID.',




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
