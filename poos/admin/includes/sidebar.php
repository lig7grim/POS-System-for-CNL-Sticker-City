<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="./index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home Page
                    </a>
                    <a class="nav-link" href="../pos/index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                        Create Order
                    </a>
                    <a class="nav-link" href="orders.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                        Orders
                    </a>
                    <div class="sb-sidenav-menu-heading">----------------</div>

                    <a class="nav-link collapsed" href="#" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseCategory"
                        aria-controls="collapseCategory"
                        aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="categories-create.php">Create Category</a>
                            <a class="nav-link" href="categories.php">View Categories</a>

                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapseProducts"
                        aria-controls="collapseProducts"
                        aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Products
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="products-create.php">Create Product</a>
                            <a class="nav-link" href="products.php">View Products</a>

                        </nav>
                    </div>

                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">----------------</div>
                    
                    <a class="nav-link collapsed" href="#" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseAdmins" 
                            aria-expanded="false" aria-controls="collapseAdmins">

                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseAdmins" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="admins-create.php">Add Admin</a>
                            <a class="nav-link" href="admins.php">View Admins</a>
                        </nav>
                    </div>

                    
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as: <?= $_SESSION['loggedInUser']['name']; ?></div>
            </div>
        </nav>
    </div>
</div>