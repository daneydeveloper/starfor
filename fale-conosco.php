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

<body ng-controller="Lead">

  <div id="wrapper">

    <?php include_once('includes/header.php');?>

    <div class="section">
      <div class="container">
        <div class="row margin-section">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="section-title clearfix">
              <h5>Contato</h5>
              <hr class="custom">
            </div>

            <div class="contact-departments contact-version clearfix">
              <div class=" owl-theme">
                <div>
                  <ul class="contact-widget clearfix">
                    <li>
                      <i class="fa fa-map-marker alignleft"></i>
                      <strong>Endereço</strong> Av. Senador Virgílio Távora, 2655<br> Dioníso Torres, Fortaleza/CE
                    </li>
                    <li>
                      <i class="fa fa-clock-o alignleft"></i>
                      <strong>Horário de Funcionamento</strong> Seg - Sex : 08h às 18h<br>Sáb: 08h às 13h
                    </li>
                    <li>
                      <i class="fa fa-phone alignleft"></i>
                      <strong>Atendimento</strong> (85) 3207-8000
                    </li>
                  </ul>
                </div>
              </div>
              <div class="contact-version social-icons">
                <ul class="list-inline">
                  <li><strong>Redes Sociais</strong></li>
                  <li><a href="https://www.facebook.com/fordstarfor"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/fordstarfor/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="section-title clearfix">
              <h5>Entre em Contato</h5>
              <hr class="custom">
            </div>
            <!-- end section-title -->

            <div class="search-tab lightversion clearfix">
              <div class="search-wrapper">
                <form class="row" name="form">
                	<input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Nome*">
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" type="email" class="form-control" placeholder="Email*">
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" id="telefone" minlength="11" maxlength="15" type="text" class="form-control" placeholder="Telefone*">
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea ng-model="dados.LE_Descricao" ng-disabled="load" ng-required="true" class="form-control" placeholder="Mensagem*"></textarea>
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

    <div style="width: 100%;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1362.5939745120702!2d-38.497667046675076!3d-3.750053978282975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7489709afb0c7%3A0x89581fc8546370d9!2sStarfor!5e0!3m2!1spt-BR!2sbr!4v1517841821855" width="100%" height="400" style="border:0" allowfullscreen></iframe>
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

  <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
  <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
  <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
  <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
  <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
  <script type="text/javascript">
    angular.module('app', ['ngMask', 'ngDialog'])
      .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike) {
        $log.warn($location.host());
        $scope.load = false;
        $scope.dados = {};
        var host = 'http://crm2.marketingmidia9.com.br'
        var registra_acesso = function() {
          $http.get(host + '/api/registraAcesso/eI5ngfLHp3wJzYxsog_P5jylzzWmdAEjUQDpXmJU9SU')
            .success(function(result) {
              $log.info(result);
              $scope.request = result.data;
            });

          $http.get('http://ipv4.myexternalip.com/json')
            .success(function(result) {
              $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip=' + result.ip + '&format=json')
                .success(function(data) {
                  /*$log.info(data);*/
                  $scope.meta = data;
                })
            });
        }

        $scope.enviarLead = function(dados, tmp = null) {
          $scope.load = true;
          dados.EMP_Key = $scope.request.EMP_Key;
          //dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
          dados.LE_CodigoTipo = 9996;
          dados.LE_CodigoProduto = 730;
          dados.LE_MetaDado = $scope.meta;
          $log.info(dados);

          $http({
              method: 'POST',
              url: host + '/api2/registraLead',
              data: $httpParamSerializerJQLike(dados),
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            })
            .success(function(retorno) {
              $scope.load = false;
              if (!retorno.error) {
                swal({
                    title: "Obrigado!",
                    text: "suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
                    type: "success",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok",
                    closeOnConfirm: false
                  },
                  function() {
                    window.location.href = "https://www.facebook.com/fordstarfor";
                  });
              } else {
                swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
              }
            })
            .error(function(retorno) {
              $scope.load = false;
              $log.error(retorno);
            });

        }

        registra_acesso();
      });
  </script>

</body>

</html>