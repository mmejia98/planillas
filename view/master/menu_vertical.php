<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">
        <div class="container-fluid d-flex justify-content-center align-items-center" style="background-color: #f8f9fa; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <a class="nav-link mr-3" style="color: black; text-decoration: none;" href="../home/index.php">
                <img src="../assets/pizzalogo.png" class="img-fluid" alt="Alessandro's pizzas" style="height: 70px;">
            </a>
            <span style="font-size: 24px; font-weight: bold;">Alessandro's pizzas</span>
        </div>
    </div>
    <div class="list-group list-group-flush" id="sidebar-wrapper">
        <?php
        if (isset($_SESSION['id_rol'])) {
            if ($_SESSION['id_rol'] == '1' || $_SESSION['id_rol'] == '3' || $_SESSION['id_rol'] == '4') {
                echo '<a class="list-group-item list-group-item-action list-group-item-light p-3" href="../empleados/index.php"><i class="fas fa-user-tie"></i> Empleados</a>';
            }
            /*
            if ($_SESSION['id_rol'] == '1' || $_SESSION['id_rol'] == '3' || $_SESSION['id_rol'] == '4') {
                echo '<a class="list-group-item list-group-item-action list-group-item-light p-3" href="../departamentos/index.php"><i class="fas fa-people-group"></i> Departamentos</a>';
            }
            if ($_SESSION['id_rol'] == '1' || $_SESSION['id_rol'] == '2' || $_SESSION['id_rol'] == '3') {
                echo '<a class="list-group-item list-group-item-action list-group-item-light p-3" href="../planilla/index.php"><i class="fas fa-table"></i> Planillas</a>';
            }
            if ($_SESSION['id_rol'] == '1' || $_SESSION['id_rol'] == '2') {
                echo '<a class="list-group-item list-group-item-action list-group-item-light p-3" href="../costeo/index.php"><i class="fas fa-dollar-sign"></i> Costeo de planilla</a>';
            }
            */
            if ($_SESSION['id_rol'] == '1' || $_SESSION['id_rol'] == '4') {
                echo '<a class="list-group-item list-group-item-action list-group-item-light p-3" href="../usuarios/index.php"><i class="fas fa-user"></i> Usuarios</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../roles/index.php"><i class="fas fa-lock-open"></i> Roles</a>';
            }
        }
        ?>
    </div>
</div>

