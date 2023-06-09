<!-- ======= Sidebar ======= -->
<aside class="sidebar" id="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Store</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-database-add"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul class="nav-content collapse" id="product-nav" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/products">
                        <i class="bi bi-circle"></i><span>Your Product</span>
                    </a>
                </li>
                <li>
                    <a href="/add-product">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="/edit-product">
                        <i class="bi bi-circle"></i><span>Edit Product</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/store-profile">
                <i class="bi bi-shop"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-heading">Help & Services</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/faq">
                <i class="bi bi-question-circle"></i>
                <span>FAQ</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/contact">
                <i class="bi bi-send-plus"></i>
                <span>Contact Us</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <form action="/logout-shop" method="POST">
                @csrf
                <button class="nav-link collapsed" type="submit" onclick="logout()"><i
                        class="bi bi-box-arrow-right"></i><span>Logout</span></button>
            </form>
        </li>
    </ul>

</aside><!-- End Sidebar-->
