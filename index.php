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
    <link rel="stylesheet" href="assets/css/estilospersonalizados.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome/css/font-awesome.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="contenedorPartesPrincipales row m-0 p-0">
            <!-- Barra izquierda -->
            <div class="barraVerticalIzquierda col-12 col-lg-2 p-4">
    
                <div class="contenedorCategorias d-flex">
                    <img class="icono-bineta mr10" src="assets/img/bineta.png">
                    <div class="categorias">
                        <div class="mb-3"><h5>Categorias:</h5></div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    value="TC" 
                                    id="categoriaTodas">
                                    <label 
                                    class="form-check-label ml5" 
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
                                    class="form-check-label ml5" 
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
                                    class="form-check-label ml5" 
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
                                    class="form-check-label ml5" 
                                    for="categoriaFotos">Fotos</label>
                                </div>     
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="PSD" 
                                    id="categoriaPSD">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="categoriaPSD">PSD</label>
                                </div>         
                            </li>
                        </ul>
                    </div>
                </div>
    
                <hr class="separador-linea-blanca">
    
                <div class="contenedorTiposImagenes d-flex">
                    <img class="icono-bineta mr10" src="assets/img/bineta.png">
                    <div class="tiposimagenes">
                        <div class="mb-3"><h5>Mostrar por tipos de imágenes:</h5></div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    value="TTI" 
                                    id="todosTiposIMG">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="todosTiposIMG">Todos</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="jpg" 
                                    id="tipoJPG">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="tipoJPG">jpeg/jpg</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="png" 
                                    id="tipoPNG">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="tipoPNG">png</label>
                                </div>    
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="gif" 
                                    id="tipoGIF">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="tipoGIF">gif</label>
                                </div>     
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="svg" 
                                    id="tipoSVG">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="tipoSVG">svg</label>
                                </div>         
                            </li>
                        </ul>
                    </div>
                </div>
    
                <hr class="separador-linea-blanca">
    
                <div class="contenedoTipoLicencia d-flex">
                    <img class="icono-bineta mr10" src="assets/img/bineta.png">
                    <div class="tipoLicencia">
                        <div class="mb-3"><h5>Tipo de licencia:</h5></div>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    value="TL" 
                                    id="todasLicencias">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="todasLicencias">Todas</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="F" 
                                    id="licenciaFree">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="licenciaFree">Free</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="P" 
                                    id="licenciaPremium">
                                    <label 
                                    class="form-check-label ml5" 
                                    for="licenciaPremium">Premium</label>
                                </div>    
                            </li>
                        </ul>
                    </div>
                </div>
    
                <hr class="separador-linea-blanca">
    
                <div class="contenedoFechaPublicacion d-flex">
                    <img class="icono-bineta mr10" src="assets/img/bineta.png">
                    <div class="fechaPublicacion">
                        <div class="mb-3"><h5>Buscar por fecha de publicación:</h5></div>
                        <div class="form-group">
                            <label for="fechaPublicacion">Rango de publicación:</label>
                            <select 
                            name="fechaPublicacion" 
                            id="fechaPublicacion"
                            class="form-control">
                                <option value="hoy">Hoy</option>
                                <option value="15dias">Últimos 15 días</option>
                                <option value="mesAnterior">Mes anterior</option>
                                <option value="anioAnterior">Año anterior</option>
                            </select>
                        </div>
                    </div>
                </div>
    
            </div>
            
            <!-- contenedor de imágenes -->
            <div class="contenedorImagenes col-12 col-lg-10">

                <figure class="col-sm-12">
                    <div class="contenedorImagenInformacion">
                        <img src="assets/img/galeriaimagenes/CANGURO (2).png">
                    </div>
                    <div class="contenedorInformacionImagen">
                        <div class="contenedorBotones">
                            <button
                            type="button"
                            class="btn btn-success descargarImagen"
                            ><i class="fa fa-download"></i></button>
                            <button
                            type="button"
                            class="btn btn-success compartirImagen"
                            ><i class="fa fa-share-alt"></i></button>
                        </div>
                        <figcaption>
                            <div class="informacionAutor">
                                <div>Autor:</div>
                                <div>Ramón Martínez Cruz</div>
                                <hr class="lineasepradora colorNaranja m-0">
                                <div class="contenedorLikes d-flex">
                                    <div class="mr3">Likes:</div>
                                    <div>400K</div>
                                </div>
                                <div>
                                    <button 
                                    type="button"
                                    class="btn btnLike d-flex justify-content-center"><i class="fa fa-thumbs-o-up"></i></button>
                                </div>
                            </div>
                            <div class="especificacionImagen">
                                <span>Canguro en el mar saltando...</span>
                            </div>
                        </figcaption>
                    </div>
                </figure>

                <figure>
                    <img src="assets/img/galeriaimagenes/da695247c60f030308429b3c515b307a.png">
                </figure>

                <figure>
                    <img src="assets/img/galeriaimagenes/NEVADA.png">
                </figure>

                <figure>
                    <img src="assets/img/galeriaimagenes/WINER 1 RL.png">
                </figure>

                <figure>
                    <img src="assets/img/galeriaimagenes/WINER 1 RL.png">
                </figure>

                <figure>
                    <img src="assets/img/galeriaimagenes/WINER 1 RL.png">
                </figure>

            </div>

        </div>
    </div>
    <script src="assets/js/library/jquery/jquery.js"></script>
    <script src="assets/css/library/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>