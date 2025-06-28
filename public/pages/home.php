<h2 class="my-4">Página Inicial</h2>
<a href="?page=create_user" class="btn btn-secondary mb-4">Cadastrar Usuário</a>
<div
    class="table-responsive"
>
    <table
        class="table table-striped table-hover"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $users = all('users');
                foreach ($users as $user):
            ?>
                <tr class="">
                    <td scope="row"><?= $user->id; ?></td>
                    <td><?= $user->name; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><a href="?page=edit_user&id=<?= $user->id; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="?page=delete_user&id=<?= $user->id; ?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</div>
<?= get('message'); ?>