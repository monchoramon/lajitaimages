<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagita (galeria de imágenes)</title>
    <link rel="stylesheet" href="assets/css/library/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/barralateralizquierda.css">
</head>
<body>
    <div class="container-fluid p-0">
        <!-- Barra izquierda -->
        <div class="barraVerticalIzquierda col-12 col-lg-2 p-4">

            <div class="contenedorCategorias d-flex">
                <img src="assets/img/bineta.png">
                <div class="categorias">
                    <div class="mb-3"><h4>Categorias:</h4></div>
                    <ul>
                        <li>
                            <div class="form-check">
                                <input 
                                class="form-check-input" 
                                type="radio" 
                                value="T" 
                                id="categoriaTodas">
                                <label 
                                class="form-check-label" 
                                for="categoriaTodas">Todos</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                value="I" 
                                id="categoriaIconos">
                                <label 
                                class="form-check-label" 
                                for="categoriaIconos">Iconos</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                value="V" 
                                id="categoriaVectores">
                                <label 
                                class="form-check-label" 
                                for="categoriaVectores">Vectores</label>
                            </div>    
                        </li>
                        <li>
                            <div class="form-check">
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                value="F" 
                                id="categoriaFotos">
                                <label 
                                class="form-check-label" 
                                for="categoriaFotos">Fotos</label>
                            </div>     
                        </li>
                        <li>
                            <div class="form-check">
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                value="P" 
                                id="categoriaPSD">
                                <label 
                                class="form-check-label" 
                                for="categoriaPSD">PSD</label>
                            </div>         
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="separador-blanco">
        </div>
    </div>
    <script src="assets/js/library/jquery/jquery.js"></script>
    <script src="assets/css/library/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>