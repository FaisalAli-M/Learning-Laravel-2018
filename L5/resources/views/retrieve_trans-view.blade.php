<?php

/*
You may retrieve lines from language files using the __ helper function. The __ method accepts the file and key of the translation string as its first argument. For example, let's retrieve the welcome translation string from the  resources/lang/messages.php language file:

Of course if you are using the Blade templating engine, you may use the {{ }} syntax to echo the translation string or use the @lang directive:

If the specified translation string does not exist, the __ function will return the translation string key. So, using the example above, the __ function would return  messages.welcome if the translation string does not exist.
*/
    //Using Short Keys

    echo __('messages.welcome') ; // by default it run en message.php file if we run es message file so first setLocale('es')
    echo " <br> " ;

    //Using Translation Strings As Keys


    echo __('I love programming.'); // by default it run en.json file if we run es.json file so first setLocale('es')
    echo " <br> " ;

/*
Replacing Parameters In Translation Strings
If you wish, you may define place-holders in your translation strings. All place-holders are prefixed with a :. For example, you may define a welcome message with a place-holder name:

'welcome' => 'Welcome, :name',
To replace the place-holders when retrieving a translation string, pass an array of replacements as the second argument to the __ function:

If your place-holder contains all capital letters, or only has its first letter capitalized, the translated value will be capitalized accordingly:
*/

    echo __('messages.bye', ['name' => 'Faisal']);
    echo "<br>";

    echo __('I love program' , ['name' => 'Faisal']); // by default it run en.json file if we run es.json file so first setLocale('es')
    echo " <br> " ;
?>

