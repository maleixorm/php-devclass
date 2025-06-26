<h2>Contato</h2>

<?= get('message'); ?>

<form action="pages/forms/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome...">
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email...">
    </div>
    <div class="form-group">
        <label for="subject" class="form-label">Assunto:</label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Digite o assunto...">
    </div>
    <div class="form-group">
        <label for="message" class="form-label">Mensagem:</label>
        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Sua mensagem aqui..."></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>