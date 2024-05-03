<?php

    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
        $_SESSION["Titulo"] = "";
    }
    require_once("../master/head_mtto.php")
    
?>
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-color: white; padding: 15px; ">
    <div style="text-align: center;">
        <h3 style="color: #333; font-weight: bold; margin-bottom: 20px; animation: slide-in 1s ease forwards;">Gestión de Nóminas en Alessandro's Pizzas</h3>
        <img id="imagenCambiante" src="../assets/pizzalogo.png" alt="Nomina" style="height: 450px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-bottom: 20px; animation: fade-in 1s ease forwards;">
        y<div id="reloj" style="font-size: 20px; color: #333; margin-top: 20px; animation: fade-in 1s ease forwards;"></div>
    </div>
</div>

<br>

<?php
    require_once("../master/footer.php")
?>

<script>
    var imagenes = ["../assets/pizzalogo.png", "../assets/primeraA.jpg", "../assets/segundaA.jpg"];
    var indiceImagen = 0;

    function cambiarImagen() {
        document.getElementById("imagenCambiante").src = imagenes[indiceImagen];
        indiceImagen = (indiceImagen + 1) % imagenes.length;
    }

    setInterval(cambiarImagen, 2000);

    function actualizarReloj() {
        var ahora = new Date();
        var horas = ahora.getHours();
        var minutos = ahora.getMinutes();
        var segundos = ahora.getSeconds();
        horas = formatoHora(horas);
        minutos = formatoHora(minutos);
        segundos = formatoHora(segundos);
        document.getElementById('reloj').innerHTML = horas + ":" + minutos + ":" + segundos;
        var t = setTimeout(actualizarReloj, 1000);
    }

    function formatoHora(tiempo) {
        if (tiempo < 10) {
            tiempo = "0" + tiempo
        };
        return tiempo;
    }

    actualizarReloj();
</script>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slide-in {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>