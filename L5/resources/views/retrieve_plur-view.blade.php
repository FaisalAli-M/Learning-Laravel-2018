
<?php

echo trans_choice('messages.text' , 21);
echo "<br>";

// You may also define place-holder attributes in pluralization strings. These place-holders may be replaced by passing an array as the third argument to the  trans_choice function:

echo trans_choice('messages.mint' , 1 , ['value'=>1]);

?>