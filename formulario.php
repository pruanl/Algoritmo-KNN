<?php
include 'cabecalho.php'; ?>
<div class="row">
    <form action="calculo.php" method="post">
                <H2 class="center">VERIFICAR SITUAÇÃO</H2><br><br>
                <div class="col s6 s12">
                    Nome:
                    <input type="text" name="nome" required="required"></br>
                </div>

                <div class="col m6 s12">
                Idade:
                <input type="number" name="idade" required="required"></br>
                </div>

                <div class="col m6 s12">
                Peso (kg):
                <input type="number" name="peso" required="required"></br>
                </div>
                <div class="col m6 s12">
                Altura (cm):
                <input type="number" name="altura" required="required"></br>
                </div>
                <div class="col m6 s12">
                Número de vizinhos:
                <input type="number" name="k" placeholder="Valor mínimo: 3"></br>
                </div>

        <button class=" col s12 center btn waves-effect waves-light" type="submit" name="action">Verificar próximos
            <i class="material-icons right"></i>
        </button>
    </form>
</div>


<?php
include 'rodape.php';

