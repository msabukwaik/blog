<!-- /resources/views/alert.blade.php -->

<div class="alert alert-danger">
    {{ $slot }}
</div>


@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@php

    echo "Ya wellcome";

@endphp