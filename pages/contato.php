<h1 class="text-center">Contato</h1>

<p class="text-center">Entre em contato e a Doce Caseiro te responder√° em breve!</p>
<div class="row contato">
    <?php if(isset($_SESSION['mensagem'])):?>
        <div class="alert alert-success"><?=$_SESSION['mensagem'];?></div>
    <?php endif; ?>
    <form action="dados/contatoController.php" method="post" class="form form-contato">
        <div class="form-group">
            <label for="nome" class="label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" autocomplete="off" required placeholder="Nome" autofocus>
        </div>
        <div class="form-group">
            <label for="email" class="label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="mensagem" class="label">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" class="form-control" required  placeholder="Sua mensagem...."></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-primary">
            <a href="?page=home" class="btn btn-secondary">Voltar para Home</a>
        </div>
    </form>
</div>