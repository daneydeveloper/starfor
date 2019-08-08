<?php $origem = (@$_GET['utm_source'])?$_GET['utm_source']:'Google Adwords';?>
<!DOCTYPE html>
<html lang="pt-BR" ng-app="app">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- SITE META -->
   <title>Starfor | Concessionária Ford em Fortaleza</title>
   <meta name="description" content="Concessionária Starfor Ford. Toda linha de carros Ford em Fortaleza">
   <meta name="author" content="Midia9">
   <meta name="keywords" content="Starfor, ford, ecosport, fusion, ka, ka+, ka mais, new fiesta, focus, fastback, ranger, edge">

   <!-- FAVICONS -->
   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

   <link rel="stylesheet" type="text/css" href="revolution/settings.css">
   <link rel="stylesheet" type="text/css" href="revolution/layers.css">
   <link rel="stylesheet" type="text/css" href="revolution/navigation.css">

   <!-- BOOTSTRAP STYLES -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- TEMPLATE STYLES -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <!-- RESPONSIVE STYLES -->
   <link rel="stylesheet" type="text/css" href="css/responsive.css">
   <!-- COLORS -->
   <link rel="stylesheet" type="text/css" href="css/colors.css">
   <!-- CUSTOM STYLES -->
   <link rel="stylesheet" type="text/css" href="css/custom.css">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" type="text/css" href="css/flexslider.css">
   <link rel="stylesheet" type="text/css" href="css/midia9.css">


   <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert2.css">
   <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
   <style type="text/css">
      .ngdialog.ngdialog-theme-default .ngdialog-content {
         font-size: 1.1em;
         background-color: rgba(255, 255, 255, 0);
         line-height: 1.5em;
         margin: 0 auto;
         max-width: 40%;
         margin-top: 5%;
      }

      .ngdialog-overlay {
         background: rgba(0, 0, 0, 0.68);
      }
   </style>

</head>

<body ng-controller="Detalhe">

   <div id="wrapper">

      <?php include_once('includes/header.php');?>

      <div class="margin-section"></div>

      <div class="section">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-12">
                  <div class="single-car-wrapper clearfix">
                     <div class="row">
                        <div class="col-md-12" id="slider">
                           <div class="col-md-12" id="carousel-bounding-box">
                              <h1 class="color-starfor">{{dados[0].PRO_Nome}} </h1>

                              <div class="w3-content w3-display-container">
                                 
                                 	<div class="flexslider">
  													<ul class="slides">
  														<flex-slider flex-slide="item in dados track by $index">
  															<li><img ng-src="http://crm2.marketingmidia9.com.br/assets/image/produtos/{{item.PROI_Image}}"></li>
  														</flex-slider>
  													</ul>
  												</div>


                                    		<!-- <img class="mySlides" ng-src="http://crm2.marketingmidia9.com.br/assets/image/produtos/{{item.PROI_Image}}" style="width:100%"> -->

                                    <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
                              </div>

                              <h1 class="color-starfor"> {{dados[0].PRO_MetaDados.PRO_Preco | currency: 'R$ '}}</h1>
                           </div>
                        </div>
                     </div>

                     <div class="clearfix"></div>

                     <div class="table-responsive">
                        <table class="table car-table-wrapper">
                           <tbody>
                              <tr>
                                 <td><strong>ANO</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_Ano}}</td>
                              </tr>
                              <tr>
                                 <td><strong>KM</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_KM}}</td>
                              </tr>
                              <tr>
                                 <td><strong>COR</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_Cor}}</td>
                              </tr>
                              <tr>
                                 <td><strong>CÂMBIO</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_Cambio}}</td>
                              </tr>
                              <tr>
                                 <td><strong>Nº DE PORTAS</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_Portas}}</td>
                              </tr>
                              <tr>
                                 <td><strong>COMBUSTÍVEL</strong></td>
                                 <td>{{dados[0].PRO_MetaDados.PRO_Combustivel}}</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                  </div>
               </div>

               <div class="custom-sidebar col-md-4 col-sm-12">

                  <div class="widget custom-widget clearfix">
                     <div class="calculator">
                        <div class="calculator-title">
                           <h4 class="text-center">Enviar Proposta</h4>
                        </div>

                        <div class="search-tab light-tab calculator-body">
                           <div class="search-wrapper">
                              <form name="form" class="row" ng-controller="Lead">
                                 <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
                                 <input type="hidden" ng-init="dados.LE_CodigoProduto=<?=$_GET['id'];?>">

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-input">
                                       <label>Nome*</label>
                                       <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" type="text">
                                    </div>
                                 </div>

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-input">
                                       <label>Email*</label>
                                       <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" class="form-control" type="text">
                                    </div>
                                 </div>

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-input">
                                       <label>Telefone*</label>
                                       <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" type="Phone" id="telefone" minlength="11" maxlength="15">
                                    </div>
                                 </div>

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-primary btn-block" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load">
								              	<b ng-if="!load">Enviar</b>
								              	<b ng-if="load">Enviando...</b>
							               </button>
                                 </div>

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php include_once('includes/footer.php');?>

      <div class="dmtop"><i class="fa fa-angle-up"></i></div>
   </div>

   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap-select.js"></script>
   <script src="js/retina.js"></script>
   <script src="js/animate.js"></script>
   <script src="js/device.js"></script>
   <script src="js/parallax.js"></script>
   <script src="js/fitvid.js"></script>
   <script src="js/owl-carousel.js"></script>
   <script src="js/custom.js"></script>

   <script type="text/javascript">
      /* Máscaras ER */
      function mascara(o, f) {
         v_obj = o
         v_fun = f
         setTimeout("execmascara()", 1)
      }

      function execmascara() {
         v_obj.value = v_fun(v_obj.value)
      }

      function mtel(v) {
         v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
         v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
         v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
         return v;
      }

      function id(el) {
         return document.getElementById(el);
      }
      window.onload = function() {
         id('telefone').onkeyup = function() {
            mascara(this, mtel);
         }
      }
   </script>

   <script type="text/javascript">
   	$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});
   </script>

   <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
   <script type="text/javascript" src="http://www.starfor.com.br/seminovos/js/jquery.flexslider.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/crmv2.js"></script>
   <script src="js/angular-flexslider.js"></script>
   <script src="js/crm.js"></script>
</body>

</html>