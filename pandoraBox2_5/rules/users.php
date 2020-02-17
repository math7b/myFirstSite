<?php
$User = $user->UserAccessLevel($_SESSION['usuario']);
switch ($User) {
    case 'Hiragy7':
        $admin = 'Hiragy7';
        // echo $admin." Admin conectado!";
        break;
    case 'aaa':
        $ajudante = 'aaa';
        // echo $ajudante." Ajudante conectado!";
        break;
    default:
        // echo ' Usuario invalido'; 
        break;
} ?>
