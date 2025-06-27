<form action="pages/forms/create_user.php" method="post" role="form">
    
    <div class="form-group">
        <label for="name" class="form-label">Nome: </label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome aqui..." />
    </div>
    
    <div class="form-group">
        <label for="lastname" class="form-label">Sobrenome: </label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Seu sobrenome aqui..." />
    </div>
    
    <div class="form-group">
        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Seu sobrenome aqui..." />
    </div>
    
    <div class="form-group">
        <label for="password" class="form-label">Senha: </label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Seu sobrenome aqui..." />
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
        
</form>

<?= get('message'); ?>