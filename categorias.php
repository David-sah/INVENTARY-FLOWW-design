<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang['t-ListOfCategory'] ?></title>
    <?php include 'layouts/title-meta.php'; ?>
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0"><?= $lang["t-ListOfCategory"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang["t-ListOfCategory"] ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0"><?= $lang["t-ListOfCategory"] ?></h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="customerList">
                                                <div class="row g-4 mb-3">
                                                    <div class="col-sm-auto">
                                                        <button type="button" class="btn btndel remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                            <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                            <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                            <i class=" ri-printer-line align-center" style="font-size: 16px"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="d-flex justify-content-sm-end">
                                                            <div class="search-box ms-2">
                                                                <input type="text" class="form-control search" placeholder="<?= $lang["t-search"] ?>">
                                                                <i class="ri-search-line search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-responsive table-card mt-3 mb-1">
                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="hstack flex-wrap gap-2">
                                                                        <input class="form-check-input" type="checkbox" id="checkAll" data-bs-toggle="tooltip" data-bs-placement="top" title="Seleccionar todas" value="option">
                                                                    </div>
                                                                </th>
                                                                <th class="sort" data-sort="customer_name"><?= $lang["t-Customer"] ?></th>
                                                                <th class="sort" data-sort="email"><?= $lang["t-Email"] ?></th>
                                                                <th class="sort" data-sort="phone"><?= $lang["t-Phone"] ?></th>
                                                                <th class="sort" data-sort="date"><?= $lang["t-JoiningDate"] ?></th>
                                                                <th class="sort" data-sort="status"><?= $lang["t-DeliveryStatus"] ?></th>
                                                                <th class="sort" data-sort="action"><?= $lang["t-Action"] ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                <td class="customer_name">Mary Cousar</td>
                                                                <td class="email">marycousar@velzon.com</td>
                                                                <td class="phone">580-464-4694</td>
                                                                <td class="date">06 Apr, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                                <td class="customer_name">Kevin Dawson</td>
                                                                <td class="email">kevindawson@velzon.com</td>
                                                                <td class="phone">213-741-4294</td>
                                                                <td class="date">14 Apr, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option6">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2106</a></td>
                                                                <td class="customer_name">Carolyn Jones</td>
                                                                <td class="email">carolynjones@velzon.com</td>
                                                                <td class="phone">414-453-5725</td>
                                                                <td class="date">07 Jun, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option7">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2107</a></td>
                                                                <td class="customer_name">Glen Matney</td>
                                                                <td class="email">glenmatney@velzon.com</td>
                                                                <td class="phone">515-395-1069</td>
                                                                <td class="date">02 Nov, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option8">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2108</a></td>
                                                                <td class="customer_name">Charles Kubik</td>
                                                                <td class="email">charleskubik@velzon.com</td>
                                                                <td class="phone">231-480-8536</td>
                                                                <td class="date">25 Sep, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-danger text-uppercase"><?= $lang["t-Block"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option9">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2109</a></td>
                                                                <td class="customer_name">Herbert Stokes</td>
                                                                <td class="email">herbertstokes@velzon.com</td>
                                                                <td class="phone">312-944-1448</td>
                                                                <td class="date">20 Jul, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-danger text-uppercase"><?= $lang["t-Block"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option10">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2110</a></td>
                                                                <td class="customer_name">Timothy Smith</td>
                                                                <td class="email">timothysmith@velzon.com</td>
                                                                <td class="phone">973-277-6950</td>
                                                                <td class="date">13 Dec, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option11">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2111</a></td>
                                                                <td class="customer_name">Johnny Evans</td>
                                                                <td class="email">johnnyevans@velzon.com</td>
                                                                <td class="phone">407-645-1767</td>
                                                                <td class="date">01 Oct, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-danger text-uppercase"><?= $lang["t-Block"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option12">
                                                                    </div>
                                                                </th>
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2112</a></td>
                                                                <td class="customer_name">Kevin Dawson</td>
                                                                <td class="email">kevindawson@velzon.com</td>
                                                                <td class="phone">213-741-4294</td>
                                                                <td class="date">14 Apr, 2021</td>
                                                                <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                            </lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                                orders for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <div class="pagination-wrap hstack gap-2">
                                                        <a class="page-item pagination-prev disabled" href="#">
                                                            <?= $lang["t-Previous"] ?>
                                                        </a>
                                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                                        <a class="page-item pagination-next" href="#">
                                                            <?= $lang["t-Next"] ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end col -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->





                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModlLabel">Agregar categoria</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Nombre</label>
                                        <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Descripci??n</label>
                                        <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Phone</label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Joining Date</label>
                                        <input type="text" id="date-field" class="form-control" placeholder="Select Date" required />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger name="status-field" id="status-field">
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                        <button type="button" class="btn btn-primary btn-sm" id="sa-success">Click me</button>
                                        <button type="button" class="btn btn-primary btn-sm" id="sa-error">Sweet alert wrong</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you Sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->
<script>
    var mybutton = document.getElementById("back-to-top");

    function topFunction() {
        document.body.scrollTop = 0, document.documentElement.scrollTop = 0
    }
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        100 < document.body.scrollTop || 100 < document.documentElement.scrollTop ? mybutton.style.display = "block" : mybutton.style.display = "none"
    }
</script>

<!-- CUSTOMIZER THEME  -->
<!-- <?php include 'layouts/customizer.php'; ?> -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/list.js/list.min.js"></script>
<script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweetalerts.init.js"></script>
<!-- listjs init -->
<script src="assets/js/pages/listjs.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>