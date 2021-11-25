<!DOCTYPE html>
<html lang="pt-br">
<head>
<script type="text/javascript">
    var CheckMaximo = 5;
    
    function verificar() {
    var Marcados = 1;
    var objCheck = document.forms['form1'].elements['ckb[]'];
    
    //Percorrendo os checks para ver quantos foram selecionados:
    for (var iLoop = 0; iLoop<objCheck.length; iLoop++) {
        //Se o número máximo de checkboxes ainda não tiver sido atingido, continua a verificação:
        if (Marcados <= CheckMaximo) {
            if (objCheck[iLoop].checked) {
                Marcados++;
            }
                //Habilitando todos os checkboxes, pois o máximo ainda não foi alcançado.
                for (var i=0; i<objCheck.length; i++) {
                    objCheck[i].disabled = false;
                }	
        //Caso contrário, desabilitar o checkbox;
        //Nesse caso, é necessário percorrer todas as opções novamente, desabilitando as não checadas;
        } else {
            for (var i=0; i<objCheck.length; i++) {
                if(objCheck[i].checked == false) {
                    objCheck[i].disabled = true;
                }	
            }
        }
    }
    }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="meuC.css">
    <title>Pagina inicial</title>
</head>
<body>
    //header("Location: ./admArea.php");
    <h2 style="text-align: center;">Recomendação de animes</h2>
    <form name="form1" action="./processa.php" method="post">
        <center>
        <p>escolha 5 animes</p>
        <table class="tabela" border="1">
            <tr>
                <th class="caixaItem">Nome</th>
                <th class="caixaItem">Numero</th>
                <th class="caixaItem">Marcar</th>
            </tr>
            <tr>
                <td class="caixaItem">Another</td>
                <td class="caixaItem">1</td>
                <td class="caixaItem"><input value="1" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Black Clover</td>
                <td class="caixaItem">2</td>
                <td class="caixaItem"><input value="2" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Boruto</td>
                <td class="caixaItem">3</td>
                <td class="caixaItem"><input value="3" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Boku no hero academy</td>
                <td class="caixaItem">4</td>
                <td class="caixaItem"><input value="4" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Kokoro Connect</td>
                <td class="caixaItem">5</td>
                <td class="caixaItem"><input value="5" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Cavaleiro do Zodíaco</td>
                <td class="caixaItem">6</td>
                <td class="caixaItem"><input value="6" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Captain tsubasa</td>
                <td class="caixaItem">7</td>
                <td class="caixaItem"><input value="7" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Dragon balls</td>
                <td class="caixaItem">8</td>
                <td class="caixaItem"><input value="8" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Death Note</td>
                <td class="caixaItem">9</td>
                <td class="caixaItem"><input value="9" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Nisekoi</td>
                <td class="caixaItem">10</td>
                <td class="caixaItem"><input value="10" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Dr. Stone</td>
                <td class="caixaItem">11</td>
                <td class="caixaItem"><input value="11" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Dororo</td>
                <td class="caixaItem">12</td>
                <td class="caixaItem"><input value="12" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Darling in the Franxx</td>
                <td class="caixaItem">13</td>
                <td class="caixaItem"><input value="13" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">enen no shouboutai</td>
                <td class="caixaItem">14</td>
                <td class="caixaItem"><input value="14" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">nanatsu no taizai</td>
                <td class="caixaItem">15</td>
                <td class="caixaItem"><input value="15" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">goblin slayer</td>
                <td class="caixaItem">16</td>
                <td class="caixaItem"><input value="16" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Demon slayer(kimetsu no ayaba)</td>
                <td class="caixaItem">17</td>
                <td class="caixaItem"><input value="17" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Hunter x Hunter</td>
                <td class="caixaItem">18</td>
                <td class="caixaItem"><input value="18" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Isekai Maou to Shoukan Shoujo no Dorei Majutsu</td>
                <td class="caixaItem">19</td>
                <td class="caixaItem"><input value="19" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Jujutsu Kaisen</td>
                <td class="caixaItem">20</td>
                <td class="caixaItem"><input value="20" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Jahy-sama wa kujikenai!</td>
                <td class="caixaItem">21</td>
                <td class="caixaItem"><input value="21" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Kenja no mago</td>
                <td class="caixaItem">22</td>
                <td class="caixaItem"><input value="22" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Kaguya-sama wa kokurasetai:Tensai-tachi no Renai Zunousen</td>
                <td class="caixaItem">23</td>
                <td class="caixaItem"><input value="23" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Tsuki ga Michibiku Isekai Douchuu</td>
                <td class="caixaItem">24</td>
                <td class="caixaItem"><input value="24" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Kumo desu ga, Nani Ka?</td>
                <td class="caixaItem">25</td>
                <td class="caixaItem"><input value="25" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Kono Subarashii Sekai ni Shukufuku wo!</td>
                <td class="caixaItem">26</td>
                <td class="caixaItem"><input value="26" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Kobayashi-san Chi no Maid Dragon</td>
                <td class="caixaItem">27</td>
                <td class="caixaItem"><input value="27" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Hyouka</td>
                <td class="caixaItem">28</td>
                <td class="caixaItem"><input value="28" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">shingeki no kyojin</td>
                <td class="caixaItem">29</td>
                <td class="caixaItem"><input value="29" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Naruto</td>
                <td class="caixaItem">30</td>
                <td class="caixaItem"><input value="30" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Kimi no na wa:Your name</td>
                <td class="caixaItem">31</td>
                <td class="caixaItem"><input value="31" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">tokyo ghoul</td>
                <td class="caixaItem">32</td>
                <td class="caixaItem"><input value="32" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Noragami</td>
                <td class="caixaItem">33</td>
                <td class="caixaItem"><input value="33" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Overlord</td>
                <td class="caixaItem">34</td>
                <td class="caixaItem"><input value="34" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">One Piece</td>
                <td class="caixaItem">35</td>
                <td class="caixaItem"><input value="35" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Peach Boy Riverside</td>
                <td class="caixaItem">36</td>
                <td class="caixaItem"><input value="36" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Re:zero kara Hajimeru Isekai Seikatsu</td>
                <td class="caixaItem">37</td>
                <td class="caixaItem"><input value="37" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">tate no yuusha no nariagari</td>
                <td class="caixaItem">38</td>
                <td class="caixaItem"><input value="38" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Sword art online</td>
                <td class="caixaItem">39</td>
                <td class="caixaItem"><input value="39" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</td>
                <td class="caixaItem">40</td>
                <td class="caixaItem"><input value="40" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Seirei Gensouki</td>
                <td class="caixaItem">41</td>
                <td class="caixaItem"><input value="41" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">satsuriku no tenshi</td>
                <td class="caixaItem">42</td>
                <td class="caixaItem"><input value="42" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">fairy tail</td>
                <td class="caixaItem">43</td>
                <td class="caixaItem"><input value="43" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Tenkuu Senki Shurato</td>
                <td class="caixaItem">44</td>
                <td class="caixaItem"><input value="44" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Tensei Shitara slime</td>
                <td class="caixaItem">45</td>
                <td class="caixaItem"><input value="45" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Bleach</td>
                <td class="caixaItem">46</td>
                <td class="caixaItem"><input value="46" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>

            <tr hidden>
                <td class="caixaItem">Toradora</td>
                <td class="caixaItem">47</td>
                <td class="caixaItem"><input value="47" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">yuyu hakusho</td>
                <td class="caixaItem">48</td>
                <td class="caixaItem"><input value="48" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem">Yoroiden Samurai Troopers</td>
                <td class="caixaItem">49</td>
                <td class="caixaItem"><input value="49" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr>
                <td class="caixaItem">Yakusoku no Neverland</td>
                <td class="caixaItem">50</td>
                <td class="caixaItem"><input value="50" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
            <tr hidden>
                <td class="caixaItem"></td>
                <td class="caixaItem"></td>
                <td class="caixaItem"><input value="" class="bnt" type="checkbox" name="ckb[]" onclick="verificar()"></td>
            </tr>
        </table>
            <button class="bntCont" type="submit">Confirmar</button>
        </center>
    </form>
</body>
</html>