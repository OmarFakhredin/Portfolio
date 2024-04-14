<?php

function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.html");
    }
}
extract($_REQUEST);
$file=fopen("../txtfiles/signupform.txt","a");
fwrite($file,"$username"."\n");
fwrite($file,"$firstname"."\n");
fwrite($file,"$lastname"."\n");
fwrite($file,"$pass"."\n");
fwrite($file,"$sex"."\n");
fwrite($file,"$birthdate"."\n");

header("location:../index.php");
exit();

?>