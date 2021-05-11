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

        <div class="d-lg-flex justify-content-between flex-wrap fle9x-md-nowrap align-items-center py-4">
            <div class="col-auto d-flex justify-content-between ps-0 mb-4 mb-lg-0">
                <div class="me-lg-3">
                    <button type="button" class="btn btn-secondary text-dark btn-block" data-bs-toggle="modal" data-bs-target="#modal-default">
                        <span class="fas fa-plus me-2"></span><span>New Tasks</span>
                    </button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-dark text-white">
                        <span class="fas fa-archive"></span>
                    </button>
                    <button class="btn btn-dark text-white">
                        <span class="fas fa-exclamation-circle"></span>
                    </button>
                    <button class="btn btn-dark text-white">
                        <span class="fas fa-trash-alt"></span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0"><div class="mb-0">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">
                            <span class="fas fa-search"></span>
                        </span>
                        <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search Tasks Here" aria-label="Search" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Content -->
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="h6 modal-title">Create New Task</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-4">
                                <label for="email">Title</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="my-4">
                                <label for="textarea">Task Details</label>
                                <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Importent</label>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Create</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal Content -->



        <div class="task-wrapper border bg-white shadow-sm rounded">
            <div class="card hover-state border-bottom rounded-0 rounded-top py-3">
                <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                    <div class="col-1 text-left text-sm-center mb-2 mb-sm-0">
                        <div class="form-check check-lg inbox-check me-sm-2">
                            <input class="form-check-input" type="checkbox" value="" id="mailCheck1">
                            <label class="form-check-label" for="mailCheck1"></label>
                        </div>
                    </div>
                    <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
                        <div class="mb-2">
                            <h3 class="h5">Meeting with Ms.Bonnie from Themesberg LLC</h3>
                            <div class="d-block d-sm-flex">
                                <div>
                                    <h4 class="h6 fw-normal text-gray mb-3 mb-sm-0">
                                        <span class="fas fa-clock me-2"></span>10:00 AM</h4>
                                </div>
                                <div class="ms-sm-3">
                                    <span class="badge super-badge badge-lg bg-success">Done</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="./single-message.html" class="fw-bold text-dark">
                                <span class="fw-normal text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                        <div class="rating-star star-lg d-none d-lg-inline-block">
                            <input type="checkbox" id="InboxStar1" name="star">
                            <label class="rating-star-label" for="InboxStar1"><span class="sr-only">Star</span></label>
                        </div>
                        <div class="btn-group ms-md-3">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h icon-dark"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit"></span>Edit</a>
                                <a class="dropdown-item text-warning" href="#"><span class="fas fa-star"></span>Important</a>
                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt"></span>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card hover-state border-bottom rounded-0 py-3">
                <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                    <div class="col-1 text-left text-sm-center mb-2 mb-sm-0">
                        <div class="form-check check-lg inbox-check me-sm-2">
                            <input class="form-check-input" type="checkbox" value="" id="mailCheck11">
                            <label class="form-check-label" for="mailCheck11"></label>
                        </div>
                    </div>
                    <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
                        <div class="mb-2">
                            <h3 class="h5">Meeting with Ms.Bonnie from Themesberg LLC</h3>
                            <div class="d-block d-sm-flex">
                                <div>
                                    <h4 class="h6 fw-normal text-gray mb-3 mb-sm-0"><span class="fas fa-clock me-2"></span>10:00 AM</h4>
                                </div>
                                <div class="ms-sm-3">
                                    <span class="badge super-badge badge-lg bg-purple">Waiting</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="./single-message.html" class="fw-bold text-dark">
                                <span class="fw-normal text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                        <div class="rating-star star-lg d-none d-lg-inline-block">
                            <input type="checkbox" id="InboxStar11" name="star">
                            <label class="rating-star-label" for="InboxStar11"><span class="sr-only">Star</span></label>
                        </div>
                        <div class="btn-group ms-md-3">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-dark"></span></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit"></span>Edit</a>
                                <a class="dropdown-item text-warning" href="#"><span class="fas fa-star"></span>Important</a>
                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt"></span>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card hover-state border-bottom rounded-0 py-3">
                <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                    <div class="col-1 text-left text-sm-center mb-2 mb-sm-0">
                        <div class="form-check check-lg inbox-check me-sm-2">
                            <input class="form-check-input" type="checkbox" value="" id="mailCheck11">
                            <label class="form-check-label" for="mailCheck11"></label>
                        </div>
                    </div>
                    <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
                        <div class="mb-2">
                            <h3 class="h5">Meeting with Ms.Bonnie from Themesberg LLC</h3>
                            <div class="d-block d-sm-flex">
                                <div>
                                    <h4 class="h6 fw-normal text-gray mb-3 mb-sm-0"><span class="fas fa-clock me-2"></span>10:00 AM</h4>
                                </div>
                                <div class="ms-sm-3">
                                    <span class="badge super-badge badge-lg bg-warning">In Progress</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="./single-message.html" class="fw-bold text-dark">
                                <span class="fw-normal text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue.</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                        <div class="rating-star star-lg d-none d-lg-inline-block">
                            <input type="checkbox" id="InboxStar11" name="star">
                            <label class="rating-star-label" for="InboxStar11"><span class="sr-only">Star</span></label>
                        </div>
                        <div class="btn-group ms-md-3">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-dark"></span></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <a class="dropdown-item rounded-top" href="#"><span class="fas fa-edit"></span>Edit</a>
                                <a class="dropdown-item text-warning" href="#"><span class="fas fa-star"></span>Important</a>
                                <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt"></span>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-7 mt-1">Showing 1 - 20 of 289</div>
                <div class="col-5">
                    <div class="btn-group float-end">
                        <nav aria-label="Posts navigation example">
                            <ul class="pagination pagination-sm">
                                <li class="page-item">
                                    <a class="page-link" aria-label="first link" href="#"><span class="fas fa-chevron-left"></span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" aria-label="first link" href="#"><span class="fas fa-chevron-right"></span></a>
                                </li>
                            </ul>
                        </nav>
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
                <img src="../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="../assets/img/technologies/react-logo.svg" class="image image-xs">
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
