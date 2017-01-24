<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Detalles de Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" role="form" style="margin: 0 auto; max-width: 330px; padding: 15px;" >
                <legend>Detalles del usuario</legend>
                <?php if (isset($flash['error'])): ?>
                    <p class="text-error"><?php echo $flash['error']; ?></p>
                <?php endif ?>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $name; ?>" >
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" >
                    <label>phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $phone; ?>" >
                    <label>address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" >
                    <label>position</label>
                    <input type="text" class="form-control" id="position" name="position" value="<?php echo $position; ?>" >
                    <label>salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $salary; ?>" >
                    <label>Skills</label>
                    <?php //var_dump($skills); ?>
                    <?php foreach ($skills as $key => $value) { ?>
                        <ul>
                            <li><a><?php echo $value['skill']; ?></a></li>
                        </ul>
                    <?php }
                    ?>
                </div>
                <div class="form-group" style="height: 20px;">
                    <?php if (isset($flash['message'])): ?>
                        <p class="text-success"><?php echo $flash['message']; ?></p>
                    <?php endif ?>
                </div>
                    
                <a href="../../usuarios" class="btn btn-success">Regresar</a>
            </form>
        </div>

    </body>
</html>