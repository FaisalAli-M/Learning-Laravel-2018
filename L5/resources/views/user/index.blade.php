<!doctype html>
<html>
<head>
<title>   </title>
</head>
<body>
    
    <li> 
        <?php
        foreach($users as $us)
            {
                echo "<li>" . $us->name . " is a " . $us->role->role_name . " and his country is " . $us->profile['country'] . "</li>" ;
            }
        ?>
    </li>
</body>
</html>
