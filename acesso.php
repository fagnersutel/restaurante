<?php
$paph = "../../transparencia/";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PLATAFORMA PPGCM | CAPES</title>

    <!-- Bootstrap -->
    <link href="<?php echo $paph; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $paph; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $paph; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo $paph; ?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo $paph; ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form action="login.php" method="POST">
              <h1>Plataforma de Informações Docentes</h1>
              <h1>Para realizar inserções de dados você precisa estar logado</h1>
              <div>
                <input type="text" class="form-control" name="login" placeholder="email" required="" />
              </div>
              <div>
                  <input type="password" class="form-control" name="senha" placeholder="Sua senha......" required="" />
              </div>
              <div>
                <input type="submit" value="Login">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#" class="to_register"> Criar conta? </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-area-chart"></i> Informações CAPES!</h1>
                  <p>© <?php echo date('Y');  ?> Todos Direitos Reservados. <a href="http:sutel.com.br">Sutel Tecnologia em Dados</a> </p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
