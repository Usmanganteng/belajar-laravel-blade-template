<html>
<body>
@php

    class Person {
        public string $name;
        public string $address;
    }

    $person = new Person();
    $person->name = "Aldizar";
    $person->address = "Indonesia";

@endphp

<p>{{$person->name}}</p>
<p>{{$person->address}}</p>

</body>
</html>