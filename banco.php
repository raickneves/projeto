<?php
$banco = new mysqli("localhost","root","","bd_games");
if ($banco -> connect_errno){
    echo" encontrei um erro $banco--> errno --> $banco-> connect_erro";
    die();
}



?>