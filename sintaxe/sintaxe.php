<?php echo 'Se quiser servir código PHP em documentos XHTML ou XML,
                use essas tags'; ?>

A tag echo curta <?= 'imprima essa string' ?> também pode ser usada.
Ela é equivalente a <?php echo 'imprima essa string' ?>.

<?php echo "Olá mundo \n"; ?>


<p>PHP ignora. Será exibido pelo navegador.</p>
<?php echo "Enquanto isso, isso será considerado pelo PHP\n"; ?>
<p>Isso também será ignorado.</p>

<?php
    echo "Isto é um teste\n"; // Este é um comentário de uma linha no estilo C++
    /* Este é um comentário de várias linhas
       mais uma linha de comentário */
    echo "Este é mais um teste\n";
    echo "Um teste final\n"; # Este é um comentário de uma linha no estilo shell
?>

<?php 
    echo "Teste de tratamento separado  \n";
?>

<?php echo "Mais um teste de tratamento separado\n"; ?>

<?php echo "Ultimo teste de tratamento separado fechamento omitido\n";