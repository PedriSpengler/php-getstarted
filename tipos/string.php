<?php
// EOL = End Of Line (Fim de Linha). Usado para garantir que a string seja impressa em uma nova linha em qualquer sistema operacional.
echo 'isto é uma string comum', PHP_EOL;

echo 'Você pode incluir novas linhas em strings,
dessa maneira que estará
tudo bem', PHP_EOL;

// Imprime: Arnold disse uma vez: "I'll be back"
echo 'Arnold disse uma vez: "I\'ll be back"', PHP_EOL;

// Imprime: Você tem certeza em apagar C:\*.*?
echo 'Você tem certeza em apagar C:\\*.*?', PHP_EOL;

// Imprime: Você tem certeza em apagar C:\*.*?
echo 'Você tem certeza em apagar C:\*.*?', PHP_EOL;

// Imprime: Isto não será substituído: \n uma nova linha
echo 'Isto não será substituído: \n uma nova linha', PHP_EOL;

// Imprime: Variáveis $também não $expandem
echo 'Variáveis $também não $expandem', PHP_EOL;
?>

<?php
// Sem indentação
echo <<<END
      a
     b
    c
\n
END;

// 4 espaços de indentação
echo <<<END
      a
     b
    c
    END;
?>

<?php
echo <<<'EOD'
Exemplo de string abrangendo várias linhas
usando a sintaxe nowdoc. As barras invertidas são sempre tratadas literalmente,
por exemplo. \\ e \'.
EOD;
?>

<?php
$suco = "maçã";

echo "Ele bebeu um pouco de suco de $suco." . PHP_EOL;
