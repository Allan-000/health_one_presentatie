<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/customer/customerhome">
            Sportcenter
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/customer/categories">sportapparaat</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/customer/contact">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/customer/openingstijden">Openingstijden en adres</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex">
                    <a class="nav-link d-flex" href="/customer/customerProfile">
                    <img class="profile-img" src="/img/<?php echo $_SESSION['picture'] ?>" alt="user Pictrue">
                    <p class="text-center p-1">Mijn profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home"><p class="p-1">uitloggen</p></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

