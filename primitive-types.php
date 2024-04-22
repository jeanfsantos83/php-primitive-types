<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal
        // $num = 0x1A; => 26
        // $num = 0b1011; => 11
        // $num = 010; => 8
        // echo "O valor da variável é $num";

        // $v = 300; => int
        // $v = 45.2; => float
        // $v = true; => bool
        // $v = "Jean"; => string(4)
        // var_dump($v);

        // $num = 3e2; // 3 x 10*2 => float 
        // $num = (int) 3e2; // 3 x 10*2 => int (coerção)
        // echo "O valor é $num"; => 300
        // var_dump($num);

        // $num = "950"; => string(3)
        // $num = (integer) "950"; => int
        // $num = (float) "950"; => float
        // $num = (double) "950"; => float
        // $num = (real) "950"; => Erro de análise : A conversão (real) foi removida, use (float)
        // var_dump($num);

        // $casado = false; => retorna vazio
        // $casado = true; => retorna 1
        // var_dump($casado); => bool(falso)
        // print "O valor para casado é $casado";

        // $vet = [6, 2, 9, 3, 5];
        // $vet = [6, 2.5, "Marina", 3, false];
        // echo "O vetor é $vet"; => Warning: Array to string conversion in on line 43 - O vetor é Array
        // var_dump($vet); => array(5) { [0]=> int(6) [1]=> int(2) [2]=> int(9) [3]=> int(3) [4]=> int(5) }
        // var_dump($vet); => array(5) { [0]=> int(6) [1]=> float(2.5) [2]=> string(6) "Marina" [3]=> int(3) [4]=> bool(false) }

        /* class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p); => object(Pessoa)#1 (0) { ["nome":"Pessoa":private]=> uninitialized(string) } */
    ?>
</body>
</html>