<?php 

$dt = new DateTime();
//classe DateTime: Cria,manipula,compara e formata datas.
echo $dt->format("d/m/Y H:i:s");
//aqui a variavel deixa de ser uma classe e vira um objeto.
//-> serve para acessar um metodo(no caso é um format).
//format é igual a função date.
?>