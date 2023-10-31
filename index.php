<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Paulo");
    $p1->setIdade("26");
    $p1->setSexo("M");

    
    $p2->setNome("Eduarda");
    $p2->setIdade("23");
    $p2->setSexo("F");
    $p2->setCurso("Informática");
    $p2->CancelarMatr();
    
    $p3->setNome("Sophia");
    $p3->setIdade("30");
    $p3->setSexo("F");
    $p3->setSalario("2500.30");
    $p3->ReceberAumento("500");

    $p4->setNome("Tom");
    $p4->setIdade("35");
    $p4->setSexo("M");
    $p4->setSetor("Estoque");
    $p4->MudarTrabalho();

    
    
    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

    
    ?></pre>
</body>
</html>