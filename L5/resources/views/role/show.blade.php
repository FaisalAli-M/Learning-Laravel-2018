<!doctype html>
<html>
<head>
<title>   </title>
</head>
<body>
    
    <li> 
        <?php
        foreach($role->user as $user)
            {
                echo "<li>" . $user->name .  "</li>";
            }
        ?>
    </li>
</body>
</html>
