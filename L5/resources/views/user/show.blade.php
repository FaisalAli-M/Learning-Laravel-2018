<!doctype html>
<html>
<head>
<title>   </title>
</head>
<body>
    
    <li> 
        <?php
        
                
                echo "<li>" . $user->name .  "</li>";
                echo "<li>" . $user->email .  "</li>";
                echo "<li>" . $user->role->role_name .  "</li>";
            
        ?>
    </li>
</body>
</html>
