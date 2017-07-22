@php

    App::setLocale($locale);

    //if(App::isLocale('en'))
    //    echo 'Wow, the selected language is english <br />';

    echo 'Message based on the cureent locale ('.App::getLocale().') language : ' . __('messages.welcome', ['name' => 'Mohammed']) . ' and ' . __('I love programming');
    echo trans_choice('messages.apples', 0) . '<br />';
    echo trans_choice('messages.apples', 10) . '<br />';

@endphp