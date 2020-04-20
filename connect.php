<?php
    function DBConnection()
    {
      return (new PDO('mysql:host=localhost;dbname=cop4710_db','mainuser','mainuser123!'));	
    }
?>
