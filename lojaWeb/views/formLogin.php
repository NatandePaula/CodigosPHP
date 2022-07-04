<?php
     require_once 'includes/cabecalho.inc';
?>
    <div style="text-align: center; margin-top: 15px;">
        <h2>Login do sistema</h2><br>
        <p>
        <div style=" margin-top: 20px;">
        <form style="font-size: 20px; display: grid; 
        justify-content: center ; align-items: center; text-align: justify; "
         method="post" action="../controlers/controlerLogin.php">
            <p>Login <input type="text" name="pLogin" size="20"><br>
            <p> Senha <input type="text" name="pSenha" size="10"><br>
            <p> Tipo de usuario:
                <select name="pTipo">
                    <option value="1">Administrador</option>
                    <option value="2"> Cliente</option>
                </select> <br>
            <p style="text-align: center;"><input type="submit" value="Login"> <input type="reset" value="Cancelar">
        </form>
        </form>
        </div>
    </div>
    <p>
    <?php
        if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
        {
        if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
            echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto!</font><b>";
        else
        if ((int)($_REQUEST['erro']) == 2)
            echo "<b><font face='Verdana' size='2' color='blue'>Por favor, efetue seu login!</font><b>";
        }
    ?>
<?php

    if(isset($_REQUEST["erro"])){
        if((int)($_REQUEST["erro"] == 1)){
            echo "<br> <h2>Erro</h2>";
        }
            
        else{
            if((int)($_REQUEST["erro"] == 2)){
                echo "<h2>Por favor, efetue o login</h2>";
            }

        }
            
    }

     require_once 'includes/rodape.inc';
?>