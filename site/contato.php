<?php require "includes/cabecalho.php"; ?>
        <h2>Entre em contato conosco:</h2>
        <form id="" action="" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"> 
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email"> 
        </div>
        <div>
            <label for="mensagem">Mensagem:</label>
            <br>
            <textarea name="mensagem" id="mensagem" maxlength="100" cols="20" rows="5"></textarea>
        </div>
        <button type="submit">Enviar</button>
        </form>
<?php require "includes/rodape.php"; ?>