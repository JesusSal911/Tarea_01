<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c6a92522a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="flex">
        <div class="login__container">
            <div class="imagen">
                <img class="imagen-login" src="img/img2.webp" alt="">
            </div>
            <div class="texto_unicial my-2">
                <h1>Crear Usuario</h1>
            </div>
            <div>
                <form action="generar.php" method="POST"> <!-- Cambiado a POST -->
                    <div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de usuario" required>
                            <label for="usuario">Nombre de usuario</label>
                        </div>
                        <div class="form-floating">
                          <input type="password" class="form-control my-3" name="clave" placeholder="Contraseña" required>
                          <label for="clave">Contraseña</label>
                        </div>
                    </div>
                    <div class="inicio">
                        <button type="submit" class="btn btn-primary">CREAR USUARIO</button>
                    </div>
                    <div class="inicio">
                        <button type="button" class="btn btn-success my-2">Restaurar</button>
                        <button onclick="window.location.href='registro.php'" type="button" class="btn btn-secondary">Volver a Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <img class="imagen1" src="img/img3.jpg" alt="">
        </div>
    </div>
</body>
</html>
