<html>
    <head>
        <title>PHP Developer</title>
    </head>
    <body>
        <div style="width: 700px;margin: auto;">
            <form name="ejercicio1" class="form-horizontal form-label-left" method="get" action="" id="actualiza">
                <fieldset>
                    <h2>Ejercicio # 1 - Reemplazando letras </h2>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ingrese Cadena <span class="required">*</span>
                        </label>
                        <input type="hidden" name="accion" value="convertir"/>
                        <div class="col-md-8 col-sm-6 col-xs-12" id="cliente">
                            <input type="text" id="cadena" name="cadena" required class="form-control col-md-7 col-xs-12"  >
                        </div><br>
                        <button id="actualizar" type="submit" onclick="" class="btn btn-primary">Convertir</button>
                    </div> 
                    <?php
                    if (isset($_GET['accion']) && $_GET['accion'] == "convertir") {
                        echo "<br>";
                        include_once './ChangeString.php';
                        $cadena = $_GET['cadena'];
                        $change->Build($cadena);
                    }
                    ?>
                </fieldset>
            </form>
            <br>
            <form name="ejercicio2" class="form-horizontal form-label-left" method="get" action="" id="actualiza">
                <fieldset>
                    <h2>Ejercicio # 2 - Completando las Series</h2>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ingrese La Serie  <span class="required">*</span>
                        </label>
                        <input type="hidden" name="accion" value="completar"/>
                        <div class="col-md-8 col-sm-6 col-xs-12" id="cliente">
                            <input type="text" id="cadena" name="cadena" required class="form-control col-md-7 col-xs-12"  >
                        </div><br>
                        <button id="actualizar" type="submit" onclick="" class="btn btn-primary">Completar</button>
                    </div>    
                    <?php
                    if (isset($_GET['accion']) && $_GET['accion'] == "completar") {
                        echo "<br>";
                        include_once './CompleteRange.php';
                        $cadena = $_GET['cadena'];
                        $complete->Build($cadena);
                    }
                    ?>  
                </fieldset>
            </form>
            <br>
            <form name="ejercicio3" class="form-horizontal form-label-left" method="get" action="" id="actualiza">
                <fieldset>
                    <h2>Ejercicio # 3 - Limpiar Parentesis impares</h2>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ingrese cadena de parentesis  <span class="required">*</span>
                        </label>
                        <input type="hidden" name="accion" value="limpiar"/>
                        <div class="col-md-8 col-sm-6 col-xs-12" id="cliente">
                            <input type="text" id="cadena" name="cadena" required class="form-control col-md-7 col-xs-12"  >
                        </div><br>
                        <button id="actualizar" type="submit" onclick="" class="btn btn-primary">Limpiar</button>
                    </div>    
                    <?php
                    if (isset($_GET['accion']) && $_GET['accion'] == "limpiar") {
                        echo "<br>";
                        include_once './ClearPar.php';
                        $cadena = $_GET['cadena'];
                        $limpiar->Build($cadena);
                    }
                    ?>  
                </fieldset>
            </form>
        </div>
    </body>
</html>