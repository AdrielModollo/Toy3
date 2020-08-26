<?php

function converteNome($nome) {
    $nome = ucwords(strtolower($nome));
    return ($nome);

}

function converteNomeParaEmail($nome) {
    global $emailsGerados;
    $ultimoNome = substr(strrchr($nome, ' '), 1);   $emailSufixo = '@empresax.com.br';
    $separator = '_';

    $email = strtolower($nome[0] . $separator . $ultimoNome . $emailSufixo);

    if (in_array($email, $emailsGerados)) {
        $primeiroNome = explode(' ', $nome)[0];
        $email = strtolower($primeiroNome . $separator . $ultimoNome . $emailSufixo);
    }
    array_push($emailsGerados, $email);
    return $email;
}

function converteFilial($filial) {
    $filial = ucfirst($filial);
    return ($filial);
}

$filiais = [
    'adamantina' => [
        "ANA RITA DE CASSIA SILVA OLIVEIRA", 
        "CARLINDO SANTOS ARAUJO",
        "VANGELI SANDRA FEITOZA RAMOS",
        "JOSE EDIMILSON PEREIRA",
        "GILMARA ARAUJO SANTANA",
        "IBERTO GALDINO NUNES",
        "HELENICE FELICIANO MANFRE",
    ],
    'borborema' => [
        "LUCAS CASTILHO LOPES",
        "SILVANA BROETTO BERTOLDO",
        "RONALDO THIAGO MACHADO GUIMARAES",
        "GISELIA MARIA DA CONCEICAO",
        "HUGO SILVESTRE DE ANDRADE",
        "RAFAEL DA SILVA MARQUES PEREIRA",
        "LUZIA DE MATTOS",
        "LEIDIANE GONCALVES DA SILVA",
        "ADRIANO CARDOSO LYRA",
        "CELINO FERREIRA DA SILVA"	,
        "LISA HELENA MINITTI ESTEVAM PAOLUCCI",
        "HELENA MARIA ALVES MANFRE",
        "JOSE GERALDO CAMARGO PEREIRA",
        "ADRIANO ROQUE DE OLIVEIRA",
        "PEDRO CEZAR MARTENDAL",
        "ELISANGELA BARBOSA TILLER",
        "LEILANE DOS SANTOS OLIVEIRA",
        "ALESSANDRA DANIELE MESQUITA",
        "SELMA APARECIDA DE OLIVEIRA",
        "IONICA DA SILVA VIEIRA",
        "GUSTAVO CARPES POSSAMAI",
    ],
    'cajamar' => [
        "OSVALDO FONSECA",
        "LUCIENI COSTA OLIVEIRA",
        "JOSE NATALINO DO ROSARIO PEREIRA",
        "NELSON DA CRUZ SANTOS",
        "JOSINA PEREIRA PELEGRINO",
        "FRANCISCO ANTONIO DE MORAIS DA SILVA",
        "CLARICE BUENO DA SILVA",
        "RACHEL GALOTE FIGUEIREDO",
        "JORDANA PEREIRA DE SOUZA",
        "VALERIA ROCHA MENDES LIMA",
        "NILTON GOMES DE SOUSA",
        "Elida Paedra Alves De Sousa",
        "ELIENE SILVA VIANA",
        "STEFANIA APARECIDA DE FARIA",
        "IRAILMA SILVA CEZAR",
    ],
];

$emailsGerados = [];

?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Filial</th>
    </tr>
    <?php foreach($filiais as $filial => $funcionarios): ?>
        <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?php echo converteNome($funcionario); ?></td>
                <td><?php echo converteNomeParaEmail($funcionario); ?></td>
                <td><?php echo converteFilial($filial); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>