<?php

// Função para converter string em formato StudlyCaps
function studly_case_custom($value)
{
    $value = ucwords(str_replace(['-', '_'], ' ', $value));
    return str_replace(' ', '', $value);
}

// 1. Criar o vetor bidimensional
$dados = [
    'Joao001' => ['codigo' => '001', 'nome' => 'João', 'endereco' => 'Rua do João'],
    'Ari002' => ['codigo' => '002', 'nome' => 'Ari', 'endereco' => 'Rua do Ari']
];

// 2. Ordenar o vetor pela chave (nome+codigo)
ksort($dados);

// 3. Converter os nomes para o padrão StudlyCaps
foreach ($dados as $chave => $valor) {
    $nomeStudlyCaps = studly_case_custom($valor['nome']);
    $dados[$chave]['nome'] = $nomeStudlyCaps;
}

// 4. Gerar uma tabela HTML
$html = '<table border="1">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Endereço</th>
            </tr>';
foreach ($dados as $chave => $valor) {
    $html .= '<tr>
                <td>' . $valor['codigo'] . '</td>
                <td>' . $valor['nome'] . '</td>
                <td>' . $valor['endereco'] . '</td>
            </tr>';
}
$html .= '</table>';

echo $html;
