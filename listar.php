<?php
include 'cabecalho.php';
include_once 'Classes/Json.php';
include_once 'Classes/Algoritmo.php';

$json = new Json('./database.json');
$infos = $json->retornaDadosJson();
$dados = Algoritmo::retornaDados($infos);


?>

<table id="id_tabela" class="highlight centered bordered" >
    <thead>
    <tr>
        <th>Nome:</th>
        <th>Idade:</th>
        <th>Peso (kg):</th>
        <th>Altura (cm):</th>
        <th>Situação:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($dados as $campo) {  ?>
    <tr>

        <td><?php echo $campo->nome ?> </td>
        <td><?php echo $campo->idade?> </td>
        <td><?php echo $campo->peso ?> </td>
        <td><?php echo (($campo->altura)) ?> </td>
        <td><?php echo $campo->situacao?> </td>

        <?php } ?>
    </tr>
    </tbody>
</table>

    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <script>
        $('#id_tabela').materializePagination({
            lastPage: 100,
            firstPage:  1,
            align: 'left',
            urlParameter: 'page',
            useUrlParameter: true,
            onClickCallback: function(){}
        });
    </script>
<?php
include 'rodape.php'; ?>