<?php
    if($_POST == true){
        $selec = $_POST['ckb'];
        print_r($selec);
        $result = array();
        //abaixo forma algumas das regras geradas
        if($selec[0] != 2 && $selec[1] != 2 && $selec[2] != 2 && $selec[3] != 2 && $selec[4] != 2){
            $result[] = 2;
        }if($selec[0] != 9 && $selec[1] != 9 && $selec[2] != 9 && $selec[3] != 9 && $selec[4] != 9){
            $result[] = 9;
        }
            //caso seja anime2 e anime 9 == anime 17
            if($selec[0] == 2 || $selec[1] == 2 || $selec[2] == 2 || $selec[3] == 2 || $selec[4] == 2){
                if($selec[0] == 9 || $selec[1] == 9 || $selec[2] == 9 || $selec[3] == 9 || $selec[4] == 9){
                    if($selec[0] != 17 && $selec[1] != 17 && $selec[2] != 17 && $selec[3] != 17 && $selec[4] != 17){
                        $result[] = 17;
                    }
                }
            }
            //caso seja anime2 e anime 20 == anime 17
            if($selec[0] == 2 || $selec[1] == 2 || $selec[2] == 2 || $selec[3] == 2 || $selec[4] == 2){
                if($selec[0] == 20 || $selec[1] == 20 || $selec[2] == 20 || $selec[3] == 20 || $selec[4] == 20){
                    if($selec[0] != 17 && $selec[1] != 17 && $selec[2] != 17 && $selec[3] != 17 && $selec[4] != 17){
                        if($result[0] != 17 && $result[1] != 17 && $result[2] != 17){
                            $result[] = 17;
                        }
                    }
                }
            }
            // caso seja anime4 == anime 17
            if($selec[0] == 4 || $selec[1] == 4 || $selec[2] == 4 || $selec[3] == 4 || $selec[4] == 4){
                if($selec[0] != 17 && $selec[1] != 17 && $selec[2] != 17 && $selec[3] != 17 && $selec[4] != 17){
                    if($result[0] != 17 && $result[1] != 17 && $result[2] != 17){
                        $result[] = 17;
                    }
                }
            }
            // caso anime20 == anime 17
            if($selec[0] == 20 || $selec[1] == 20 || $selec[2] == 20 || $selec[3] == 20 || $selec[4] == 20){
                if($selec[0] != 17 && $selec[1] != 17 && $selec[2] != 17 && $selec[3] != 17 && $selec[4] != 17){
                    if($result[0] != 17 && $result[1] != 17 && $result[2] != 17){
                        $result[] = 17;
                    }
                }
            }
            //caso anime 2 e anime4 == anime 17
            if($selec[0] == 2 || $selec[1] == 2 || $selec[2] == 2 || $selec[3] == 2 || $selec[4] == 2){
                if($selec[0] == 4 || $selec[1] == 4 || $selec[2] == 4 || $selec[3] == 4 || $selec[4] == 4){
                    if($selec[0] != 17 && $selec[1] != 17 && $selec[2] != 17 && $selec[3] != 17 && $selec[4] != 17){
                        if($result[0] != 17 && $result[1] != 17 && $result[2] != 17){
                            $result[] = 17;
                        }
                    }
                }
            }
            //caso anime 17 == anime4
            if($selec[0] == 17 || $selec[1] == 17 || $selec[2] == 17 || $selec[3] == 17 || $selec[4] == 17){
                if($selec[0] != 4 && $selec[1] != 4 && $selec[2] != 4 && $selec[3] != 4 && $selec[4] != 4){
                    if($result[0] != 4 && $result[1] != 4 && $result[2] != 4){
                        $result[] = 4;
                    }
                }
            }
            //caso anime 2 e anime17 == anime4
            if($selec[0] == 2 || $selec[1] == 2 || $selec[2] == 2 || $selec[3] == 2 || $selec[4] == 2){
                if($selec[0] == 17 || $selec[1] == 17 || $selec[2] == 17 || $selec[3] == 17 || $selec[4] == 17){
                    if($selec[0] != 4 && $selec[1] != 4 && $selec[2] != 4 && $selec[3] != 4 && $selec[4] != 4){
                        if($result[0] != 4 && $result[1] != 4 && $result[2] != 4){
                            $result[] = 4;
                        }
                    }
                }
            }
            //caso anime 17 == anime 20
            if($selec[0] == 17 || $selec[1] == 17 || $selec[2] == 17 || $selec[3] == 17 || $selec[4] == 17){
                if($selec[0] != 20 && $selec[1] != 20 && $selec[2] != 20 && $selec[3] != 20 && $selec[4] != 20){
                    if($result[0] != 20 && $result[1] != 20 && $result[2] != 20){
                        $result[] = 20;
                    }
                }
            }
            //se anime 2 e anime 17 == 20
            if($selec[0] == 2 || $selec[1] == 2 || $selec[2] == 2 || $selec[3] == 2 || $selec[4] == 2){
                if($selec[0] == 17 || $selec[1] == 17 || $selec[2] == 17 || $selec[3] == 17 || $selec[4] == 17){
                    if($selec[0] != 20 && $selec[1] != 20 && $selec[2] != 20 && $selec[3] != 20 && $selec[4] != 20){
                        if($result[0] != 20 && $result[1] != 20 && $result[2] != 20){
                            $result[] = 20;
                        }
                    }
                }
            }
            if($result == null){
                echo "<br>";
                $alert = "<strong>o sistema não esta preparado ainda para realizar a sua recomendação para você, volte depois!</strong>";
                echo $alert;
            }
        }
        if($result != null){
        echo "<br>";
        echo "---------------------------------------------";
        echo "<br>";
        echo "resultado:";
        echo "<br>";
        echo "---------------------------------------------";
        echo "<br>";
            for($i = 0; $i < count($result); $i++){
                $j = $i + 1;
                echo "|".$j." = ".$result[$i];
                echo "<br>";
                echo "---------------------------------------------";
                echo "<br>";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <a href="./index.php">voltar</a>
</body>
</html>