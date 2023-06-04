<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-6 col-lg-2">
                        <a class="navbar-brand" href="/home">
                            {{ config('app.name') }}
                        </a>
                    </div>
                    <div class="col ms-5 me-5">
                        <div class="input-group rounded">
                            <input class="form-control rounded" type="search" aria-label="Search"
                                aria-describedby="search-addon" placeholder="Search" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            type="button" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav mb-lg-0">
                                <li class="nav-item me-4">
                                    <a class="nav-link cart" href="/cart"><i
                                            class="fa-solid fa-cart-shopping fa-xl"></i></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                        role="button" aria-expanded="false">
                                        <i class="fa-solid fa-user fa-xl" id="profile-btn"></i>
                                        <label class="ms-2 user-name" for="profile-btn">kyridev</label>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <div class="container d-flex justify-content-center mb-3">
                                            <div class="card profile-area shadow-none">
                                                <div class="top-container">
                                                    <img class="img-fluid profile-image"
                                                        src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                        width="50">
                                                    <div class="ms-3">
                                                        <h5 class="name">Abimanyu</h5>
                                                        <p class="mail">kyridev@ieee.org</p>
                                                    </div>
                                                </div>

                                                <div class="middle-container d-flex align-items-center mt-3 p-2">
                                                    <div class="dollar-div px-3">
                                                        <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
                                                    </div>
                                                    <div class="d-flex flex-column text-start ms-2 me-2">
                                                        <span class="current-balance">Current Balance</span>
                                                        <span class="amount"><span
                                                                class="dollar-sign">$</span>188563</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a class="dropdown-item" href="/edit-profile">Edit Profile</a></li>
                                        <li><a class="dropdown-item" href="/" onclick="logout()">Logout</a></li>
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
