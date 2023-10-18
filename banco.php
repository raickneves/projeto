<?php
$banco = new mysqli("localhost","root","","bd_games");
if ($banco -> connect_errno){
    echo"<P> encontrei um erro $banco-> errno --> $banco-> connect_errno </P>";
    
}
else{
    echo"deu certo";
}
$busca = $banco->quary("select * from generos");
if(!$busca!){
    echo"falha na busca ! $banco->error";
}
else{
    while($reg = $busca->fetch_objectbject())
        print_r($reg);
    ]
}


 ?>