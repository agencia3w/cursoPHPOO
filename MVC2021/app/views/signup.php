<h2>SignUp</h2>
<?php echo flash('created'); ?>

<form action="/signup/store" method="post">
    <input type="text" name="firstName" placeholder="firstName" value="<?php echo old('firstName');?>" class="form-control">
    <?php echo flash('firstName'); ?>
    
    <input type="text" name="lastName" placeholder="lastName" value="<?php echo old('lastName');?>" class="form-control">
    <?php echo flash('lastName'); ?>
    
    <input type="text" name="email" placeholder="Email" value="<?php echo old('email');?>" class="form-control">
    <?php echo flash('email'); ?>
    
    <input type="password" name="password" placeholder="Senha" value="<?php echo old('firspasswordtName');?>" class="form-control">
    <?php echo flash('password'); ?>
    
    <button type="submit">Entrar</button>
</form>

<br>

<?php echo flash('login'); ?>