<?php
include 'cabecalho.php';


print_r(sqrt(pi()));
?>



<h3 class="center">Trabalho construido para obtenção de nota na matéria mineração de dados</h3>
    <p>Integrantes: Alessandro Pereira, Paulo Ferreira e Pedro Ruan</p>

    <h5>k-NN - Implementar algoritmo</h5>

    <p><span>Enunciado:</span>
    Implementar o algoritmo de classificação k-NN afim de determinar a situação de massa corporal em um individuo. O algoritmo não deve calcular, apenas classificar baseado nos conjuntos de treinamento fornecidos.
    Para esta tarefa você terá que criar um conjunto de dados de no minimo 50 registros contendo peso, altura e situação (obeso, abaixo do peso, normal, abaixo do peso). Considere todos os indivíduos do conjunto de treinamento homens adultos.
    </p>

<p>Foram levados em considerações para construção do banco os seguintes dados: </p>


    <table>
        <thead>
        <tr>
            <th>Situação</th>
            <th>Condição (IMC)</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Abaixo do peso: </td>
            <td> menor que 20,7</td>

        </tr>
        <tr>
            <td>Peso Normal</td>
            <td>entre 20,7 e 27,8</td>

        </tr>
        <tr>
            <td>Acima do peso</td>
            <td>entre 27,8 e 31,1</td>

        </tr>
        <tr>
            <td>Obeso</td>
            <td>acima de 31,1</td>

        </tr>
        </tbody>
    </table>

    <div class="right">
    <a href="formulario.php"><button class="btn  " name="action">Verificar situação</button></a>

    </div>


<?php
include 'rodape.php';