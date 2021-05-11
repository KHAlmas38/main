<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand me-lg-5" href="../../index.php">
        <img class="navbar-brand-dark" src="assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar me-4">
                    <img src="assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                         alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, Jane</h2>
                    <a href="examples/sign-in.php" class="btn btn-secondary text-dark btn-xs"><span
                            class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                   aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="../../index.php" class="nav-link d-flex align-items-center">
                  <span class="sidebar-icon">
                    <img src="assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                  </span>
                    <span class="mt-1 ms-1 sidebar-text">Super user</span>
                </a>
            </li>
            <li class="nav-item  active ">
                <a href="index.php" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="profile-settings.php" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                    <span class="sidebar-text">Profile Settings</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="user.php" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-user"></span></span>
                    <span class="sidebar-text">User</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="task-list.php" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-clipboard-list"></span></span>
                    <span class="sidebar-text">Task List</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
                  <span class="sidebar-icon">
                    <img src="assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
                  </span>
                    <span class="sidebar-text">Themesberg</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<main class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                    <!-- Search form -->
                    <form class="navbar-search form-inline" id="navbar-search-main">
                        <div class="input-group input-group-merge search-bar">
                            <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                            <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                        </div>
                    </form>
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark me-lg-3 icon-notifications dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="icon icon-sm">
                            <span class="fas fa-bell bell-shake"></span>
                            <span class="icon-badge rounded-circle unread-notifications"></span>
                          </span>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-danger">a few moments ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/team/profile-picture-2.jpg" class="user-avatar lg-avatar rounded-circle">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-danger">2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
                                        </div>
                                        <div class="col ps-0 m-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small>5 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/team/profile-picture-4.jpg" class="user-avatar lg-avatar rounded-circle">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small>1 d ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/team/profile-picture-5.jpg" class="user-avatar lg-avatar rounded-circle">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item text-center text-primary fw-bold rounded-bottom py-3">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="assets/img/team/profile-picture-3.jpg">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold">Bonnie Green</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-0">
                            <a class="dropdown-item rounded-top fw-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                            <a class="dropdown-item fw-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                            <a class="dropdown-item fw-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                            <a class="dropdown-item fw-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                            <div role="separator" class="dropdown-divider my-0"></div>
                            <a class="dropdown-item rounded-bottom fw-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

