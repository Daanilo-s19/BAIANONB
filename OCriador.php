<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>O Criador | Bacana Imoveis</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-phone"></i>4002 -8922</a></li>
                                    <li><a href=""><i class="fa fa-envelope"></i> elenao@uneb.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 clearfix">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right clearfix">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        USA
                                        <span class="caret"></span>
                                    </button>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="index_principal.php">Principal</a></li>
                        <li class="active">Criar Objetos</li>
                    </ol>
                </div><!--/breadcrums-->

                <div class="step-one">
                    <h2 class="heading">Formlário Criador</h2>
                </div>


                <div class="register-req">
                    <p>Formulário que cria obejtos de maneira interativa</p>
                </div><!--/register-req-->
                <div class="shopper-informations">
                    <div class="row">

                        <div class="col-sm-5 clearfix">
                            <div class="bill-to">
                                <p>Imoveis</p>
                                <div class="form-one">
                                    <form name="Ocriador" action="OCriador.php" method="GET">

                                        <label for="CASA"> IMOVEL 1-casa 2-apartamento 3- Casa de campo</label>
                                        <input type="number" name="TIPO" placeholder="Tipo de imovel" min ="1" max="4"  />                                        
                                        <input type="text" placeholder="Nome do Imovel" name="NOME">
                                        <input type="number" placeholder="Total Banheiro" min="0" name="BANHEIRO">
                                        <input type="number" placeholder="Total de cozinha" min="0" name="COZINHA">
                                        <input type="number" placeholder="Total Sala" min="0" name="SALA">
                                        <input type="number" placeholder="Total de Quartos" min="0"  name="QUARTO">
                                        <input type="number" placeholder="Valor do Imovel" min="0" name="VALOR">
                                        <input type="text" placeholder="Caminho da imagem" name="IMG" >
                                        <input type="number" placeholder="Disponibilidade do imovel" max="1" min="0" name="DISP" >
                                        <input type="number" placeholder="Estacionamento" max="1" min="0"  name="ESTACIONAMENTO" >                                        
                                        <input type="number" placeholder="Quintal" max="1" min="0"  name="QUINTAL" >                                        
                                        <input type="number" placeholder="Piscina" max="1" min="0" name="PISCINA" >                                       
                                        <input type="number" placeholder="Elevador" max="1" min="0" name="ELEVADOR" >                                        
                                        <input type="number" placeholder="Suite" max="1" min="0"  name="SUITE" >                                        
                                        <input type="number" placeholder="Academia" max="1" min="0"  name="ACADEMIA" >
                                        <input type="text" placeholder="Vegetação" name="VEGETACAO" >
                                        <input type="text" placeholder="Animais" name="ANIMAL" >
                                        <input type="number" placeholder="SALA DE JOGOS" name="JOGOS" min="0" max="1" >
                                        <input type="text" placeholder="VISTA EXTRERNA" name="VISTA" >
                                        
                                        <input type="submit" value="CRIAR"  >
                                    </form>

                                    <?php
                                    require_once 'Casa.php';
                                    require_once 'Apartamento.php';

                                    if ($_GET["TIPO"] == 1) {
                                        $v = ["NOME", "IMG", "SALA", "QUARTO", "COZINHA", "BANHEIRO", "DISP",
                                            "PISCINA", "ESTACIONAMENTO", "VALOR", "QUINTAL", "TIPO"];

                                        $fp = fopen("Casa.txt", "a");
                                        if ($fp == NULL)
                                            echo "ERRO\n";

                                        foreach ($v as $item)
                                            fwrite($fp, $_GET[$item] . PHP_EOL);

                                        fclose($fp);
                                    }
                                    else if ($_GET["TIPO"] == 2) {

                                        $v = ["NOME", "IMG", "SALA", "QUARTO", "COZINHA", "BANHEIRO", "DISP",
                                            "PISCINA", "ESTACIONAMENTO", "ELEVADOR", "SUITE", "VALOR", "TIPO"];

                                        $fp = fopen("Apartamento.txt", "a");
                                        if ($fp == NULL)
                                            echo "VTNC\n";

                                        foreach ($v as $item) {
                                            fwrite($fp, $_GET[$item] . PHP_EOL);
                                        }
                                        fclose($fp);
                                    }
                                    else if ($_GET["TIPO"] == 3) {
                                        $v = ["NOME", "IMG", "SALA", "QUARTO", "COZINHA", "BANHEIRO", "DISP",
                                            "PISCINA", "ESTACIONAMENTO", "VALOR", "QUINTAL","VEGETACAO", "ANIMAL", "TIPO"];

                                        $fp = fopen("CasaCampo.txt", "a");
                                        if ($fp == NULL)
                                            echo "ERRO\n";

                                        foreach ($v as $item)
                                            fwrite($fp, $_GET[$item] . PHP_EOL);

                                        fclose($fp);
                                    } 
                                    
                                    else if ($_GET["TIPO"] == 4) {
                                        $v = ["NOME", "IMG", "SALA", "QUARTO", "COZINHA", "BANHEIRO", "DISP",
                                            "PISCINA", "ESTACIONAMENTO", "ELEVADOR", "SUITE","ACADEMIA","JOGOS","VISTA", "VALOR", "TIPO"];

                                        $fp = fopen("Hotel.txt", "a");
                                        if ($fp == NULL)
                                            echo "VTNC\n";

                                        foreach ($v as $item) {
                                            fwrite($fp, $_GET[$item] . PHP_EOL);
                                        }
                                      fclose($fp);
                                    }
  
                                      ?>

                                </div>

                            </div>
                        </div>                        
                    </div>					
                </div>
            </div>


        </section> <!--/#cart_items-->



        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>e</span>-shopper</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="images/home/iframe1.png" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="images/home/iframe2.png" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="images/home/iframe3.png" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="images/home/iframe4.png" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="address">
                                <img src="images/home/map.png" alt="" />
                                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Service</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Online Help</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Order Status</a></li>
                                    <li><a href="">Change Location</a></li>
                                    <li><a href="">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Quock Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">T-Shirt</a></li>
                                    <li><a href="">Mens</a></li>
                                    <li><a href="">Womens</a></li>
                                    <li><a href="">Gift Cards</a></li>
                                    <li><a href="">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Terms of Use</a></li>
                                    <li><a href="">Privecy Policy</a></li>
                                    <li><a href="">Refund Policy</a></li>
                                    <li><a href="">Billing System</a></li>
                                    <li><a href="">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Company Information</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Store Location</a></li>
                                    <li><a href="">Affillate Program</a></li>
                                    <li><a href="">Copyright</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <form action="#" class="searchform">
                                    <input type="text" placeholder="Your email address" />
                                    <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                    <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->



        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>