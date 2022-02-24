<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/admin">
            Sportcenter
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/beheer">apparaten beheren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/openingstijden-aanpassen">openingstijden aanpassen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/requests">Aanvragen behandelen</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item d-flex">
                    <a class="nav-link d-flex" href="/admin/adminProfile">
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
