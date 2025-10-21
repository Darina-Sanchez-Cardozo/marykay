<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mary Kay Digital 💄</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
        }
        .navbar-brand {
            font-weight: bold;
            color: #c71585 !important;
        }
        .nav-link {
            color: #555 !important;
        }
        .nav-link:hover {
            color: #c71585 !important;
        }
        .category img {
            border-radius: 10px;
            transition: transform .2s;
        }
        .category img:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #111;
            color: #fff;
            padding: 40px 0;
        }
        footer a {
            color: #f7c6d0;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .btn-marykay {
            background-color: #c71585;
            color: white;
            border-radius: 20px;
        }
        .btn-marykay:hover {
            background-color: #a0136b;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Mary Kay Digital</a>

            <form class="d-flex mx-auto w-50">
                <input class="form-control rounded-pill" type="search" placeholder="Buscar productos..." aria-label="Buscar">
            </form>

            <div class="d-flex">
                <a href="#" class="btn btn-outline-dark me-2">Crear cuenta</a>
                <a href="#" class="btn btn-dark me-2">Ingresar</a>
                <a href="#" class="btn btn-outline-secondary">🛒 Mi carrito</a>
            </div>
        </div>
    </nav>

    <!-- CATEGORÍAS -->
    <section class="container text-center py-5">
        <h2 class="fw-bold mb-4">Explora por categorías</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-2 category mb-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                <p>Cuidado de la piel</p>
            </div>
            <div class="col-6 col-md-2 category mb-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                <p>Maquillaje</p>
            </div>
            <div class="col-6 col-md-2 category mb-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                <p>Fragancias</p>
            </div>
            <div class="col-6 col-md-2 category mb-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                <p>Hombres</p>
            </div>
            <div class="col-6 col-md-2 category mb-4">
                <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                <p>Lo más vendido</p>
            </div>
        </div>
    </section>

    <!-- DESCUENTOS -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h3 class="fw-bold mb-4">Descuentos Especiales 💅</h3>
            <div class="row justify-content-center">
                <div class="col-6 col-md-2 mb-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                    <p>Classic Look</p>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                    <p>Coffee Glaze</p>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                    <p>Autumn Edit</p>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt="">
                    <p>Pumpkin Spice</p>
                </div>
            </div>
            <a href="#" class="btn btn-marykay mt-3">Descubre más</a>
        </div>
    </section>

    <!-- SECCIÓN FINAL -->
    <section class="container py-5 text-center">
        <h3 class="fw-bold mb-3">Crea cosas únicas y luce increíble</h3>
        <p>Precios sugeridos al menudeo | Mary Kay Magnetic Passion Edge Eau de Parfum 75 ml</p>
        <div class="row justify-content-center mt-4">
            <div class="col-6 col-md-2"><img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt=""><p>Lápiz en Gel Mary Kay</p></div>
            <div class="col-6 col-md-2"><img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt=""><p>Gel Voluminizador</p></div>
            <div class="col-6 col-md-2"><img src="https://via.placeholder.com/150" class="img-fluid mb-2" alt=""><p>Lápiz Delineador</p></div>
        </div>
        <a href="#" class="btn btn-marykay mt-3">Descubre más</a>
    </section>

    <!-- FOOTER -->
    <footer class="text-center">
        <div class="container">
            <p>51217 | Texas CA 94103, USA | © Mary Kay Digital 2025</p>
            <p>
                <a href="#">Facebook</a> | 
                <a href="#">Instagram</a> | 
                <a href="#">MaryKayContigo</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
