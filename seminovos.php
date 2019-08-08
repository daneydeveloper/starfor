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

  <!-- REVOLUTION CSS -->
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

  <link rel="stylesheet" type="text/css" href="css/midia9.css">
</head>

<body ng-controller="Home">

   <div id="wrapper">

      <?php include_once('includes/header.php');?>

      <div class="margin-section"></div>

      <div class="section">
         <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
               <div class="welcome-widget clearfix ">
                  <div class="section-title clearfix">
                     <h4 class="starfor1 color-starfor">Nossos Seminovos</h4>
                     <hr class="custom">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                  <div class="car-list-wrapper clearfix">
                     <div class="row grid-wrapper" >

                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" ng-repeat="item in dados.modelos | filter:filtro">
                           <div class="car-wrapper clearfix margin-section text-center">
                              <a href="seminovo?id={{item.PRO_CodigoProduto}}">
	                              <div class="post-media entry">
	                                 <img ng-src="http://crm2.marketingmidia9.com.br/assets/image/produtos/{{item.PROI_Image}}" alt="{{item.PRO_Nome}}" class="img-responsive">
	                              </div>
                              </a>
                              <a href="seminovo?id={{item.PRO_CodigoProduto}}">
                              	<h4 class="nome-car">{{item.PRO_MetaDados.PRO_Marca}} {{item.PRO_MetaDados.PRO_Modelo}}</h4>
                           	</a>
                           	<p class="seminovo-descricao">{{item.PRO_MetaDados.PRO_Combustivel}}, {{item.PRO_MetaDados.PRO_Cambio}}, <b>{{item.PRO_MetaDados.PRO_Ano}}</b></p>
                           	<h4 class="color-starfor car-preco">{{item.PRO_MetaDados.PRO_Preco | currency: 'R$ '}}</h4>
                              <a href="seminovo?id={{item.PRO_CodigoProduto}}"><button class="btn btn-primary seminovo-titulo">PEGAR OFERTA</button></a> 
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

   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap-select.js"></script>
   <script src="js/retina.js"></script>
   <script src="js/animate.js"></script>
   <script src="js/device.js"></script>
   <script src="js/parallax.js"></script>
   <script src="js/fitvid.js"></script>
   <script src="js/owl-carousel.js"></script>
   <script src="js/custom.js"></script>
   
   <script src="http://cdn.marketingmidia9.com.br/js/crmv2.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
   <script src="js/angular-flexslider.js"></script>
   <script src="js/crm.js"></script>

</body>

</html>