<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 1 - 181591</title>
        <meta charset="UTF-8">
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
        <h1>Actividad 1 - 181591</h1>
        <form method="post" action="Datos.php">
            <fieldset>
                <legend>Informacion del usuario</legend>
                <label for="Nombre">Nombre:</label><br/>
                <input type="text" name="Nombre" id="Nombre" placeholder="Nombre"><br/><br/>

                <label for="Ap">Apellido paterno:</label><br/>
                <input type="text" name="Ap" id="Ap" placeholder="Apellido paterno"><br/><br/>

                <label for="Am">Apellido materno:</label><br/>
                <input type="text" name="Am" id="Am" placeholder="Apellido materno"><br/><br/>


                <label for="Usuario">Nombre de usuario</label><br/>
                <input type="text" name="Usuario" id="Usuario" placeholder ="Nombre de usuario"><br/><br/>


                <label for="Contra">Contraseña</label><br/>
                <input type="text" name="Contra" id="Contra" placeholder ="Contraseña"><br/><br/>
                
                <label for="Fecha">Fecha</label><br/>
                <input type="date" name="Fecha" id="Fecha"><br/><br/>
            </fieldset>

            <fieldset>
                <legend>Datos de facturacion</legend>

                <label for="Pais">Pais:</label><br/>
                <select name="Pais" id="Pais">
                    <option value="USA">USA</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Canada">Canada</option>
                    <option value="España">España</option>
                    <option value="China">China</option>
                </select><br/><br/>

                <label for="Ciudad">Ciudad: </label><br/>
                <select name ="Ciudad" id="Ciudad">
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Durango">Durango</option>
                </select><br/><br/>

                <label for="NumC">Numero de casa:</label><br/>
                <input type="text" name="NumC" id="NumC" placeholder="Numero de calle"><br/><br/>

                <label for="Colonia">Colonia:</label><br/>
                <input type="text" name="Colonia" id="Colonia" placeholder="Colonia"><br/><br/>

                <label for="e-mail">e-mail:</label><br/>
                <input type="text" name="e-mail" id="e-mail" placeholder="e-mail"><br/><br/>

                <label for="RFC">R.F.C:</label><br/>
                <input type="text" name="RFC" id="RFC" placeholder="R.F.C"><br/><br/>

                <label for="CP">C.P:</label><br/>
                <input type="text" name="CP" id="CP" placeholder="CP"><br/><br/>

                <input type= "submit" name="envio" id="Envio" value="Enviar formulario"><br/>
            </fieldset>
        </form>
    </body>
</html>