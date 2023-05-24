<?php 
/* include 'menu.php'; */
/*  include 'salvar.php';    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style12.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   

    <title>Document</title>
</head>

<body>

<header>

        <div class="main-menu">
                    <div class="bar"></div>
                    <div class="col-0">
                        <a href="https://www.ceara.gov.br/"><img src="img/logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                        <a href="https://www.instagram.com/eeepmanoelmano/"><img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                       
                            <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4">
   
                            <a href="grafics2.php" class="btn btn-success" style="margin-left: 230px;">Relatórios</a>
    </div></div>
                    </div>
                </div>
            </div>
        </div>

</header>


    <!-- <div class="container"> -->

    <section class="bcgb">
        <div class="container">
        <form method="POST" action="salvar.php" id="form">
          <br>
          <p id="cnt2"></p>
          
                <h1 id="cnt" class="mx-auto">Ficha de Saúde da(o) aluna(o)</h1>
                <br>
                <br>
                <br>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-8">
                        Nome Completo: <input type="text" class="form-control" placeholder="Nome" name="nome" oninput="handleInput(event)" required>
                    </div>
                    <div class="col-sm-4">
                    <label>Curso:</label>
                        <select class="form-select" name="curso" id="curso" >
                            <option value="" disabled selected hidden>Selecione</option>
                                    <option value="enfermagem">Enfermagem</option>
                                    <option value="informatica">Informática</option>
                                    <option value="administracao">Administração</option>
                                    <option value="comercio">Comércio</option>
                                </select>
                    </div>
                </div> 
                <table class="table table-bordered">

                    <tbody>                        
                        <tr>
                            <th scope="row">1</th>
                            <td style="width:500px"> <label> É dependente em plano de saúde?</label> </td>
                            <td style="width: 150px;"> </i> 
                            <select class="form-select" name="dependentePSN" id="dependentePSI" required>
                            <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select> </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td> <label> Tem algum problema de saúde crônico?</label> </td>
                            <td> <select class="form-select" name="problemaSCN" id="problemaSCI" required>
                            <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select> </td>
                            <td> </td>
                            <td> </td>

                        </tr>

                        <tr>
                            <th scope="row">3</th>

                            <td>
                                <label> Tem alergia(s)?</label>
                            </td>
                            <td>

                
                                <select class="form-select" name="alergiasN" id="alergiasI" onchange="verifica(this.value)" required>
                                <option value="" disabled selected hidden>Selecione</option>
                                <option value="1">Sim</option>
                                    <option value="2">Não</option> 
                                   
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="alergiasInpI" class="form-control form-control-sm" name="alergiasInpN" oninput="handleInput(event)"  disabled required>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td> <label> Possui alguma restrição alimentar?</label> </td>

                            <td> <select class="form-select" name="restricaoAlN" id="restricaoAlI"  onchange="verifica1(this.value)">
                            <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select> </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="restAlInpI" class="form-control form-control-sm" name="restAlInpN" oninput="handleInput(event)" disabled required>
                            </td>
                        </tr>


                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <label> Já recebeu diagnóstico médico de deficiência?</label>
                            </td>
                            <td>
                                <select class="form-select" name="deficienciaN" id="deficienciaI">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>


                        <tr>
                            <th scope="row">6</th>
                            <td>
                                <label> Apresenta alguma dificuldade motora, auditiva, visual, na fala ou emocional?</label>
                            </td>
                            <td style="height: 15px;">
                                <select class="form-select" name="dificuldadeN" id="dificuldadeI">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>
                                <label> Está em tratamento médico? </label>
                            </td>
                            <td>
                                <select class="form-select" name="tratamentoMN" id="tratamentoMI" onchange="verifica2(this.value)">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual? E para que doença?</label>
                            </td>
                            <td>
                                <input type="text" id="tratamentoMInI" placeholder="Digite aqui" class="form-control form-control-sm" name="tratamentoMInN" oninput="handleInput(event)" disabled required>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td> <label> Está em uso de alguma medicação? </label> </td>
                            <td>
                                <select class="form-select" name="medicacaoN" id="medicacaoI" onchange="verifica3(this.value)">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Qual? Quando encerrará o uso?</label>
                            </td>
                            <td>
                                <input type="text" id="medicacaoInpI" placeholder="Digite aqui" class="form-control form-control-sm" name="medicacaoInpN" oninput="handleInput(event)" disabled required>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>
                                <label> As vacinas do calendário de vacinação do Ministério da Saúde estão em dia?</label>
                            </td>
                            <td>
                                <select class="form-select" name="vacinaN" id="vacinaI">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>
                                <label> É acompanhado por psicólogo, terapeuta ocupacional ou fonoaudiólogo?</label>
                            </td>
                            <td>
                                <select class="form-select" name="acompanhadoN" id="acompanhadoI">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">11</th>
                            <td>
                                <label> Em caso de emergência para quem ligar e em qual número?</label>
                            </td>
                            <td>
                                <select class="form-select" name="emergencia" id="emergencia">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="pai">Pai</option>
                                    <option value="mae">Mãe</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <br>
                        <tr>
                            <th scope="row">12</th>
                            <td>
                                <label> Existe alguma outra informação a respeito da saúde do aluno que o responsável queira fazer constar desta ficha?</label>
                            </td>
                            <td>
                                <select class="form-select" name="informacaoN" id="informacaoI" onchange="verifica4(this.value)">
                                <option value="" disabled selected hidden>Selecione</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)? </label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="informacaoInpI" name="informacaoInpN" class="form-control form-control-sm" oninput="handleInput(event)" disabled required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>



                <div class="d-grid gap-2 col-4 mx-auto">
                    <button type="submit" class="btn btn-success" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        Enviar
                    </button>
                </div>

                <br>
            </form>
        </div>

        <br>
    </section>
    <script src="mask.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</div>

</body>


</html>