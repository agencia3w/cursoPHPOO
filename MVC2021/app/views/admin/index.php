<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>ADMIN::<?php echo $title ?></title>
</head>

<body>
    <div class="container">
        <section id="header">
            <ul id="nav">
                <li><a href="/">Início</a></li>
                <li><a href="/signup">SignUp</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
            <div><?php echo welcome('user'); ?></div>
        </section>
        <?php require VIEW_PATH . $this->controller->view; ?>
    </div>
</body>

</html>