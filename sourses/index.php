<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="cópia do facebook">
    <meta name="keywords" content="cópia , facebook, ">
    <meta name="author" content="Allah Macedo">
    <link rel="stylesheet" href="css/estilo.css">
    <title>facebook</title>
</head>
<body>
    <header>
       <div class="box">
       
         <div class="logo">
             <h2>facebook</h2>
         </div> <!-- /.logo -->
        
         <form method="POST" class="form_header">

            <div class="box_input">
                <span>E-mail ou telefone</span>
                <input type="email" name="email" id="" placeholder="flaus.belis@...">
                <span></span>
            </div> <!-- /.box_input -->

            <div class="box_input">
                <span>Senha</span>
                <input type="password" name="senha" placeholder=".........">
                <a href="#">Esqueceu sua senha?</a>
            </div> <!-- /.box_input -->
           
            <div class="box_submit">
                <input type="submit" name="submit" value="Entrar">
            </div> <!-- /.box_input -->

         </form>
       </div> <!-- /.box -->
    </header>

    <main>
        <div class="box">

           <section class="network">
               <p>
                   O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida .
               </p>
                <img src="../sourses/images/img1.png" alt="">
           </section><!-- /.network -->

           <section class="form_main">
               <h1>Abra uma conta</h1>
               <h2>É gratis e sempre será.</h2>
                <form method="POST">

                    <div class="box_input_main w50">
                        <input type="text" name="nome" placeholder="Flaus">
                    </div><!-- /.box_input_main -->

                    <div class="box_input_main w50">
                        <input type="text" name="sobre_nome" placeholder="Flaus Belis">
                    </div><!-- /.box_input_main -->

                    <div class="box_input_main w100">
                        <input type="email" name="email" placeholder="flaus.belis@...">
                    </div><!-- /.box_input_main -->

                    <div class="box_input_main w100">
                        <input type="password" name="senha" placeholder=".........">
                    </div><!-- /.box_input_main -->

                    <div class="select_class w100">
                        <h2>Data de nascimento</h2>
                        <div class="selects">
                            <select name="" class="dia"> 
                              <option value="" disabled>Dia</option>
                              <?php
                                  for($i = 0; $i <= 31; $i++) {
                               ?>
                              
                                <option value="<?php echo"$i"; ?>"> <?php echo"$i"; ?></option>
                                <?php } ?>
                            </select>

                            <select name="" class="mes">
                                <option value="" disabled>Mês</option>
                                <option value="">Janeiro</option>
                                <option value="">Fevereiro</option>
                                <option value="">Março</option>
                                <option value="">Maio</option>
                            </select>

                            <select name="" class="ano">
                                <option value="" disabled>Ano</option>
                                <?php
                                    for($i = 1950; $i <= 2010; $i++) {
                                ?>
                                    <option value="<?php echo"$i"; ?>"> <?php echo"$i"; ?></option>
                                    <?php } ?>
                            </select>
                            <p>Porquê preciso informar minha data de nascimento?</p>
                        </div><!-- selects -->
                    </div><!-- select_class-->

                    <div class="radio_gender w100">
                        <input type="radio" name="gender">
                        <span>Masculino</span>

                        <input type="radio" name="gender">
                        <span>Feminino</span>
                    </div><!-- radio_gender -->

                    <div class="box_p">
                        <p>
                            Ao clicar em Abrir uma conta , você concorda com nossos
                            <a href="#">Termos</a> e que leu nossa <a href="#">Politica de Dados</a> , 
                            incluindo nosso <a href="#">Uso de cookies.</a> Você pode receber notificações 
                            por SMS do Facebook e pode cancelar o recebimento a qualquer momento.  
                        </p>
                    </div>   <!-- /.box_p -->
                 
                  

                    <div class="box_input_main_submit">
                        <input type="submit" name="submit" value="Abrir uma conta">
                    </div><!-- /.box_input_main -->
                    
                </form><!--form-->
           </section>  <!-- /.form_main -->

        </div>  <!-- /.box -->
    </main>

    <footer class="footer">
        <div class="a_footer_box">
            <div class="a_footer">
                <a href="#">Português(BR)</a>
                <a href="#">Francês</a>
                <a href="#">Deutch</a>
                <a href="#">Inglês</a>
                <a href="#">Espanhol</a>
                <a href="#">Italiano</a>
                <a href="#">Gaelico</a>
            </div> <!-- /.a_footer -->

            <div class="duex_footer">
                <a href="#">Flaus Belis</a>
            </div> <!-- /.duex_footer -->
           
        </div> <!-- /.a_footer -->
    </footer>

</body>
</html>