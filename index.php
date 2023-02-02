<!DOCTYPE html>
<html>
    <head>
        <title>Formulario  </title>
        <meta charset = "UTF-8">
        <script type = "text/javascript" src = "js/cargarDatos.js"></script>		
        <script type = "text/javascript" src = "js/sesion.js"></script>				
    </head>	
    <body>		
        <section id = "login">
            <form onsubmit="return login()" method = "POST">
                Usuario	<input id = "usuario" type = "text">			
                Clave	<input id = "clave" type = "password">					
                <input type = "submit">
            </form>
        </section>
        <section id = "principal" style="display:none">
            <header>
                <?php require 'cabecera_json.php' ?>
            </header>
            <h2 id = "titulo"></h2>

            <section id = "contenido">			
            </section>	

            <section id = "anadirCategorias" style="display:none">
                <form onsubmit="return anadirCategoria(this)" method="POST">  
                    <label for="etiqueta">Nombre Categoría:</label>
                    <input type="text" value="" name="nombreCategoria"/>
                    <br><br>
                    <label for="etiqueta">Descripción Categoría:</label>
                    <textarea name="descripcionCategoria" rows="2" cols="50"></textarea>
                    <br><br>Categoria">
                </form>
                    <input type="submit" value="Añadir 
            </section>

            <section id = "editarCategorias" style="display:none">
                <form onsubmit="return editarCategoria(this)" method="POST">  
                    <label for="etiqueta">Nombre Categoría:</label>
                    <input type="text" value="" id="editNombreCategoria"/>
                    <br><br>
                    <input type="hidden" id="codCat"/>
                    <label for="etiqueta">Descripción Categoría:</label>
                    <textarea id="editDescripcionCategoria" rows="2" cols="50"></textarea>
                    <br><br>
                    <input type="submit" value="Editar Categoria">
                </form>
            </section>

            <section id = "anadirProductos" style="display:none">
                <form onsubmit="return anadirProducto(this)" method="POST">  
                    <label for="etiqueta">Nombre Producto:</label>
                    <input type="text" value="" name="nombreProducto"/>
                    <br><br>
                    <label for="etiqueta">Descripción Producto:</label>
                    <textarea name="descripcionProducto" rows="2" cols="50"></textarea>
                    <br><br>
                    <label for="etiqueta">Stock:</label>
                    <input type="number" value="" name="stockProducto"/>
                    <br><br>
                    <label for="etiqueta">Categoría de Producto:</label>
                    <select name="categoriasProductos" id="categoriasProductos"></select>
                    <br><br>
                    <input type="submit" value="Añadir Producto">
                </form>
            </section>
        </section>
    </body>
</html>