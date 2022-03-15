<?php

function welcome($key){
    if(isset($_SESSION[$key])){
        $user = $_SESSION[$key];

        return $user->firstName.' '.$user->lastName. '| <a href="/login/destroy">Sair</a>';
    }

    return 'Visitante';
}