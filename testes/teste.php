<?php 
include 'conexao2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="style12.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cursos', 'Total de Alergias por Curso'],
        
          <?php
          include 'conexao2.php';
          $sql2 = mysqli_query($connection, "SELECT curso, count(alergiasInpN) as qtd FROM form3 WHERE curso LIKE '%enf%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM form3 WHERE curso LIKE '%info%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM form3 WHERE curso LIKE '%com%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM form3 WHERE curso LIKE '%adm%' GROUP BY curso ORDER BY qtd ASC;  ");
         
          while ($dados = mysqli_fetch_array($sql2) ) {
            $curso =  $dados['curso'];
            $total =  $dados['qtd'];
          ?>

          ['<?php echo $curso ?>', '<?php echo $total ?>' ],

        <?php } ?>
        
        ]);

        var options = {
        
            title: 'Alergias',
            subtitle: 'Cursos e  Quantidade de Alergias',
            colors: ['#00853B', '#00853B', '#00853B', '#00853B']
         
        };

        var chart = new google.charts.Bar(document.getElementById('grafico2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cursos', 'Total de Restrições Alimentares por Curso'],
        
          <?php
          include 'conexao2.php';
          $sql2 = mysqli_query($connection, "SELECT curso, count(restAlInpN) as qtd FROM form3 WHERE curso LIKE '%enf%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM form3 WHERE curso LIKE '%info%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM form3 WHERE curso LIKE '%com%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM form3 WHERE curso LIKE '%adm%' GROUP BY curso ORDER BY qtd ASC;   ");
         
          while ($dados = mysqli_fetch_array($sql2) ) {
            $curso =  $dados['curso'];
            $total =  $dados['qtd'];
          ?>

          ['<?php echo $curso ?>', '<?php echo $total ?>' ],

        <?php } ?>
        
        ]);

        var options = {
          
            title: 'Restrições Alimentares',
            subtitle: 'Cursos e  Quantidade de Restrições Alimentares',
            colors: ['#00853B', '#00853B', '#00853B', '#00853B']
        
        };

        var chart = new google.charts.Bar(document.getElementById('grafico3'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


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
                       
                           
                            <a href="inicio1.php" class="btn btn-block btn-success" style=" margin-right: 700px;"> Tela Inicial</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </header>
  <div class="container">
    <br>
    <p id="cnt2"></p>
                <h1 id="cnt">Relatórios em gráficos</h1> <br> <br> <br>   <br>  <br> 
    <table class="table  table-borderless">
   <tbody>
   
    <tr>   
<td id="linha">
    <div id="grafico2" style="width: 600px; height: 350px;"></div> 
</td>
<td id= "linha" >
    <div id="grafico3" style="width: 580px; height: 350px;"></div>
</td>
    </tr>
   </tbody>
    </table>
   
  </div>
  <br><br>
 <!-- <div class="container table-responsive">
 <p id="cnt2"></p>
                <h1 id="cnt">Relatórios dos Alunos por Curso</h1> <br> <br> <br>   <br>  <br> 
  <table class="table table-borderless table-hover table-bordered">
  	<thead>
	    <tr>
	        <th style="text-align: center; font-size: 20px; color: #00853B;" >Aluno</th>
	        <th style="text-align: center; font-size: 20px; color: #00853B;">Alergia</th>
          <th style="text-align: center; font-size: 20px; color: #00853B;">Rest. Alimentares</th>
	        <th style="text-align: center; font-size: 20px; color: #00853B;">Curso</th>	      
	    </tr>
    </thead>
    <?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
				<tbody id="myTable">
					<tr>
						<td style="text-align: center;"><?php echo $usuario['nome']; ?></td>
						<td style="text-align: center;"><?php if($usuario['alergiasInpN']!= null){
              echo $usuario['alergiasInpN'];
            } else if($usuario['alergiasInpN'] = 'NULL'){
              echo '---';
            } ?></td>
            <td style="text-align: center;"><?php if($usuario['restAlInpN']!= null){
              echo $usuario['restAlInpN'];
            } else if($usuario['restAlInpN'] = 'NULL'){
              echo '-----';
            }   ?></td>
						<td style="text-align: center;"><?php echo $usuario['curso']; ?></td>
					</tr>
 
          </tbody>
          <?php } ?>
  </table>
<br><br>
<div class="d-grid gap-2 col-4 mx-auto">
                    <a href="inicio1.php" class="btn btn-success" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        Voltar para tela inicial
                    </a>
                </div>
                <br> <br>
</div> -->
</body>

</html>