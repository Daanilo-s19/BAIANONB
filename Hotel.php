<?php
require_once 'Apartamento.php';
class Hotel extends Apartamento {
    protected $academia, $jogos, $vista;
    
    public function __construct($nome, $imagem, $sala, $quarto, $cozinha, $banheiro, $disp, $piscina, $estacionamento, $elevador, $suite, $academia, $jogos, $vista, $valor, $tipo, $local, $checkIn, $checkOut, $hospedes) {
        parent::__construct($nome, $imagem, $sala, $quarto, $cozinha, $banheiro, $disp, $piscina, $estacionamento, $elevador, $suite, $valor, $tipo, $local, $checkIn, $checkOut, $hospedes);
    
        $this->academia = $academia;
        $this->jogos = $jogos;
        $this->vista = $vista;
    }
    
       public function exibirImovel() {

        echo" <div class = \"col-sm-4\">
                                <div class=\"product-image-wrapper\">
                                    <div class=\"single-products\">
                                        <div class=\"productinfo text-center\">
                                            <img src=\"{$this->getImagem()}\" alt=\"\" />
                                            <h2>R$ {$this->getValor()}</h2>
                                            <p>{$this->getNome()}</p>                                             
                                             <form name=\"detalhe\" method=\"POST\" action=\"Detalhe_produto.php\">
                                            <input type=\"hidden\" name=\"banheiro\" id=\"banheiro\" value=\"{$this->getBanheiro()}\">
                                            <input type=\"hidden\" name=\"cozinha\" id=\"cozinha\" value=\"{$this->getCozinha()}\">
                                            <input type=\"hidden\" name=\"disp\" id=\"disp\" value=\"{$this->getDisp()}\">
                                            <input type=\"hidden\" name=\"imagem\" id=\"imagem\" value=\"{$this->getImagem()}\">
                                            <input type=\"hidden\" name=\"nome\" id=\"nome\" value=\"{$this->getNome()}\">
                                            <input type=\"hidden\" name=\"quarto\" id=\"quarto\" value=\"{$this->getQuarto()}\">
                                            <input type=\"hidden\" name=\"sala\" id=\"sala\" value=\"{$this->getSala()}\">
                                            <input type=\"hidden\" name=\"valor\" id=\"valor\" value=\"{$this->getValor()}\">
                                            <input type=\"hidden\" name=\"checkin\" id=\"checkin\" value=\"{$this->getCheckIn()}\">
                                            <input type=\"hidden\" name=\"checkout\" id=\"checkout\" value=\"{$this->getCheckOut()}\">
                                            <input type=\"hidden\" name=\"dias\" id=\"dias\" value=\"{$this->getDias()}\">
                                            <input type=\"hidden\" name=\"hospedes\" id=\"hospedes\" value=\"{$this->getHospedes()}\">
                                            <input type=\"hidden\" name=\"local\" id=\"local\" value=\"{$this->getLocal()}\">  
                                            <input type=\"hidden\" name=\"estacionamento\" id=\"estacionamento\" value=\"{$this->getEstacionamento()}\">
                                            <input type=\"hidden\" name=\"piscina\" id=\"piscina\" value=\"{$this->getPiscina()}\"> 
                                            <input type=\"hidden\" name=\"tipo\" id=\"tipo\" value=\"{$this->getTipo()}\">                                                
                                            <input type=\"hidden\" name=\"suite\" id=\"suite\" value=\"{$this->getSuite()}\">
                                            <input type=\"hidden\" name=\"elevador\" id=\"elevador\" value=\"{$this->getElevador()}\">
                                            <input type=\"hidden\" name=\"academia\" id=\"academia\" value=\"{$this->getAcademia()}\">
                                            <input type=\"hidden\" name=\"jogos\" id=\"jogos\" value=\"{$this->getJogos()}\">
                                            <input type=\"hidden\" name=\"vista\" id=\"vista\" value=\"{$this->getVista()}\">
                                            <input type=\"hidden\" name=\"confirmar\" id=\"confirmar\" value=\"0\">
                                            <input type=\"submit\" value=\"RESERVAR\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i> > 
                                             </form>
                                           
                                        </div>
                                        <div class=\"product-overlay\">
                                            <div class=\"overlay-content\">
                                                <h2>R$ {$this->getValor()}</h2>
                                                <p>{$this->getNome()}</p>                                           
                                             <form name=\"detalhe\" method=\"POST\" action=\"Detalhe_produto.php\">
                                            <input type=\"hidden\" name=\"banheiro\" id=\"banheiro\" value=\"{$this->getBanheiro()}\">
                                            <input type=\"hidden\" name=\"cozinha\" id=\"cozinha\" value=\"{$this->getCozinha()}\">
                                            <input type=\"hidden\" name=\"disp\" id=\"disp\" value=\"{$this->getDisp()}\">
                                            <input type=\"hidden\" name=\"imagem\" id=\"imagem\" value=\"{$this->getImagem()}\">
                                            <input type=\"hidden\" name=\"nome\" id=\"nome\" value=\"{$this->getNome()}\">
                                            <input type=\"hidden\" name=\"quarto\" id=\"quarto\" value=\"{$this->getQuarto()}\">
                                            <input type=\"hidden\" name=\"sala\" id=\"sala\" value=\"{$this->getSala()}\">
                                            <input type=\"hidden\" name=\"valor\" id=\"valor\" value=\"{$this->getValor()}\">
                                            <input type=\"hidden\" name=\"checkin\" id=\"checkin\" value=\"{$this->getCheckIn()}\">
                                            <input type=\"hidden\" name=\"checkout\" id=\"checkout\" value=\"{$this->getCheckOut()}\">
                                            <input type=\"hidden\" name=\"dias\" id=\"dias\" value=\"{$this->getDias()}\">
                                            <input type=\"hidden\" name=\"hospedes\" id=\"hospedes\" value=\"{$this->getHospedes()}\">
                                            <input type=\"hidden\" name=\"local\" id=\"local\" value=\"{$this->getLocal()}\">  
                                            <input type=\"hidden\" name=\"estacionamento\" id=\"estacionamento\" value=\"{$this->getEstacionamento()}\">
                                            <input type=\"hidden\" name=\"piscina\" id=\"piscina\" value=\"{$this->getPiscina()}\"> 
                                            <input type=\"hidden\" name=\"tipo\" id=\"tipo\" value=\"{$this->getTipo()}\">                                                
                                            <input type=\"hidden\" name=\"suite\" id=\"suite\" value=\"{$this->getSuite()}\">
                                            <input type=\"hidden\" name=\"elevador\" id=\"elevador\" value=\"{$this->getElevador()}\">
                                            <input type=\"hidden\" name=\"academia\" id=\"academia\" value=\"{$this->getAcademia()}\">
                                            <input type=\"hidden\" name=\"jogos\" id=\"jogos\" value=\"{$this->getJogos()}\">
                                            <input type=\"hidden\" name=\"vista\" id=\"vista\" value=\"{$this->getVista()}\">                                                
                                            <input type=\"hidden\" name=\"confirmar\" id=\"confirmar\" value=\"0\">
                                            <input type=\"submit\" value=\"RESERVAR\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i> > 
                                             </form>
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div> ";
    }
    
     public function imagem() {
      parent::imagem();
    echo " 
     <p><b>VISTA PARA:</b> {$this->getVista()}</p>
    <p><b>TOTAL DE ACADEMIA:</b> {$this->getAcademia()}</p>
    <p><b>TOTAL DE  SALÃO JOGOS:</b> {$this->getJogos()}</p>";     
    
    }
    
     public function reservar() {
      $ERRO[] = ($this->getDias() == 0)? " ERRO NO CHECK-IN /CHECK-OUT" :NULL;
        $ERRO[] = ($this->getLocal() == NULL) ? "<p>LOCAL INVALIDO</p>" :NULL;
        $ERRO[] =($this->getHospedes() == 0)? "<p>NUMERO DE HOSPEDES INVALIDO</p>": NULL;
        $hoje = date('d-m-Y');       

        $id = rand(1, 150);
      @$valor = number_format(($this->getValor() * $this->getDias()), 2);
        echo "<div class=\"col-sm-7\">
              <div class=\"product-information\"><!--/product-information-->                                     
                                    <img src=\"images/product-details/new.jpg\" class=\"newarrival\" alt=\"\" />  
                                 
                                    <h2>{$this->getNome()}</h2>                                    
                                    <p>Web ID:$id</p>
                                    <img src=\"images/product-details/rating.png\" alt=\"\" />
                                    <span>
                                        <span>R$ $valor </span>
                                        <label>VERIFIQUE OS DADOS ANTES DE CONFIRMAR</label>                                      
                                        <p>$ERRO[0]</p>                                        
                                        <p>$ERRO[1]</p>
                                        
                                    </span>
        
                          <form name=\"detalhe\" method=\"POST\" action=\"Detalhe_produto.php\">
                          <input type=\"hidden\" name=\"banheiro\" id=\"banheiro\" value=\"{$this->getBanheiro()}\">
                          <input type=\"hidden\" name=\"cozinha\" id=\"cozinha\" value=\"{$this->getCozinha()}\">
                          <input type=\"hidden\" name=\"disp\" id=\"disp\" value=\"{$this->getDisp()}\">
                          <input type=\"hidden\" name=\"imagem\" id=\"imagem\" value=\"{$this->getImagem()}\">
                          <input type=\"hidden\" name=\"nome\" id=\"iome\" value=\"{$this->getNome()}\">
                          <input type=\"hidden\" name=\"quarto\" id=\"quarto\" value=\"{$this->getQuarto()}\">
                          <input type=\"hidden\" name=\"sala\" id=\"sala\" value=\"{$this->getSala()}\">
                          <input type=\"hidden\" name=\"valor\" id=\"valor\" value=\"{$this->getValor()}\">
                          <input type=\"hidden\" name=\"checkin\" id=\"checkin\" value=\"{$this->getCheckIn()}\">
                          <input type=\"hidden\" name=\"checkout\" id=\"checkout\" value=\"{$this->getCheckOut()}\">
                          <input type=\"hidden\" name=\"dias\" id=\"dias\" value=\"{$this->getDias()}\">
                          <input type=\"hidden\" name=\"hospedes\" id=\"hospedes\" value=\"{$this->getHospedes()}\">
                          <input type=\"hidden\" name=\"local\" id=\"local\" value=\"{$this->getLocal()}\">
                          <input type=\"hidden\" name=\"estacionamento\" id=\"estacionamento\" value=\"{$this->getEstacionamento()}\">
                          <input type=\"hidden\" name=\"piscina\" id=\"piscina\" value=\"{$this->getPiscina()}\">
                          <input type=\"hidden\" name=\"tipo\" id=\"tipo\" value=\"{$this->getTipo()}\"> 
                          <input type=\"hidden\" name=\"elevador\" id=\"elevador\" value=\"{$this->getElevador()}\">
                          <input type=\"hidden\" name=\"suite\" id=\"suite\" value=\"{$this->getSuite()}\">   
                          <input type=\"hidden\" name=\"academia\" id=\"academia\" value=\"{$this->getAcademia()}\">
                          <input type=\"hidden\" name=\"jogos\" id=\"jogos\" value=\"{$this->getJogos()}\">
                          <input type=\"hidden\" name=\"vista\" id=\"vista\" value=\"{$this->getVista()}\"> 
                          <input type=\"hidden\" name=\"confirmar\" id=\"confirmar\" value=\"1\">                                                 
                          <input type=\"submit\" value=\"CONFIRMAR\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i> > 
                           </form>

                  <div class=\"tab-pane fade active in\" id=\"reviews\" >
                  <div class=\"col-sm-12\">
                      <ul>
                      <form name=\"check\" action=\"Detalhe_produto.php\" method=\"POST\">
                           <li><a href=\"#\"><i class=\"fa fa-user\"></i><p><b>NUMERO DE HOSPEDE:</b> {$this->getHospedes()}</p></a></li> 
                          <input type=\"text\" placeholder=\"destino\" name=\"hospedes1\">
                          <p></p>
                          <li><a href=\"#\"><i class=\"fa fa-user\"></i><p><b>LOCAL DA RESERVA:</b> {$this->getLocal()}</p></a></li> 
                          <input type=\"text\" placeholder=\"destino\" name=\"local1\">
                          <p></p>
                          <li><a href=\"#\"><i class=\"fa fa-calendar-o\"></i><p><b> DATA DECHECK-IN:</b> {$this->getCheckIn()}</p></a></li>
                          <input type=\"date\" placeholder=\"Data de Check-in\" name=\"checkin1\">
                          <p></p>
                          <li><a href=\"#\"><i class=\"fa fa-calendar-o\"></i><p><b>DATA DE CHECK-OUT:</b> {$this->getCheckOut()}</p></a></li>
                          <input type=\"date\" placeholder=\"Data deCheck-Out\" name=\"checkout1\">                                              
                          <p></p>
                          <li><a href=\"#\"><i class=\"fa fa-user\"></i><p><b>TOTAL DE DIAS:</b> {$this->getDias()}</p></a></li>
                          <p></p>
                          <input type=\"hidden\" name=\"banheiro\" id=\"banheiro\" value=\"{$this->getBanheiro()}\">
                          <input type=\"hidden\" name=\"cozinha\" id=\"cozinha\" value=\"{$this->getCozinha()}\">
                          <input type=\"hidden\" name=\"disp\" id=\"disp\" value=\"{$this->getDisp()}\">
                          <input type=\"hidden\" name=\"imagem\" id=\"imagem\" value=\"{$this->getImagem()}\">
                          <input type=\"hidden\" name=\"nome\" id=\"iome\" value=\"{$this->getNome()}\">
                          <input type=\"hidden\" name=\"quarto\" id=\"quarto\" value=\"{$this->getQuarto()}\">
                          <input type=\"hidden\" name=\"sala\" id=\"sala\" value=\"{$this->getSala()}\">
                          <input type=\"hidden\" name=\"valor\" id=\"valor\" value=\"{$this->getValor()}\">
                          <input type=\"hidden\" name=\"checkin\" id=\"checkin\" value=\"{$this->getCheckIn()}\">
                          <input type=\"hidden\" name=\"checkout\" id=\"checkout\" value=\"{$this->getCheckOut()}\">
                          <input type=\"hidden\" name=\"dias\" id=\"dias\" value=\"{$this->getDias()}\">
                          <input type=\"hidden\" name=\"hospedes\" id=\"hospedes\" value=\"{$this->getHospedes()}\">
                          <input type=\"hidden\" name=\"local\" id=\"local\" value=\"{$this->getLocal()}\">
                          <input type=\"hidden\" name=\"estacionamento\" id=\"estacionamento\" value=\"{$this->getEstacionamento()}\">
                          <input type=\"hidden\" name=\"piscina\" id=\"piscina\" value=\"{$this->getPiscina()}\">
                          <input type=\"hidden\" name=\"tipo\" id=\"tipo\" value=\"{$this->getTipo()}\">                                            
                          <input type=\"hidden\" name=\"elevador\" id=\"elevador\" value=\"{$this->getElevador()}\">
                          <input type=\"hidden\" name=\"suite\" id=\"suite\" value=\"{$this->getSuite()}\">
                         <input type=\"hidden\" name=\"academia\" id=\"academia\" value=\"{$this->getAcademia()}\">
                          <input type=\"hidden\" name=\"jogos\" id=\"jogos\" value=\"{$this->getJogos()}\">
                          <input type=\"hidden\" name=\"vista\" id=\"vista\" value=\"{$this->getVista()}\"> 
                          <input type=\"hidden\" name=\"confirmar\" id=\"confirmar\" value=\"0\">
                          <input type=\"submit\" value=\"ALTERAR CHECK-IN\"   class=\"btn btn-primary\" lass=\"btn btn-fefault cart\" >
                      </form>
                      </ul>                                   
                  </div> 



              </div> 

                  <a href=\"\"><img src=\"images/product-details/share.png\" class=\"share img-responsive\"  alt=\"\" /></a>
              </div><!--/product-information-->
          </div>
      </div><!--/product-details-->";

    }
    
    public function getAcademia() {
        return $this->academia;
    }

    public function getJogos() {
        return $this->jogos;
    }

    public function getVista() {
        return $this->vista;
    }

    public function setAcademia($academia) {
        $this->academia = $academia;
    }

    public function setJogos($jogos) {
        $this->jogos = $jogos;
    }

    public function setVista($vista) {
        $this->vista = $vista;
    }


   
}
