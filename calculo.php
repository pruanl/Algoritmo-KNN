<?php
include_once 'cabecalho.php';
include_once 'Classes/Json.php';
include_once 'Classes/DistanciaEuclidiana.php';
include_once 'Classes/Pessoa.php';
include_once 'Classes/Algoritmo.php';

$json = new Json('./database.json');
$infos = $json->retornaDadosJson();
$dados = Algoritmo::retornaDados($infos);

$novaPessoa = new Pessoa($_POST['nome'], $_POST['idade'],$_POST['altura'],$_POST['peso']);

$compararDados = Algoritmo::comparaDados($dados,$novaPessoa);
$ordenaDados = Algoritmo::ordenaDados($compararDados);
$buscarVizinhos = Algoritmo::buscarVizinhos($ordenaDados, $_POST['k']);
$novaPessoa->setSituacao(Algoritmo::verificarSituacao($buscarVizinhos));

$json->salvaLinha($dados,$novaPessoa);
?>

<h4 class="center">Abaixo a situação do <?=$novaPessoa->getNome()?> utilizando o algoritmo KNN, após isso é listado os vizinhos mais próximos</h4>

<table class="bordered centered" >
    <thead>
    <tr>
        <th>Nome:</th>
        <th>Idade:</th>
        <th>Distancia:</th>
        <th>Peso (kg):</th>
        <th>Altura (cm):</th>
        <th>Situação:</th>
    </tr>
    </thead>
    <tbody>

    <tr class="materialize-red lighten-3 ">
        <td><?php echo $novaPessoa->getNome() ?> </td>
        <td><?php echo $novaPessoa->getIdade() ?> </td>
        <td>  </td>
        <td><?php echo $novaPessoa->getPeso() ?> </td>
        <td><?php echo ($novaPessoa->getAltura()) ?> </td>
        <td><?php echo $novaPessoa->getSituacao() ?> </td>
    </tr>

    <br>
    <?php
    foreach($buscarVizinhos as $campo) {  ?>
    <tr>

        <td><?php echo $campo['nome'] ?> </td>
        <td><?php echo $campo['idade']?> </td>
        <td><?php echo number_format(($campo['distancia']),2,'.',''); ?> </td>
        <td><?php echo $campo['peso'] ?> </td>
        <td><?php echo (($campo['altura'])) ?> </td>
        <td><?php echo $campo['situacao']?> </td>

        <?php } ?>
    </tr>
    </tbody>
</table>
<?php
include 'rodape.php'; ?>



