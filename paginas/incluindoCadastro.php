<?php
include('connect.php');

var_dump($_POST);

$profissao = implode(';',$_POST['profissao']);

var_dump($profissao);

$nomeCompleto=$_POST['cdo_nomecompleto'];                
$email=$_POST['cdo_email'];
$senha=$_POST['cdo_senha'];
$confirmSenha=$_POST['cdo_senhaConfirm']; 
$apelido=$_POST['cdo_apelido']; 
$cpf=$_POST['cdo_cpf'];
$datanasc=$_POST['cdo_dtnsc'];
$telefone=$_POST['cdo_telefone'];
$cep=$_POST['cdo_cep']; 
$rua=$_POST['cdo_rua'];
$bairro=$_POST['cdo_bairro']; 
$cidade=$_POST['cdo_cidade']; 
$uf=$_POST['cdo_uf']; 
$numeroCasa=$_POST['cdo_numero_casa'];
$complemento=$_POST['cdo_complemento']; 
$habilidades=$_POST['cdo_habilidades']; 


 $sql="INSERT INTO cadastro(cdo_nomecompleto,cdo_profissao,cdo_email,cdo_senha,cdo_senhaConfirm,cdo_apelido,cdo_cpf,cdo_dtnsc,
 cdo_telefone,cdo_cep,cdo_rua,cdo_bairro,cdo_cidade,cdo_uf,cdo_numero_casa,cdo_complemento,cdo_habilidades) VALUES('$nomeCompleto','$profissao','$email','$senha','$confirmSenha',
 '$apelido','$cpf','$datanasc','$telefone','$cep','$rua','$bairro','$cidade','$uf','$numeroCasa','$complemento','$habilidades')";

 if(mysqli_query($conexao,$sql)){
   echo "O usuario foi cadastrado com sucesso!";
   header("Location: login.php");
 } else {
    echo "Erro ao tentar cadastrar o usuario. " . mysqli_connect_error($conexao);
 }
 mysqli_close($conexao);
?>