<?php?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/poo/css/login.css">
    <script src="/poo/js/login.js"></script>
    <title>Inicio de sesión</title>
      
        </head>    
        <body>  
            
            <center> <h1> Administración - Agroquímicos Briones</h1> </center> 
            <center><form> 
                <br> 
                <center><img src="/poo/image/perfil (2).png" alt="perfil" ></center>
                <br> 
                <div class="container">   
                    <label>Usuario  </label>   
                    <input type="text" class="user" placeholder="Ingrese el usuario" id="username" name="username" required/> 
                    <label>Contraseña  </label>   
                    <input type="password" class="pass" placeholder="Ingrese la contraseña" id="password" name="password" required/> 
                    <center><input type="button" class="boton" value="Iniciar sesión" id="submit" onclick="validate()"/></center>
                       
                </div>   
            </form>
            
        </body>  
        
    </center> 
</html>
