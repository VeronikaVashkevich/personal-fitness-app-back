<?php

return [

    'accepted' => 'Вы должны принять :attribute',
    'accepted_if' => 'Вы должны принять:attribute, если :other выбран как :value.',
    'active_url' => 'Поле :attribute недействительный URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равно :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефис и нижние подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой до или равное :date.',
    'between' => [
        'array' => 'Поле :attribute должно содержать :min - :max элементов.',
        'file' => 'Размер :attribute должнен быть от :min до :max Килобайт.',
        'numeric' => 'Поле :attribute должно быть от :min до :max.',
        'string' => 'Длина :attribute должна быть от :min до :max символов.',
    ],
    'boolean' => 'Значение поля :attribute должно принимать значения истина либо ложь.',
    'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
    'current_password' => 'Пароль неверный.',
    'date' => 'Поле :attribute не является датой.',
    'date_equals' => 'Значечние поля :attribute должно быть датой, равной :date.',
    'date_format' => 'Значение поля :attribute не соответсвует формату :format.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, если значение :other равно :value.',
    'different' => 'Поля :attribute и :other должны быть должны иметь разные значения.',
    'digits' => 'Длина цифрового поля :attribute должна быть :digits цифр.',
    'digits_between' => 'Длина цифрового поля :attribute должна быть между :min и :max цифр.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'doesnt_end_with' => 'Поле :attribute не должно оканчиваиться на: :values.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться с: :values.',
    'email' => 'Поле :attribute не является электронной почтой.',
    'ends_with' => 'Поле :attribute должно оканчиваться на: :values.',
    'enum' => 'Выбранное значение :attribute неверное.',
    'exists' => 'Выбранное :attribute не существует.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute является обязательным.',
    'gt' => [
        'array' => 'Поле :attribute должно содержать более элементов, чем :value.',
        'file' => 'Размер поля :attribute должен быть более :value килобайт.',
        'numeric' => 'Значение :attribute должно быть более :value.',
        'string' => 'Длина :attribute должна быть более :value символов.',
    ],
    'gte' => [
        'array' => 'Поле :attribute должно содержать :value элементов или более.',
        'file' => 'Размер поля :attribute должен быть больше или равен :value килобайт.',
        'numeric' => 'Значение :attribute должно быть больше или равно :value.',
        'string' => 'Длина :attribute должна быть больше или равна :value символов.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение :attribute неверное.',
    'in_array' => 'Значение :attribute не существует в :other.',
    'integer' => 'Значение проя :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть IPv6-адресом.',
    'json' => 'Поле :attribute должно быть JSON строкой.',
    'lt' => [
        'array' => 'Поле :attribute должно содержать менее :value элементов.',
        'file' => 'Размер :attribute должен быть менее :value килобайт.',
        'numeric' => 'Поле :attribute должно быть менее :value.',
        'string' => 'Длина :attribute должна быть менее :value символов.',
    ],
    'lte' => [
        'array' => 'Поле :attribute должно содержать не более :value элементов.',
        'file' => 'Размер :attribute должен быть менее или равен :value килобайт.',
        'numeric' => 'Поле :attribute должно быть менее или равно :value.',
        'string' => 'Длина :attribute должна быть менее или равна :value символов.',
    ],
    'mac_address' => 'Поле :attribute должно быть корректным MAC-адресом.',
    'max' => [
        'array' => 'Поле :attribute не должно содержать более :max элементов.',
        'file' => 'Размер :attribute должен быть не более :max килобайт.',
        'numeric' => 'Поле :attribute не должно быть более :max.',
        'string' => 'Длина :attribute не должна быть более :max символов.',
    ],
    'max_digits' => 'Цифровое поле :attribute должно иметь длину не более :max цифр.',
    'mimes' => 'Поле :attribute должно иметь один из типов: :values.',
    'mimetypes' => 'Поле :attribute должно иметь один из типов: :values.',
    'min' => [
        'array' => 'Поле :attribute должно содержать не менее :min элементов.',
        'file' => 'Размер :attribute должен быть не менее :min килобайт.',
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'string' => 'Длина :attribute должна быть не менее :min символов.',
    ],
    'min_digits' => 'Цифровое поле :attribute должно иметь длину не менее :min цифр.',
    'multiple_of' => 'Значение поля :attribute должно быть кратным :value.',
    'not_in' => 'Выбранное значение поля :attribute некорректное.',
    'not_regex' => 'Значение поля :attribute не соответствует формату.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать как минимум одну букву.',
        'mixed' => 'Поле :attribute должно содержать как минимум одну строчную и одну прописную буквы.',
        'numbers' => 'Поле :attribute должно содержать как минимум одну цифру.',
        'symbols' => 'Поле :attribute должно содержать как минимум один символ.',
        'uncompromised' => 'Введенное значение :attribute замечен в утечке данных. Пожалуйста, выберите другое значение поля :attribute.',
    ],
    'present' => 'Поле :attribute должно присутствовать.',
    'prohibited' => 'Поле :attribute имеет запрещенное значение.',
    'prohibited_if' => 'Значение поля :attribute запрещено, если :other имеет значение :value.',
    'prohibited_unless' => 'Значение поля :attribute запрещено, пока :other в пределах :values.',
    'prohibits' => 'Значение :attribute запрещает :other.',
    'regex' => 'Значение поля :attribute не соответствует формату.',
    'required' => 'Значение поля :attribute обязательно.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле :attribute обязательно, если :other равно :value.',
    'required_if_accepted' => 'Поле :attribute обязательно, если :other принято.',
    'required_unless' => 'Поле :attribute обязательно, если значение :other в пределах :values.',
    'required_with' => 'Поле :attribute обязательно, если присутстсвует :values.',
    'required_with_all' => 'Поле :attribute обязательно, если присутствуют :values.',
    'required_without' => 'Поле :attribute обязательно, если нет :values.',
    'required_without_all' => 'Поле :attribute обязательно, если нет ни одного :values.',
    'same' => 'Поле :attribute и :other должны совпадать.',
    'size' => [
        'array' => 'Размер :attribute должен быть :size элементов.',
        'file' => 'Размер файа :attribute должен быть :size килобайт.',
        'numeric' => 'Значение :attribute должно быть :size.',
        'string' => 'Длина :attribute должна быть :size символов.',
    ],
    'starts_with' => 'Поле :attribute должна начинаться с одного из значений: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть корректным часовым поясом.',
    'unique' => 'Значение поля :attribute уже существует.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => 'Поле :attribute имеет неверный формат URL.',
    'uuid' => 'Поле :attribute имеет неверный формат UUID.',

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
