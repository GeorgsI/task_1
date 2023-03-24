<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>   
        <div class='wrepper'>

<?php
 spl_autoload_register(function($class){
            $class =  str_replace('\\', '/', strtolower($class)).'.php';

            if (file_exists($class))
                return include_once($class);
               
            else

                return false;
        });        
      
        require_once './data.php';
   
       $ob = new classes\Render($data);
     
        
?>
       </div>
    </body>
</html>
