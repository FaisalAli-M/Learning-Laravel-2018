<?php

// is file or fuction ko composer.json mai jakr register krna parhta hai
function callLang($text){
    return trans("lang.$text"); // trans function not proper work qk iska kam hai khud lang k folder mai jakr current language k folder mai jana mgr nhe jaraha hai
}
    
?>