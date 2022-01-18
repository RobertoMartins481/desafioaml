<?php
//o arquivo de conexão foi desativado. Limite de apenas 30Mb para gravação no BD. Porém é o mesmo código usado na conexão das página index.php


$arquivo = $_FILES['cpgf']['tmp_name'];

$arq = fopen($arquivo,'r');

while(!feof($arq))
for($i=0; $i<1; $i++){
	if ($conteudo = fgets($arq)){
		$ll++; // 
		$linha = explode(';', $conteudo);


			}

if($linha[0] != 'CODIGO_ORGAO' && !empty($conteudo)){



$sql = "INSERT INTO tbl_cpgf (ID_CONTROLE,CODIGO_ORGAO,NOME_ORGAO,ORGAO_CODIGO,ORGAO_NOME,CODIGO_UNIDADE,NOME_UNIDADE,ANO_EXTRATO,MES_EXTRATO,CPF,NOME_PORTADOR,CNPJ_CPF_FAVORECIDO,NOME_FAVORECIDO,TRANSACAO,DATA_TRANSACAO,VALOR_TRANSACAO) VALUES ('','$linha[0]','$linha[1]','$linha[2]','$linha[3]','$linha[4]','$linha[5]','$linha[6]','$linha[7]','$linha[8]','$linha[9]','$linha[10]','$linha[11]','$linha[12]','$linha[13]','$linha[14]')";


	$result = mysql_query($sql) or die(mysql_error());
	$linha = array();
}
}






echo "quantidade de linhas importadas = ".$ll;
echo "<br>A lista já foi exportada, por favor feche essa janela";

?>
