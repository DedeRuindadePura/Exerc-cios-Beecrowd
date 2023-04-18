<?php

while (true) {
    $senha = (int) readline();

    if ($senha === 2002) {
        echo "Acesso Permitido\n";
        break;
    } else {
        echo "Senha Invalida\n";
    }
}

?>