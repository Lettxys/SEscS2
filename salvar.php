<?php
include 'conexaobd.php';
/* if (!empty($dependentePSN=$_POST['dependentePSN'])) {
   
} */

$dependentePSN=$_POST['dependentePSN'];
$problemaSCN=$_POST['problemaSCN'];
$alergiasN=$_POST['alergiasN'];
$alergiasInpN=$_POST['alergiasInpN'];
$restricaoAlN=$_POST['restricaoAlN'];
$restAlInpN=$_POST['restAlInpN'];
$deficienciaN=$_POST['deficienciaN'];
$dificuldadeN=$_POST['dificuldadeN'];
$tratamentoMN=$_POST['tratamentoMN'];
$tratamentoMInN=$_POST['tratamentoMInN'];
$medicacaoN=$_POST['medicacaoN'];
$medicacaoInpN=$_POST['medicacaoInpN'];
$vacinaN=$_POST['vacinaN'];
$acompanhadoN=$_POST['acompanhadoN'];
$emergencia=$_POST['emergencia'];
$informacaoN=$_POST['informacaoN'];
$informacaoInpN=$_POST['informacaoInpN'];
$nome=$_POST['nome'];
$curso=$_POST['curso'];


$salvar = mysqli_query($connection, "INSERT INTO fichas(dependentePSN, problemaSCN, alergiasN, alergiasInpN, restricaoAlN, restAlInpN, deficienciaN, dificuldadeN, tratamentoMN, tratamentoMInN, medicacaoN, medicacaoInpN, vacinaN, acompanhadoN, emergencia, informacaoN, informacaoInpN, nome, curso) VALUES ('$dependentePSN', '$problemaSCN', '$alergiasN', '$alergiasInpN', '$restricaoAlN', '$restAlInpN', '$deficienciaN', '$dificuldadeN', '$tratamentoMN', '$tratamentoMInN', '$medicacaoN', '$medicacaoInpN', '$vacinaN', '$acompanhadoN', '$emergencia', '$informacaoN', '$informacaoInpN', '$nome', '$curso')");

if (!empty($salvar)) {
    header('location: inicio1.php');
}

?>