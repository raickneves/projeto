<?php
$banco = new mysqli("localhost","root","","bd_games");
if ($banco -> connect_errno){
    echo"<P> encontrei um erro $banco-> errno --> $banco-> connect_errno </P>";
    
}
else{
    echo"deu certo";
}


 ?>