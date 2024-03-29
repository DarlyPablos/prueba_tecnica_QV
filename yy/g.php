<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Técnica QV</title>
    <link rel="stylesheet" href="../Css/image.css">
    <link rel="stylesheet" href="../Css/aliados.css">
    <link rel="stylesheet" href="../Css/registro.css">
</head>

<body>
    <?php include('../Template/Header.php') ?>
    <div class="content-container">
        <section>
            <div class="content">
                <div class="text">
                    <div class="card">
                        <img src="../Img/cole.png">
                        <h3 class="caracteristicas-title">Generacion de comunidad</h3>
                        <p>Nos compraste darte la bienvenida a esta innovador espacio educativo donde la excelencia académica se encuentra con la comodidad y flexibilidad. Aquí tu aprendizaje es nuestra prioridad, y nuestro campus virtual está diseñado para ofrecerte una experiencia educativa enriquecedora desde la comodidad de tu hogar.</p>
                    </div>
                </div>

                <div class="cards">
                    <div class="card">
                        <img src="../Img/comunit.png">
                        <h3 class="caracteristicas-title">Generacion de comunidad</h3>
                        <p>Nos complace generar vínculos sociales entre personas que comparten un mismo interés incentivar la construcción en un sentido de pertenencia y colaboración dentro de la comunidad.</p>
                    </div>

                    <div class="card">
                        <img src="../Img/grupo.png">
                        <h3 class="caracteristicas-title">Transferencia de conocimiento</h3>
                        <p>Nos apasiona compartir información habilidades y experiencias con el objetivo de aplicar y aprovechar esta información para el desarrollo de las habilidades.</p>
                    </div>

                    <div class="card">
                        <img src="../Img/vi.png">
                        <h3 class="caracteristicas-title">Certificaciones e insignias</h3>
                        <p>IzyAcademy te brinda certificaciones e insignias digitales para que compartas y evales los conocimientos adquiridos junto a nosotros.</p>
                    </div>

                    <div class="card">
                        <img src="../Img/aula.png">
                        <h3 class="caracteristicas-title">Apropiación del conocimiento</h3>
                        <p>Desde IzyAcademy nos importa que adquieras comprendas y asimiles el conocimiento habilidades e ideas que creamos para ti y para la comunidad.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="logos">
            <div class="title-container">
                <h2 class="title">Aliados</h2>
                <p class="text">
                    Nuestras entrenamientos procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros
                </p>
            </div>

            <div class="logos-container">
                <img src="../Img/logo1.png">
                <img src="../Img/logo2.png">
                <img src="../Img/logo3.png">
                <img src="../Img/logo4.png">
                <img src="../Img/logo5.png">
                <img src="../Img/logo6.png">
                <img src="../Img/logo7.png">
                <img src="../Img/logo8.png">
            </div>
        </section>
        <div class="container">
            <div class="image">
                <img src="../Img/regi.png" alt="Imagen formulario">
            </div>
            <div class="form">
                <h2>Regístrate</h2>
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password1">Confirmar contraseña:</label>
                        <input type="password1" id="password1">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="terminos">
                        <label for="terminos">Acepto <a href="#">términos y condiciones</a></label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="datos">
                        <label for="datos">Autorizo el tratamiento de datos personales</label>
                    </div>

                    <div class="form-group">
                        <button disabled>Registrarse</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            const terminosCheck = document.getElementById("terminos");
            const datosCheck = document.getElementById("datos");
            const button = document.querySelector("button");

            function validateChecks() {
                if (terminosCheck.checked && datosCheck.checked) {
                    button.disabled = false;
                } else {
                    button.disabled = true;
                }
            }

            terminosCheck.addEventListener("change", validateChecks);
            datosCheck.addEventListener("change", validateChecks);
        </script>
        <?php include('../Template/Footer.php') ?>
    </div>
</body>

</html>