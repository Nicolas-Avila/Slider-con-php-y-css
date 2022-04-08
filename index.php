<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Slider</title>
</head>

<body>
    <!-- INGRESO DE IMAGENES -->
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label class="formlabel" for="foto1">Clikea para ingresar la primera foto del Slider</label>
        <input class="ingresa" accept="image/*" type="file" id="foto1" name="foto1" required>
        <label class="formlabel" for="foto2">Clikea para ingresar la segunda foto del Slider</label>
        <input class="ingresa" accept="image/*" type="file" id="foto2" name="foto2" required>
        <label class="formlabel" for="foto3">Clikea para ingresar tercera foto del Slider</label>
        <input class="ingresa" accept="image/*" type="file" id="foto3" name="foto3" required>

        <input type="submit" value="Crear" name="boto" id="boto">
    </form>

    <h1 class="tituloslider">Tu Slider</h1>
    <div class="slider-todo">
        <div class="container-all">
            <input type="radio" id="1" name="image-slide" hidden />
            <input type="radio" id="2" name="image-slide" hidden />
            <input type="radio" id="3" name="image-slide" hidden />
            <div class="slide">
                
                <?php

                if (isset($_POST['boto'])) {

                    if (is_uploaded_file($_FILES['foto1']['tmp_name'])) {
                        $archivo = $_FILES['foto1']['name'];
                        move_uploaded_file($_FILES['foto1']['tmp_name'], $archivo);
                    }
                    echo  '<div class="item-slide"><img class="img1" src="' . $archivo . '"></div>';
                }
                if (isset($_POST['boto'])) {
                    if (is_uploaded_file($_FILES['foto2']['tmp_name'])) {
                        $archivo1 = $_FILES['foto2']['name'];
                        move_uploaded_file($_FILES['foto2']['tmp_name'], $archivo1);
                    }
                    echo  ' <div class="item-slide"><img class="img1" src="' . $archivo1 . '"></div>';
                }
                if (isset($_POST['boto'])) {
                    if (is_uploaded_file($_FILES['foto3']['tmp_name'])) {
                        $archivo2 = $_FILES['foto3']['name'];
                        move_uploaded_file($_FILES['foto3']['tmp_name'], $archivo2);
                    }
                    echo  '<div class="item-slide"><img class="img1" src="' . $archivo2 . '" ></div>';
                }

                ?>
            </div>

            <div class="pagination">
                <?php

                echo   '<label class="pagination-item" for="1"><img src="' . $archivo . '"></label>';

                echo  ' <label class="pagination-item" for="2"><img src="' . $archivo1 . '"></label>';

                echo   ' <label class="pagination-item" for="3"><img src="' . $archivo2 . '"></label>';

                ?>

            </div>

        </div>
    </div>

</body>

</html>