<h2>Usuários</h2>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstName?> <?php echo $user->lastName?> | <a href="/user/show/<?php echo $user->id?>">Detalhes</a></li>
    <?php endforeach; ?>
</ul>