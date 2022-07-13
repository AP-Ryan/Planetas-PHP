<?php

class planeta
{

    public $id = $_GET['id'];


    public $Planetas = array(
        1 => array(
            '<h1>Planeta Terra</h1>',
            '<p>A Terra é o terceiro planeta mais próximo do Sol, o mais denso e o quinto maior dos oito planetas do Sistema Solar. É também o maior dos quatro planetas telúricos. É por vezes designada como Mundo ou Planeta Azul. Lar de milhões de espécies de seres vivos, incluindo os humanos, a Terra é o único corpo celeste onde é conhecida a existência de vida. O planeta formou-se há 4,56 bilhões de anos, e a vida surgiu na sua superfície um bilhão de anos depois..</p>',
            '<img src="../img/terrap.png" height="500">',
        ),
        2 => array(
            '<h1>Planeta Marte</h1>',
            '<p>Marte é o quarto planeta a partir do Sol, o segundo menor do Sistema Solar. Batizado em homenagem ao deus romano da guerra, muitas vezes é descrito como o "Planeta Vermelho", porque o óxido de ferro predominante em sua superfície lhe dá uma aparência avermelhada.</p>',
            '<img src="../img/marsp.png" height="500">',
        ),
        3 => array(
            '<h1>Planeta Jupiter</h1>',
            '<p>Júpiter é o maior planeta do Sistema Solar, tanto em diâmetro quanto em massa, e é o quinto mais próximo do Sol. Possui menos de um milésimo da massa solar, contudo tem 2,5 vezes a massa de todos os outros planetas em conjunto. É um planeta gasoso, junto com Saturno, Urano e Netuno.</p>',
            '<img src="../img/jupiterp.png" height="500">',
        ),
        4 => array(
            '<h1>Planeta Saturno</h1>',
            '<p>Saturno é o sexto planeta a partir do Sol e o segundo maior do Sistema Solar atrás de Júpiter. Pertencente ao grupo dos gigantes gasosos, possui cerca de 95 massas terrestres e orbita a uma distância média de 9,5 unidades astronômicas.</p>',
            '<img src="../img/saturnp.png" height="500">',
        ),

    );

    public function mostraPlaneta()
    {
        echo $this->Planetas[$this->id][0];
        echo $this->Planetas[$this->id][1];
        echo $this->Planetas[$this->id][2];
    }
}
