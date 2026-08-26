<div class="titulo">Operações Aritmeticas</div>

<?php

echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 10 * 2, '<br>';
echo 10 / 2, '<br>';
echo 10 % 2, '<br>';
echo intdiv(7, 4), '<br>'; // Divisão que só da número inteiro
echo round(7 / 4), '<br'; // Arredondamento de valores
echo 7 / 0, '<br'; // Resultado = INF
// echo intdiv(7, 0), '<br>';  #ERROR
echo 4 ** 2, '<br>';
echo '<br>';
echo "<p>Precedências</p><br>";
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';

