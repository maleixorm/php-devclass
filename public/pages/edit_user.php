<?php
    $user = find('users', 'id', $_GET['id']);
?>

<form action="pages/forms/update_user.php" method="post" role="form">
    
    <div class="form-group">
        <label for="name" class="form-label">Nome: </label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome aqui..." value="<?= $user->name; ?>" />
    </div>

    <input type="hidden" name="id" value="<?= $user->id; ?>">
    
    <div class="form-group">
        <label for="lastname" class="form-label">Sobrenome: </label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Seu sobrenome aqui..." value="<?= $user->lastname; ?>" />
    </div>
    
    <div class="form-group">
        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Seu email..." value="<?= $user->email; ?>" />
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
        
</form>

<?= get('message'); ?>