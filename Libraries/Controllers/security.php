<?php
    function security($data){
        //trim permet de supprimer les espaces inutiles
        $data = trim($data);
        //stripslashes supprimes les antishlashs
        $data = stripslashes($data);
        //htmlspecialchars permet d'échapper certains caractéres spéciaux et les transforment en entité HTML
        $data = htmlspecialchars($data);
        return $data;
    }
?>