<?php 

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//setlocale serve para definir o idioma/região para datas e formatos.
//LC_ALL é uma constante do PHP.
echo ucwords(strftime("%A %B"));
//ucwords coloca a primeira letra de cada palavra em maiúscula.
//strftime: é como o date(), mas com nomes de mês, dia da semana etc traduzidos.
?>