@extends('../master.admin')
@section('content')
		<!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
        
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Invoice Grid</h3>
                        </div>
                        <div class="col-auto">
                            <a href="invoices.html" class="invoices-links">
                                <i class="feather feather-list"></i>
                            </a>
                            <a href="invoice-grid.html" class="invoices-links active">
                                <i class="feather feather-grid"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
           
                <!-- Report Filter -->
                <div class="card report-card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="app-listing">
                                    <li>
                                        <div class="multipleSelection">
                                            <div class="selectBox">
                                                <p class="mb-0"><i class="fas fa-user-plus me-1 select-icon"></i> Select User</p>
                                                <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                            </div>						  
                                            <div id="checkBoxes">
                                                <form action="#">
                                                    <p class="checkbox-title">Customer Search</p>
                                                    <div class="form-custom">
                                                        <input type="text" class="form-control bg-grey" placeholder="Enter Customer Name">
                                                    </div>
                                                    <div class="selectBox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span>  Brian Johnson
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span>  Russell Copeland
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span>  Greg Lynch
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> John Blair
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Barbara Moore
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Hendry Evan
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Richard Miles
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                    <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="multipleSelection">
                                            <div class="selectBox">
                                                <p class="mb-0"><i class="fas fa-calendar me-1 select-icon"></i> Select Date</p>
                                                <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                            </div>						  
                                            <div id="checkBoxes">
                                                <form action="#">
                                                    <p class="checkbox-title">Date Filter</p>
                                                    <div class="selectBox-cont selectBox-cont-one h-auto">
                                                        <div class="date-picker">
                                                            <div class="form-custom cal-icon">
                                                                <input class="form-control datetimepicker" type="text" placeholder="Form">
                                                            </div>
                                                        </div>
                                                        <div class="date-picker pe-0">
                                                            <div class="form-custom cal-icon">
                                                                <input class="form-control datetimepicker" type="text" placeholder="To">
                                                            </div>
                                                        </div>
                                                        <div class="date-list">
                                                            <ul>
                                                                <li><a href="#" class="btn date-btn">Today</a></li>
                                                                <li><a href="#" class="btn date-btn">Yesterday</a></li>
                                                                <li><a href="#" class="btn date-btn">Last 7 days</a></li>
                                                                <li><a href="#" class="btn date-btn">This month</a></li>
                                                                <li><a href="#" class="btn date-btn">Last month</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="multipleSelection">
                                            <div class="selectBox">
                                                <p class="mb-0"><i class="fas fa-book-open me-1 select-icon"></i> Select Status</p>
                                                <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                            </div>						  
                                            <div id="checkBoxes">
                                                <form action="#">
                                                    <p class="checkbox-title">By Status</p>
                                                    <div class="selectBox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name" checked>
                                                            <span class="checkmark"></span> All Invoices
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name">
                                                            <span class="checkmark"></span> Paid
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name">
                                                            <span class="checkmark"></span> Overdue
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name">
                                                            <span class="checkmark"></span> Draft
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name">
                                                            <span class="checkmark"></span> Recurring
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="name">
                                                            <span class="checkmark"></span> Cancelled
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                    <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="multipleSelection">
                                            <div class="selectBox">
                                                <p class="mb-0"><i class="fas fa-bookmark me-1 select-icon"></i> By Category</p>
                                                <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                            </div>						  
                                            <div id="checkBoxes">
                                                <form action="#">
                                                    <p class="checkbox-title">Category</p>
                                                    <div class="form-custom">
                                                        <input type="text" class="form-control bg-grey" placeholder="Enter Category Name">
                                                    </div>
                                                    <div class="selectBox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Advertising
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Food
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Marketing
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Repairs
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Software
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Stationary
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="category">
                                                            <span class="checkmark"></span> Travel
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                                    <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="report-btn">
                                            <a href="#" class="btn">
                                                <img src="assets/img/icons/invoices-icon5.png" alt="" class="me-2"> Generate report
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Report Filter -->

                <div class="card invoices-tabs-card border-0">
                    <div class="card-body card-body pt-0 pb-0">
                        <div class="invoices-main-tabs border-0 pb-0">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="invoices-settings-btn invoices-settings-btn-one">
                                        <a href="invoices-settings.html" class="invoices-settings-icon">
                                            <i class="feather feather-settings"></i>
                                        </a>
                                        <a href="add-invoice.html" class="btn">
                                            <i class="feather feather-plus-circle"></i> New Invoice
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@09</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-01.jpg" alt="User Image"> Barbara Moore</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$1,54,220</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">23 Mar, 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-success-dark">Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@10</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-02.jpg" alt="User Image"> Karlene Chaidez</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$1,222</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">18 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-danger-dark">Overdue</span>
                                    </div>
                                    <div class="col text-end">
                                        <span class="text-danger text-sm">Overdue 14 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@11</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-03.jpg" alt="User Image"> Russell Copeland</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$3,470</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">10 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-secondary-dark">Cancelled</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@12</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-04.jpg" alt="User Image"> Joseph Collins</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$8,265</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">30 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-primary-dark">Sent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@13</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-05.jpg" alt="User Image"> Jennifer Floyd</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$5,200</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">20 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-secondary-dark">Cancelled</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@14</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-06.jpg" alt="User Image"> Leatha Bailey</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$480</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">15 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-primary-dark">Sent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@15</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-07.jpg" alt="User Image"> Alex Campbell</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$1,999</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">08 Mar 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-danger-dark">Overdue</span>
                                    </div>
                                    <div class="col text-end">
                                        <span class="text-danger text-sm">Overdue 10 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <div class="card invoices-grid-card w-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <a href="view-invoice.html" class="invoice-grid-link">IN093439#@016</a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-middle">
                                <h2 class="card-middle-avatar">
                                    <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/customer/user-08.jpg" alt="User Image"> Marie Canales</a>
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span><i class="far fa-money-bill-alt"></i> Amount</span>
                                        <h6 class="mb-0">$2,700</h6>
                                    </div>
                                    <div class="col-auto">
                                        <span><i class="far fa-calendar-alt"></i> Due Date</span>
                                        <h6 class="mb-0">18 Mar, 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-success-dark">Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="invoice-load-btn">
                            <a href="#" class="btn">
                                <span class="spinner-border text-primary"></span> Load more
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script> 

</body>


<!-- Mirrored from html.truelysell.com/template/admin/invoice-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:39 GMT -->
</html>