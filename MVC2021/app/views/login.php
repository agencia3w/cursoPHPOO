<h2>Login</h2>


<form action="/login/store" method="post">
    <input type="text" name="email" placeholder="Email" value="paulinho@agencia3w.com.br">
    <input type="password" name="password" placeholder="Senha" value="123456">
    <button type="submit">Entrar</button>
</form>

<br>

<?php echo flash('login'); ?>