<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Consultora | Mary Kay Digital 💄</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
            color: #333;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        .navbar-brand {
            color: #c71585 !important;
            font-weight: bold;
        }
        .btn-rosado {
            background-color: #c71585;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-rosado:hover {
            background-color: #a0136b;
        }
        .categoria img {
            height: 120px;
            transition: transform 0.3s;
        }
        .categoria img:hover {
            transform: scale(1.1);
        }
        .titulo {
            font-weight: bold;
            color: #c71585;
            margin-top: 20px;
        }
        footer {
            background-color: #222;
            color: #ddd;
            padding: 30px 0;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .edicion {
            background-color: #faf5f7;
            padding: 30px 0;
        }
        .edicion img {
            height: 170px;
        }
    </style>
</head>

<body>

<!-- ======================= NAVBAR ======================= -->
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="#">Mary Kay Digital</a>
    <div class="ms-3 fw-semibold">CONSULTOR(A): <span class="text-uppercase">EMMANUEL GONZÁLEZ</span></div>

    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Acerca de Mary Kay</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Ayuda</a></li>
    </ul>

    <a href="#" class="btn btn-dark ms-3">🛒 Mi carrito</a>
  </div>
</nav>

<!-- ======================= BÚSQUEDA ======================= -->
<section class="container text-center my-4">
    <div class="input-group mb-3 mx-auto" style="max-width: 600px;">
        <span class="input-group-text bg-white border-end-0">🔍</span>
        <input type="text" class="form-control border-start-0" placeholder="Buscar producto...">
        <button class="btn btn-dark">Buscar</button>
    </div>
</section>

<!-- ======================= CATEGORÍAS ======================= -->
<section class="container text-center">
    <div class="row justify-content-center g-4">
        <div class="col-md-2 categoria">
            <img src="https://www.marykay.com.mx/medias/skin.jpg?context=bWFzdGVyfGltYWdlc3wzNzE3NXxpbWFnZS9qcGVnfGltYWdlcy9oY2IvaGYzLzg4NDAxMTg1NDg1NDIuanBnfGE4MTVmMDU2ZDE2ZDJlYTM3ZmVkYzMxNDNhZGU4OTZmMjY3MDUyMTA2Zjc5NGNkZDI1YWRkMTdjNGUyOWMyOGM" class="img-fluid"><p>Cuidado / Piel</p></div>
        <div class="col-md-2 categoria">
            <img src="https://www.marykay.com.mx/medias/makeup.jpg?context=bWFzdGVyfGltYWdlc3w1MjA1M3xpbWFnZS9qcGVnfGltYWdlcy9oMDgvaDYxLzg4NDAxMTg1OTY1MjYuanBnfDg3YjcyNDRmYWIxNGE4ODUyNDMwMjY1NGViNzM1ODk4OGQzNDY4ZDkxZWIxNjA3YzQzNTI3OWZhNmU2YWZkNTg" class="img-fluid"><p>Maquillaje</p></div>
        <div class="col-md-2 categoria">
            <img src="https://www.marykay.com.mx/medias/fragrance.jpg?context=bWFzdGVyfGltYWdlc3w0NTc1NHxpbWFnZS9qcGVnfGltYWdlcy9oNDMvaDRiLzg4NDAxMTg2NDU1MTAuanBnfDkyOTY4ZjFhNDcyZDE0ZWIyNTgxNTQzZDNmNDRiNTExMWY4YzA5ZmFkMTM5MzNjZTQxNTZlZjFlNzA3MDJlNjg" class="img-fluid"><p>Fragancias</p></div>
        <div class="col-md-2 categoria">
            <img src="https://www.marykay.com.mx/medias/men.jpg?context=bWFzdGVyfGltYWdlc3wzNDU3MnxpbWFnZS9qcGVnfGltYWdlcy9oOTQvaGEzLzg4NDAxMTg2OTg4OTQuanBnfDA1M2Y4NDY1MDcwMzM2ZTM4ZDM2Mjc3NTRmNDMyZTViNjc0OTZlMTExYmU5YTczNWE0NDk3ZTA1YTgzNjY2YjA" class="img-fluid"><p>Hombres</p></div>
        <div class="col-md-2 categoria">
            <img src="https://www.marykay.com.mx/medias/bestseller.jpg?context=bWFzdGVyfGltYWdlc3w0ODMwOXxpbWFnZS9qcGVnfGltYWdlcy9oMTMvaGMxLzg4NDAxMTg3NDIyOTQuanBnfGFiYmRhZmRjYWJhY2UyY2U4ZWE3YmY2M2NmMTA4MzgzMzVjZDY4MWNiY2U3YjY5Y2Q4OTM5NTI3ZTVjNTM5MDM" class="img-fluid"><p>Lo más vendidos</p></div>
    </div>
</section>

<!-- ======================= EDICIÓN LIMITADA ======================= -->
<section class="container text-center edicion mt-5">
    <h2 class="titulo">Edición Limitada</h2>
    <div class="row justify-content-center g-4 mt-3">
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/promo1.png" class="img-fluid"><p>Set para Cejas Mary Kay® de Edición Limitada</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/promo2.png" class="img-fluid"><p>Dúo de Sombras Mary Kay At Play® Edición Especial</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/promo3.png" class="img-fluid"><p>Set Fragancias de Viaje Mary Kay®</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/promo4.png" class="img-fluid"><p>Iluminador Mary Kay® Edición Limitada</p></div>
    </div>
    <a href="#" class="btn btn-rosado mt-4 px-4">Descubre Más</a>
</section>

<!-- ======================= SECCIÓN FINAL ======================= -->
<section class="container text-center my-5">
    <h4 class="fw-semibold">“Lleva contigo la moda y la comodidad en todo momento”</h4>
    <p class="text-muted">Precios al mayoreo después de los 10 productos (Los productos deben ser iguales)</p>
    <div class="row justify-content-center g-4 mt-3">
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/prod1.png" class="img-fluid"><p>CC Cream Correctora de Color FPS 15</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/prod2.png" class="img-fluid"><p>Corrector Iluminador para Ojos Mary Kay®</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/prod3.png" class="img-fluid"><p>Set de Cuidado de Manos Satin Hands®</p></div>
        <div class="col-md-3"><img src="https://www.marykay.com.mx/medias/prod4.png" class="img-fluid"><p>Mary Kay® Magnetic Passion Eau de Parfum</p></div>
    </div>
    <a href="#" class="btn btn-dark mt-4 px-4">Descubre Más</a>
</section>

<!-- ======================= FOOTER ======================= -->
<footer class="text-center mt-5">
    <div class="container">
        <p><strong>Mary Kay Digital</strong> © 2025 | Crea cosas únicas estando cómoda y luciendo increíble.</p>
        <div class="mt-2">
            <a href="#">Inicio</a> |
            <a href="#">Sobre Nosotros</a> |
            <a href="#">Ayuda</a> |
            <a href="#">Política de Privacidad</a>
        </div>
        <div class="mt-3">
            <a href="#">Facebook</a> ·
            <a href="#">Instagram</a> ·
            <a href="#">MaryKayContigo</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
