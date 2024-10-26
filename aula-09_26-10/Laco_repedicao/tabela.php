<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    thead {
        background-color: #007BFF;
        color: white;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #dddddd;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>



<?php
$funcionarios = array(
    array("nome" => "Ana", "idade" => 24, "profissao" => "professora"),
    array("nome" => "Bruno", "idade" => 30, "profissao" => "motorista"),
    array("nome" => "Carlos", "idade" => 16, "profissao" => "estagiário"),
    array("nome" => "Daniel", "idade" => 50, "profissao" => "CEO"),
    array("nome" => "Enzo", "idade" => 14, "profissao" => "jovem aprendiz"),
    array("nome" => "Fernanda", "idade" => 28, "profissao" => "designer"),
    array("nome" => "Gustavo", "idade" => 35, "profissao" => "engenheiro"),
    array("nome" => "Heloísa", "idade" => 40, "profissao" => "gerente de projetos"),
    array("nome" => "Igor", "idade" => 22, "profissao" => "analista de sistemas"),
    array("nome" => "Juliana", "idade" => 27, "profissao" => "jornalista"),
    array("nome" => "Lucas", "idade" => 19, "profissao" => "assistente administrativo"),
    array("nome" => "Mariana", "idade" => 33, "profissao" => "farmacêutica"),
    array("nome" => "Natália", "idade" => 29, "profissao" => "marketing"),
    array("nome" => "Otávio", "idade" => 45, "profissao" => "diretor financeiro"),
    array("nome" => "Paula", "idade" => 36, "profissao" => "arquitetura"),
    array("nome" => "Ricardo", "idade" => 31, "profissao" => "programador"),
    array("nome" => "Sofia", "idade" => 26, "profissao" => "consultora"),
    array("nome" => "Tiago", "idade" => 38, "profissao" => "advogado"),
    array("nome" => "Vanessa", "idade" => 23, "profissao" => "estudante"),
    array("nome" => "William", "idade" => 39, "profissao" => "fotógrafo"),
    array("nome" => "Xuxa", "idade" => 44, "profissao" => "cozinheira")
);



?>



<h1>Tabela feita com HTML puro</h1>
<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Profissão</th>
    </thead>
    <tbody>
        <tr>
            <td>Ana</td>
            <td>24</td>
            <td>Professora</td>
        </tr>
        <tr>
            <td>Bruno</td>
            <td>30</td>
            <td>Motorista</td>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>16</td>
            <td>Estagiário</td>
        </tr>
        <tr>
            <td>Daniel</td>
            <td>50</td>
            <td>CEO</td>
        </tr>
        <tr>
            <td>Enzo</td>
            <td>14</td>
            <td>Jovem aprendiz</td>
        </tr>
    </tbody>
</table>




<h1>Tabela feita com FOR</h1>
<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Profissão</th>
    </thead>
    <tbody>
        <?php
        for ($x = 0; $x < count($funcionarios); $x++) {
            ?>
            <tr>
                <td><?php echo $funcionarios[$x]['nome']; ?></td>
                <td><?php echo $funcionarios[$x]['idade']; ?></td>
                <td><?php echo ucfirst(strtolower($funcionarios[$x]['profissao'])); ?></td>
            </tr>
            <?php
        }
        ?>

    </tbody>
</table>


<h1>Tabela feita com ForEach</h1>
<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Profissão</th>
    </thead>
    <tbody>
        <?php
        foreach ($funcionarios as $pessoa) {
            ?>
            <tr>
                <td><?php echo $pessoa['nome']?></td>
                <td><?php echo $pessoa['idade']?></td>
                <td><?php echo $pessoa['profissao']?></td>
            </tr>
       <?php
       }
        ?>


    </tbody>
</table>