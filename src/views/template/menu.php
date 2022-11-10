<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="home.php">
                <i class="icofont-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <?php if($_SESSION['usuario']->is_admin == 1){ ?>
            <li class="nav-item">
                <a href="morador.php">
                <i class="icofont-user-alt-7"></i>
                    <span>Moradores</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="areas.php">
                <i class="icofont-building"></i>
                    <span>Áreas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="reservas.php">
                <i class="icofont-book-mark"></i>
                    <span>Histórico de Reservas</span>
                </a>
            </li>
            <?php } ?>
            <li class="nav-item logout">
                <a href="logout.php">
                <i class="icofont-logout"></i>
                    <span>Sair</span>
                </a>
            </li>   
        </ul>
    </nav>
</aside>    