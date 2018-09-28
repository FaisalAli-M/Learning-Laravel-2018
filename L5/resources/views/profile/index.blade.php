<!doctype html>
<html>
<head>
<title>   </title>
</head>
<body>
    
    <li> 
        <?php
        foreach($profile as $pr)
            {
                echo "<li>" . $pr->fullname . " has a username " . $pr->user->name . " and has a Email is " . $pr->user->email . "</li>" ;
            }
        ?>
    </li>
</body>
</html>
