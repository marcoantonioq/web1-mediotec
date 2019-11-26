<?php
    $valor=30000;
    $cor=azul;
    switch ($cor) {
        case 'azul':
            # 30%
            $desc = $valor * 0.3;
            $valor = $valor - $desc;
            print("</p>Ganhou ".$desc." de desconto!");
            break;
        case 'preto':
            # 5%
            $desc = $valor * 0.05;
            $valor = $valor - $desc;
            print("</p>Ganhou ".$desc." de desconto!");
            break;
        default:
            # Outros valores 0%
            print("</p>Não ganha desconto!");
            break;
    }
    print("</p>Valor total da compra R$ ".$valor);
