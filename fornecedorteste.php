<?php
#inicia a sessao
session_start();
#verifica o tamanho da sessao
$size = count($_SESSION['idfornecedor']);
#faz um loop na seção para exibir seus dados
for ($i = 0; $i < $size; $i++)
{
    echo $_SESSION['idfornecedor'][$i] . "<br>";
    echo $_SESSION['fornecedor_desc'][$i] . "<br>";
    echo $_SESSION['fornecedor_cnpj'][$i] . "<br>";
    echo $_SESSION['idCidade'][$i] . "<br>";
    echo $_SESSION['CidadeDesc'][$i] . "<br>";
    echo $_SESSION['EstadoDesc'][$i] . "<p>";
}