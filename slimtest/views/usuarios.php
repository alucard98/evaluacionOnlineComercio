<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Developers SAC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div style="margin: 0 auto;max-width: 1230px;padding: 15px">
                <h1>Usuarios</h1>                
                <div class="row">  
                    <table  id="example"  class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">Name</th>                                    
                                <th class="column-title">Email</th>
                                <th class="column-title">Position</th>                                    
                                <th class="column-title">Salary</th>
                                <th class="column-title">Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $key => $value) { ?>
                                <tr class="even pointer">
                                    <td class="a-center "><input type="checkbox" class="flat" name="table_records" ></td>
                                    <td class=""><?php echo $value['name']; ?> </td>
                                    <td class=""><?php echo $value['email']; ?> </td>
                                    <td class=""><?php echo $value['position']; ?> </td>
                                    <td class=""><?php echo $value['salary']; ?> </td>
                                    <td class="">   
                                        <a href = "editar/<?php echo $value['id'] ?>/usuario" class = "btn btn-primary" style = "width: 100%;"><i class = "fa fa-pencil-square">Ver</i></a>
                                    </td>
                                </tr>   
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>