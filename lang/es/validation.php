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

    "accepted"=>  ":Attribute debe ser aceptado.",
    "accepted_if"=>  ":Attribute debe ser aceptado cuando :other sea :value.",
    "active_url"=>  ":Attribute no es una URL válida.",
    "after"=> ":Attribute debe ser una fecha posterior a :date.",
    "after_or_equal"=> ":Attribute debe ser una fecha posterior o igual a :date.",
    "alpha"=> ":Attribute sólo debe contener letras.",
    "alpha_dash"=> ":Attribute sólo debe contener letras, números, guiones y guiones bajos.",
    "alpha_num"=> ":Attribute sólo debe contener letras y números.",
    "are_you_sure_you_want_to_delete_member"=> "¿Está seguro que quiere eliminar este miembro del equipo?",
    "are_you_sure_you_want_to_delete_team"=> "¿Está seguro que quiere eliminar este equipo?",
    "are_you_sure_you_want_to_leave_team"=> "¿Está seguro que quiere abandonar este equipo?",
    "array"=> ":Attribute debe ser un conjunto.",
    "ascii"=> "El campo :attribute solo debe contener caracteres alfanuméricos y símbolos de un solo byte.",
    "attached"=> "Este :attribute ya se adjuntó.",
    "attributes.team"=> "equipo",
    "before"=> ":Attribute debe ser una fecha anterior a :date.",
    "before_or_equal"=> ":Attribute debe ser una fecha anterior o igual a :date.",
    'between' => [
        "array"=> ":Attribute tiene que tener entre :min - :max elementos.",
        "file"=> ":Attribute debe pesar entre :min - :max kilobytes.",
        "numeric"=> ":Attribute tiene que estar entre :min - :max.",
        "string"=> ":Attribute tiene que tener entre :min - :max caracteres.",
    ],
    "boolean"=> "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"=> "La confirmación de :attribute no coincide.",
    "country"=> "El campo :attribute no es un país válido.",
    "create_team"=> "Crear equipo",
    "current_password"=> "La contraseña es incorrecta.",
    "current_teams"=> " Equipos actuales",
    "date"=> ":Attribute no es una fecha válida.",
    "date_equals"=> ":Attribute debe ser una fecha igual a :date.",
    "date_format"=> ":Attribute no corresponde al formato :format.",
    "decimal"=> "El campo :attribute debe tener :decimal cifras decimales.",
    "declined"=> ":Attribute debe ser rechazado.",
    "declined_if"=> ":Attribute debe ser rechazado cuando :other sea :value.",
    "delete_team"=> " Eliminar equipo",
    "different"=> ":Attribute y :other deben ser diferentes.",
    "digits"=> ":Attribute debe tener :digits dígitos.",
    "digits_between"=> ":Attribute debe tener entre :min y :max dígitos.",
    "dimensions"=> "Las dimensiones de la imagen :attribute no son válidas.",
    "distinct"=> "El campo :attribute contiene un valor duplicado.",
    "doesnt_end_with"=> "El campo :attribute no puede finalizar con uno de los siguientes: :values.",
    "doesnt_start_with"=> "El campo :attribute no puede comenzar con uno de los siguientes: :values.",
    "edit_team_member"=> " Editar miembro del equipo",
    "email"=> ":Attribute no es un correo válido.",
    "ends_with"=> "El campo :attribute debe finalizar con uno de los siguientes valores: :values",
    "enum"=> "El :attribute seleccionado es inválido.",
    "exists"=> "El :attribute seleccionado es inválido.",
    "failed"=> "Estas credenciales no coinciden con nuestros registros.",
    "file"=> "El campo :attribute debe ser un archivo.",
    "filled"=> "El campo :attribute es obligatorio.",
    'gt' => [
        "array"=>"El campo :attribute debe tener más de :value elementos.",
        "file"=> "El campo :attribute debe tener más de :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser mayor que :value.",
        "string"=> "El campo :attribute debe tener más de :value caracteres.",
    ],
    'gte' => [
        "array"=> "El campo :attribute debe tener como mínimo :value elementos.",
        "file"=> "El campo :attribute debe tener como mínimo :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser como mínimo :value.",
        "string"=> "El campo :attribute debe tener como mínimo :value caracteres.",
    ],
    "if_you_delete_team_all_data_will_be_deleted"=> "Si usted elige borrar el equipo, todos los datos se eliminarán de manera permanente.",
    "image"=> ":Attribute debe ser una imagen.",
    "in"=> ":Attribute es inválido.",
    "in_array"=> "El campo :attribute no existe en :other.",
    "integer"=> ":Attribute debe ser un número entero.",
    "ip"=> ":Attribute debe ser una dirección IP válida.",
    "ipv4"=> ":Attribute debe ser una dirección IPv4 válida.",
    "ipv6"=> ":Attribute debe ser una dirección IPv6 válida.",
    "json"=> "El campo :attribute debe ser una cadena JSON válida.",
    "leave_team"=> " Abandonar equipo",
    "looks_like_you_are_not_part_of_team"=> "¡Parece que usted no es parte de ningún equipo!",
    "lowercase"=> "El campo :attribute debe estar en minúscula.",
    'lt' => [
        "array"=> "El campo :attribute debe tener menos de :value elementos.",
        "file"=> "El campo :attribute debe tener menos de :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser menor que :value.",
        "string"=> "El campo :attribute debe tener menos de :value caracteres.",
    ],
    'lte' => [
        "array"=> "El campo :attribute debe tener menos de :value elementos.",
        "file"=> "El campo :attribute debe tener menos de :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser menor que :value.",
        "string"=> "El campo :attribute debe tener menos de :value caracteres.",
    ],
    "mac_address"=> "El campo :attribute debe ser una dirección MAC válida.",
    'max' => [
        "array"=> "El campo :attribute debe tener menos de :value elementos.",
        "file"=> "El campo :attribute debe tener menos de :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser menor que :value.",
        "string"=> "El campo :attribute debe tener menos de :value caracteres.",
    ],
    "max_digits"=> "El campo :attribute no debe tener más de :max dígitos.",
    "member"=> " Miembro",
    "mimes"=> ":Attribute debe ser un archivo con formato: :values.",
    'min' => [
        "array"=> "El campo :attribute debe tener al menos de :value elementos.",
        "file"=> "El campo :attribute debe tener al menos de :value kilobytes.",
        "numeric"=> "El campo :attribute debe ser menor que :value.",
        "string"=> "El campo :attribute debe tener al menos de :value caracteres.",
    ],
    "min_digits"=> "El campo :attribute debe tener al menos :min dígitos.",
    "multiple_of"=> "El valor :attribute debe ser múltiplo de :value",
    "not_in"=> "El valor seleccionado es inválido.",
    "not_regex"=> "Este formato es inválido.",
    "numeric"=> "Debe ser un número.",
    'password' => [
        "letters"=> "Este campo debe contener al menos una letra.",
        "mixed"=> "Este campo debe contener al menos una letra mayúscula y una minúscula.",
        "numbers"=> "Este campo debe contener al menos un número.",
        "symbols"=> "Este campo debe contener al menos un símbolo.",
        "uncompromised"=> "El texto ingresado se ha visto comprometido en una filtración de datos (data leak). Elija uno distinto.",
        ],
        "present"=> "El campo :attributes debe estar presente.",
        "prohibited"=> "El campo :attributes está prohibido",
        "prohibited_if"=> "El campo :attributes está prohibido cuando :other es :value.",
        "prohibited_unless"=> "El campo :attributes está prohibido a menos que :other sea :values.",
        "prohibits"=> "El campo :attributes prohibe que :other esté presente.",
        "regex"=> "Este formato es inválido.",
        "relatable"=> "El campo :attributes no se puede asociar con este recurso.",
        "required"=> "El campo :attributes es requerido.",
        "required_array_keys"=> "El campo :attributes debe contener entradas para: :values.",
        "required_if"=> "El campo :attributes es requerido cuando :other es :value.",
        "required_if_accepted"=> "El campo :attributes es obligatorio si :other es aceptado.",
        "required_unless"=> "El campo :attributes es requerido a menos que :other esté en :values.",
        "required_with"=> "El campo :attributes es requerido cuando :values está presente.",
        "required_with_all"=> "El campo :attributes es requerido cuando :values están presentes.",
        "required_without"=> "El campo :attributes es requerido cuando :values no está presente.",
        "required_without_all"=> "El campo :attributes es requerido cuando ninguno de :values están presentes.",
        "same"=> "El valor del campo :attributes debe ser igual a :other.",
    'size' => [
        "array"=> "El contenido debe tener :size elementos.",
        "file"=> "El tamaño del archivo debe ser de :size kilobytes.",
        "numeric"=> "El valor debe ser :size.",
        "string"=> "El texto debe ser de :size caracteres.",
    ],
    "starts_with"=> "Debe comenzar con alguno de los siguientes valores: :values.",
    "string"=> "Debe ser un texto.",
    "timezone"=> "Debe ser de una zona horaria válida.",
    "ulid"=> "Debe ser un ULID válido.",
    "unique"=> "Este campo ya ha sido tomado.",
    "uploaded"=> "Falló al subir.",
    "uppercase"=> "Este campo debe estar en mayúscula.",
    "url"=> "Debe ser una URL válida.",
    "uuid"=> "Debe ser un UUID válido.",
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

    'attributes' => [
        'title'=>'titulo',
        'body'=>'contenido'
        

    ],
    'value' => [
        'number'=>'titulo',
        'body'=>'contenido'

    ],


];
