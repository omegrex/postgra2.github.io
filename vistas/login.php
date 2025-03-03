<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once './inc/head.php'; ?>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./Css/footer.css">
</head>
<body>
    <?php include_once './inc/navbar.php'; ?>

    <main>
        <section class="descripcion">
            <div class="menu-container-left">
                <ul class="menu-list">
                    <li><a href="./vistas/postgrado.php">Post Grado</a></li>
                    <li><a href="#fondoeditorial">Fondo Editorial</a></li>
                    <li><a href="#revistascientificas">Revistas Científicas</a></li>
                    <li><a href="#estructuraorganizacional">Estructura Organizacional</a></li>
                </ul>
            </div>

            <div class="content">
                <div class="inicio-seccion">
                    <h1><?php echo htmlspecialchars("Bienvenido, " . ($_SESSION['usuario'] ?? 'Invitado'), ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p>Explora nuestras áreas de investigación y proyectos destacados.</p>
                </div>
                <div class="image-section">
                    <img src="./img/convocatoria.jpg" style="width: 350px; height: auto;">
                </div>
                <div class="convocatoria">
                    <h2>CONVOCATORIA 2025</h2>
                    <h3>POSTGRADO UNESUR</h3>
                    <h4>DOCTORADOS</h4>
                    <p><strong>Doctorado en Ciencias Gerenciales</strong></p>
                    <p>Mención en:</p>
                    <ul>
                        <li>Agropecuaria</li>
                        <li>Desarrollo Local y Fronterizo</li>
                        <li>Finanzas Internacionales</li>
                    </ul>
                </div>
            </div>

            <div class="login-telegram-container">
                <div class="login-section">
                    <h2>Iniciar Sesión</h2>
                    <form class="login-form" method="POST" action="procesar_login.php">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn-login">Ingresar</button>
                        <p class="forgot-password"><a href="#">¿Olvidaste tu contraseña?</a></p>
                    </form>
                </div>
                <div class="telegram-link">
                    <a href="https://t.me/unesurweb" target="_blank">
                        <i class="fab fa-telegram"></i> Contáctenos por Telegram
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <!-- Logo del Footer -->
            <div class="footer-logo">
                <img src="/postgra2/img/logo-unesur.png" alt="Logo de UNESUR" style="width: 150px; height: auto;">
            </div>

            <!-- Enlaces del Footer -->
            <div class="footer-links">
                <div class="footer-column">
                    <h3>Estudiantes</h3>
                    <ul>
                        <li><a href="#">Campus Virtual</a></li>
                        <li><a href="#">Correo Estudiantil</a></li>
                        <li><a href="#">Pasantías</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Enlaces</h3>
                    <ul>
                        <li><a href="#">Correo Institucional</a></li>
                        <li><a href="#">Galería de Fotos</a></li>
                        <li><a href="#">Intranet</a></li>
                        <li><a href="#">Blog Ing. Alimentos</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Relaciones Interinstitucionales</h3>
                    <ul>
                        <li><a href="#">Consejo UNESUR</a></li>
                        <li><a href="#">Consejo Universitario</a></li>
                        <li><a href="#">Consejo Académico</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>De Interés</h3>
                    <ul>
                        <li><a href="#">Libros</a></li>
                        <li><a href="#">Taller Profesores</a></li>
                        <li><a href="#">Núcleos Mapa</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Otros</h3>
                    <ul>
                        <li><a href="#">Opsu</a></li>
                        <li><a href="#">Fonacit</a></li>
                        <li><a href="#">Fundayacucho</a></li>
                        <li><a href="#">Misión Sucre</a></li>
                        <li><a href="#">Transmisión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Derechos de Autor -->
        <p>&copy; Copyright Universidad Nacional Experimental Sur del Lago "Jesús María Semprum" 2025.</p>
        <p> Dirección de Tecnología de Información y Telecomunicaciones - Santa Bárbara de Zulia, Venezuela. Contáctenos +58(275)555.1036 - 555.2832. Ext. 167,169 G-20005799-8</p>
    </footer>
</body>
</html>