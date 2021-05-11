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
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>

        <a href="new-user.php" type="button" class="btn btn-secondary text-dark me-2">New User</a>

    </div>
    <div>
        <button type="button" class="btn btn-dark"><span class="fas fa-clipboard me-2"></span>Backup User Information</button>
        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-envelope-open-text me-2"></span>Send message to
            <span class="icon icon-small ms-1"><span class="fas fa-chevron-down"></span></span>
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
            <a class="dropdown-item fw-normal rounded-top" href="#">All User</a>
            <a class="dropdown-item fw-normal" href="#">A group</a>
        </div>
    </div>
</div>
<div>
    <div class="card card-body shadow-sm mb-4">
        <h2 class="h5 mb-4">All user information</h2>


        <table class="table table-centered table-nowrap mb-0 rounded">

            <thead class="">
                <tr class="m-3">
                    <th class="border-0">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="search by id">
                        </div>
                        <!-- End of Form -->
                    </th>
                    <th class="border-0">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="search by name">
                        </div>
                        <!-- End of Form -->
                    </th>
                    <th class="border-0">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="search by email">
                        </div>
                        <!-- End of Form -->
                    </th>
                    <th class="border-0">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="search by role">
                        </div>
                        <!-- End of Form -->
                    </th>
                </tr>
            </thead>
            <thead class="thead-light">
            <tr>
                <th class="border-0">ID</th>
                <th class="border-0">Name</th>
                <th class="border-0">Email</th>
                <th class="border-0">Role</th>
                <th class="border-0">Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- Item -->
            <tr>
                <td>
                    #sdjkhf573
                </td>
                <td>
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-1.jpg">
                        <div>Neil Sims</div>
                    </a>
                </td>
                <td>
                    neilsims.gmail.com
                </td>
                <td>
                    User
                </td>
                <td>

                    <div class="btn-group">
                        <button class="btn-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fas fa-angle-down dropdown-arrow"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="view-profile.php">View</a>
                            <a class="dropdown-item" href="update-profile.php">Edit</a>
                            <a class="dropdown-item" href="update-profile.php">Send message</a>
                            <a type="button" class="dropdown-item mb-3" data-bs-toggle="modal" data-bs-target="#modal-role">Update Role</a>

                        </div>
                    </div>
                </td>

            </tr>
            <!-- End of Item -->

            </tbody>
        </table>
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


<!-- Modal Content -->
<div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit user role</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h3>Give role base permeation</h3>
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Super Admin
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Admin
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Moderator
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    User
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-3">
                    <h3>Or Give specific permeation</h3>
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Create post
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Update post
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Edit post
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Delete post
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Approve user
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Update user
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Make new user
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Reset user password
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Delete user
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    Download User Information
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Accept</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Content -->

</body>

</html>

