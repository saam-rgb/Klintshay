<?php
function loadTemplate($name){
    include $_SERVER['DOCUMENT_ROOT']."/Specsworld/components/$name.php";  
    // include "/Specsworld/components/$name.php";
}

function validateAdmin($email, $password){
    if($email == "admin@gmail.com" && $password == "admin"){
        return true;
    }else {
        return false;
    }
}

// function validateUser($email, $password){
//     if($email == "user@gmail.com" && $password == "user"){
//         return true;
//     }else {
//         return false;
//     }
// }

?>
