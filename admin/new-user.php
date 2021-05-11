<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require("parsal/cssLink.php");
    ?>
</head>

<body>

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<?php
require("parsal/header.php");
?>
<div class="row mt-md-3 mt-2">
    <div class="col-12 col-xl-8">
        <div class="card card-body shadow-sm mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form>
                <div class="mb-3">
                    <div>
                        <label for="first_name">Name</label>
                        <input class="form-control" id="first_name" type="text" placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Password</label>
                            <input class="form-control" id="first_name" type="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Conform password</label>
                            <input class="form-control" id="last_name" type="password" placeholder="Confirm your password" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="gender">Role</label>
                        <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected>Select a role</option>
                            <option value="1">Admin</option>
                            <option value="2">Moderator</option>
                            <option value="2">user</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-dark">Create new user</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow-sm mb-4">
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar">
                                <img class="rounded" src="assets/img/team/profile-picture-3.jpg" alt="change avatar">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-12">
                <div class="card card-body shadow-sm mb-4">
                    <h2 class="h5 mb-4">Select cover photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar">
                                <img class="rounded" src="assets/img/profile-cover.jpg" alt="change cover photo">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-settings card pt-2 collapse" id="theme-settings">
    <div class="card-body pt-4">
        <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
                href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
            <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
               data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
               data-size="large" data-show-count="true"
               aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
        </div>
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
           class="btn btn-primary mb-3 w-100">Download <i class="fas fa-download ms-2"></i></a>
        <p class="fs-7 text-gray-700 text-center">Available in the following technologies:</p>
        <div class="d-flex justify-content-center">
            <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
               target="_blank">
                <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
            </a>
        </div>
    </div>
</div>

<div class="card theme-settings theme-settings-expand" id="theme-settings-expand">
    <div class="card-body p-3 py-2">
        <span class="fw-bold h6">
            <i class="fas fa-cogs me-1 fs-7"></i> Settings
        </span>
    </div>
</div>

<?php
require("parsal/footer.php");
?>
</main>

<?php
require("parsal/jsLink.php");
?>


</body>

</html>

