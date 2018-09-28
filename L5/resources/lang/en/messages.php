<?php

// resources/lang/en/messages.php

/*
Using Short Keys
Typically, translation strings are stored in files within the resources/lang directory. Within this directory there should be a subdirectory for each language supported by the application:

/resources
    /lang
        /en
            messages.php
        /es
            messages.php
All language files return an array of keyed strings. For example:
*/

return [
    'welcome' => 'Welcome to our application' ,
    'bye' => 'Allah hafiz :NAME',
    
    // Pularaization
    
   'text' => '{0} There are none|[1,19] There are some|[20,*] There are many',
    
    //You may also define place-holder attributes in pluralization strings. These place-holders may be replaced by passing an array as the third argument to the  trans_choice function:
    
    'mint' => '{1} :value minute|[1,19] :value minutes|[20,*] :value minutes ',
    
    ]

?>
