<header>
    <nav class="header-nav navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-between gap-5">
                    <div class="col">
                        <a class="logo navbar-brand" href="/home">
                            <img src="pos/assets/img/brand.svg" alt="">
                            <span>{{ config('app.name') }}</span>
                        </a>
                    </div>
                    <div class="col col-lg-6">
                        <div class="input-group rounded">
                            <input class="form-control rounded" type="search" aria-label="Search"
                                aria-describedby="search-addon" placeholder="Search" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col">
                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            type="button" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item me-2 nav-icon">
                                    <a class="nav-link" href="/dashboard"><i class="fa-solid fa-store fa-lg"
                                            style="color: #43aaff;"></i></a>
                                </li>
                                <li class="nav-item me-2 nav-icon me-auto">
                                    <a class="nav-link cart" href="/cart"><i
                                            class="fa-solid fa-cart-shopping fa-lg"></i></a>
                                </li>

                                <div class="vr border-2"></div>
                                <li class="nav-item dropdown mx-auto">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0"
                                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                        <img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile">
                                        <span class="d-none d-md-block ps-2 user-name fw-bold" for="profile-btn"
                                            style="font-size: 16px">{{ auth()->user()->username }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <div class="container d-flex justify-content-center">
                                            <div class="card profile-area shadow-none">
                                                <div class="top-container mt-3">
                                                    <img class="img-fluid profile-image"
                                                        src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                        width="50">
                                                    <div class="row ms-2 mb-2">
                                                        <h5 class="col name">
                                                            @if (auth()->user()->nickname === null)
                                                                {{ auth()->user()->username }}
                                                            @else
                                                                {{ auth()->user()->nickname }}
                                                            @endif
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="middle-container d-flex align-items-center mt-3 p-2">
                                                    <div class="dollar-div px-3">
                                                        <div class="rounded-circle bg-light px-3 py-2"><i
                                                                class="fa-solid fa-rupiah-sign"
                                                                style="color: #43aaff;"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column text-start ms-2">
                                                        <span class="current-balance">Current Balance</span>
                                                        <span class="amount"><span
                                                                class="dollar-sign">Rp</span>188511563</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li>
                                            <form action="/edit-profile" method="GET">
                                                @csrf
                                                <button class="dropdown-item" type="submit"><i
                                                        class="fa-solid fa-pen-to-square fa-lg me-3"
                                                        style="color: #43aaff;"></i>Edit
                                                    Profile</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button class="dropdown-item" type="submit" onclick="logout()"><i
                                                        class="fa-solid fa-right-from-bracket fa-lg me-3 mb-3"
                                                        style="color: #43aaff;"></i>Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
