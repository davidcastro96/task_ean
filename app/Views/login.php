<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
</head>

<body>
  <div class="login">
    <h1>Iniciar sesión</h1>
    <form action="<?php echo base_url('/login') ?>" method=" post">
      <input type="text" name="u" placeholder="Username" required="required" />
      <input type="password" name="p" placeholder="Password" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Iniciar</button>
    </form>
  </div>
</body>

</html>