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

   <link rel="stylesheet" type="text/css" href="css/midia9.css">

</head>

<body ng-controller="Lead">

   <div id="wrapper">

      <?php include_once('includes/header.php');?>

      <div class="section margin-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title clearfix text-center">
                     <h4 class="color-starfor starfor1">Conheça os Benefícios da Venda Direta</h4>
                     <hr class="custom">
                  </div>
               </div>
            </div>

            <div class="row">

               <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <h2 class="color-starfor starfor1">PESSOA FÍSICA</h2>
                  <hr class="custom">
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="blog-wrapper">
                     <div class="post-media entry">
                        <img src="uploads/vendas-diretas/parceria.jpg" alt="parceria" class="img-responsive">
                     </div>

                     <div class="blog-details">
                        <h4 class="color-starfor">PROGRAMA PARCERIA FORD</h4>
                        <p>Venda Pessoa Física exclusiva para funcionário das empresas pertencentes ao Programa Parceria Ford.</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="blog-wrapper">
                     <div class="post-media entry">
                        <img src="uploads/vendas-diretas/produtor-rural.jpg" alt="produtor" class="img-responsive">
                     </div>

                     <div class="blog-details">
                        <h4 class="color-starfor">PRODUTOR RURAL</h4>
                        <p>Pessoa jurídica que adquire o veículo para sua atividade comercial. (Sem comprovação de frota).</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="blog-wrapper">
                     <div class="post-media entry">
                        <img src="uploads/vendas-diretas/portadores.jpg" alt="portadores" class="img-responsive">
                     </div>

                     <div class="blog-details">
                        <h4 class="color-starfor">PORTADORES DE NECESSIDADES ESPECIAIS</h4>
                        <p>Pessoa jurídica que adquire o veículo para sua atividade como locadora de veículos. (Sem comprovação de frota).</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="blog-wrapper">
                     <div class="post-media entry">
                        <img src="uploads/vendas-diretas/taxista.jpg" alt="taxista" class="img-responsive">
                     </div>

                     <div class="blog-details">
                        <h4 class="color-starfor">TAXISTA</h4>
                        <p>Pessoa jurídica que comprove ser produtor agropecuário através da inscrição estadual ativa ou documento que comprove atividade rural.</p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="margin-section"></div>

               <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                     <h2 class="color-starfor starfor1 title-car">PESSOA JURÍDICA</h2>
                     <hr class="custom">
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="blog-wrapper">
                        <div class="post-media entry">
                           <img src="uploads/vendas-diretas/frotista.jpg" alt="fortista" class="img-responsive">
                        </div>

                        <div class="blog-details">
                           <h4 class="color-starfor">FROTISTA</h4>
                           <p>Venda Pessoa Física exclusiva para funcionário das empresas pertencentes ao Programa Parceria Ford.</p>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="blog-wrapper">
                        <div class="post-media entry">
                           <img src="uploads/vendas-diretas/empresa.jpg" alt="empresa" class="img-responsive">
                        </div>

                        <div class="blog-details">
                           <h4 class="color-starfor">EMPRESA</h4>
                           <p>Pessoa jurídica com frota mínima de 4 veículos de qualquer marca.</p>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="blog-wrapper">
                        <div class="post-media entry">
                           <img src="uploads/vendas-diretas/locadora.jpg" alt="locadora" class="img-responsive">
                        </div>

                        <div class="blog-details">
                           <h4 class="color-starfor">LOCADORA</h4>
                           <p>O Programa Acesso Ford foi desenvolvido exclusivamente para atender portadores de necessidades especiais.</p>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="blog-wrapper">
                        <div class="post-media entry">
                           <img src="uploads/vendas-diretas/produtor-agropecuario.jpg" alt="produtor" class="img-responsive">
                        </div>

                        <div class="blog-details">
                           <h4 class="color-starfor">PRODUTOR AGROPECUÁRIO</h4>
                           <p>Profissionais que exercem a atividade de condutor autônomo de passageiros na categoria táxi, em veículo da sua propriedade.</p>
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

</body>

</html>