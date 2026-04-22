<?php
$password = "secret123";
// calculer un hash du mdp
$hash = password_hash($password, PASSWORD_DEFAULT);//bcrypt
echo $hash;
echo "\n";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// echo $hash;
// echo "\n";
// $hash = password_hash($password,PASSWORD_ARGON2I);
// echo $hash;
// echo "\n";
// vérifier le mdp
if(password_verify($password,$hash)){
    echo "Mot de passe correct";
}else{
    echo "Mot de passe incorrect";
}