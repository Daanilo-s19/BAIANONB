<?php

require_once 'form.php';

abstract class Imovel extends form {

    protected $nome, $imagem, $sala, $quarto, $cozinha, $banheiro, $valor, $disp, $piscina, $estacionamento, $tipo, $entrada, $saida;
    protected $reservas = [];

//CONSTRUTOR
    public function __construct($nome, $imagem, $sala, $quarto, $cozinha, $banheiro, $disp, $piscina, $estacionamento, $valor, $tipo, $local, $checkIn, $checkOut, $hospedes) {
        parent::__construct($local, $checkIn, $checkOut, $hospedes);
        $this->sala = $sala;
        $this->quarto = $quarto;
        $this->cozinha = $cozinha;
        $this->banheiro = $banheiro;
        $this->valor = $valor;
        $this->local = $local;
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->disp = $disp;
        $this->estacionamento = $estacionamento;
        $this->piscina = $piscina;
        $this->tipo = $tipo;
    }

    abstract function exibirImovel();   

    abstract public function reservar();

    public function imagem(){
        
        if ($this->getDias() != 0)
            $disponivel = ($this->getDisp() == 1) ? "IMOVEL DISPONIVEL" : "INDISPONIVEL NAS DATAS:";
        else
            $disponivel = "VERIFIQUE O CHECKIN";

        echo "
            <div class = \"view-product\">
            <img src = \"{$this->getImagem()}\" alt = \"\"/>
        <h3>ZOOM</h3>
        </div>  
        
   <p><b>DISPONIBILIDADE DO IMOVEL:</b>{$disponivel}</p>";
        if ($disponivel == "INDISPONIVEL NAS DATAS:") {

            if (($fp = fopen("Reservas.txt", "r")) == NULL) {
                echo "NAO FOI POSSIVEL ABRIR O ARQUIVO";
            }

            $line = 0;
            while ($line !== FALSE) {
                $line = fgets($fp);
                if (stripos($line, $this->getNome()))
                    echo "<p><b>$line</b></p>";
            }
            fclose($fp);
        }

        echo " 
    <p><b>VALOR DA DIÁRIA:</b> {$this->getValor()}</p>                                        
    <p><b>TOTAL DE QUARTOS:</b> {$this->getQuarto()}</p>
    <p><b>TOTAL DE SALAS:</b> {$this->getSala()}</p>
    <p><b>TOTAL DE BANHEIRO:</b> {$this->getBanheiro()}</p>
    <p><b>TOTAL DE COZINHA:</b> {$this->getCozinha()}</p>
    <p><b>TOTAL DE ESTACIONAMENTO:</b> {$this->getEstacionamento()}</p>
    <p><b>TOTAL DE PISCINA:</b> {$this->getPiscina()}</p>
    ";
    
    

    }

    public function VerificarReserva() {        
        $ver = "ENTRADA: {$this->getCheckIn()} - SAIDA: {$this->getCheckOut()} - IMOVEL: {$this->getNome()}";
        if (($fp = fopen("Reservas.txt", "r")) == NULL) {
            echo "NAO FOI POSSIVEL ABRIR O ARQUIVO";
        }

        $line =0;
        while ($line !== FALSE) {
            $line = fgets($fp);
            $this->reservas[] = $line;
        }
        fclose($fp);

        $this->setDisp(1);

        if (($fp = fopen("Reservas.txt", "a")) == NULL) {
            echo "NAO FOI POSSIVEL ABRIR O ARQUIVO";
        }
        foreach ($this->reservas as $campo) {
            if ($campo == $ver) {
              $this->setDisp(0);
              echo "<p><b><h4> INDISPONIVEL NO DIA {$this->getCheckIn()} ATÉ {$this->getCheckOut()}</h4></b></p>";
            }
        }
        if ($this->getDisp() == 1) {
            fwrite($fp, PHP_EOL);
            fwrite($fp, $ver);
            echo '<p><b><h3>RESERVA REALIZADA COM SUCESSO</h3></b></p>';
       
        }
        fclose($fp);
        
        return $this->getDisp();
    }


// GETTERS E SETTERS
    public function getSala() {
        return $this->sala;
    }

    public function getQuarto() {
        return $this->quarto;
    }

    public function getCozinha() {
        return $this->cozinha;
    }

    public function getBanheiro() {
        return $this->banheiro;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }

    public function setQuarto($quarto) {
        $this->quarto = $quarto;
    }

    public function setCozinha($cozinha) {
        $this->cozinha = $cozinha;
    }

    public function setBanheiro($banheiro) {
        $this->banheiro = $banheiro;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDisp() {
        return $this->disp;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDisp($disp) {
        $this->disp = $disp;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function getPiscina() {
        return $this->piscina;
    }

    public function getEstacionamento() {
        return $this->estacionamento;
    }

    public function setPiscina($piscina) {
        $this->piscina = $piscina;
    }

    public function setEstacionamento($estacionamento) {
        $this->estacionamento = $estacionamento;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function getSaida() {
        return $this->saida;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }

    public function setSaida($saida) {
        $this->saida = $saida;
    }

    public function getReservas() {
        return $this->reservas;
    }

    public function setReservas($reservas) {
        $this->reservas = $reservas;
    }

}
