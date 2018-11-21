<!doctype html>
<html class="no-js" lang="">

<head>
    @include('dashboard-link')
</head>
<body>
    <div class="header">
        @include('dashboard-header')
    </div>
    <!-- /# header -->
    <div class="menu">
        @include('dashboard-nav')
    </div>
    <!-- /# menu -->
    <div class="page-title">
        @include('dashboard-element')
    </div>
    <!-- /# element -->

    <!-- content area -->
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Calendar</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"><a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-block calendar-btn"><i class="ti-plus f-s-12 m-r-5"></i> Create New</a>
                                    <div id="external-events" class="m-t-20">
                                        <p>Drag and drop your event or click in the calendar</p>
                                        <div class="external-event bg-primary" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                        <div class="external-event bg-success" data-class="bg-success"><i class="fa fa-move"></i>My Event</div>
                                        <div class="external-event bg-warning" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                        <div class="external-event bg-dark" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="checkbox m-t-40">
                                        <input id="drop-remove" type="checkbox">
                                        <label for="drop-remove">Remove after drop</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card-box">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong>Add a category</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
        </div>
    </div>

    @include('dashboard-create-an-event')
    
    <!-- Common JS -->
    <script src="dashboard/js/common.min.js"></script>
    <script src="dashboard/js/scripts.js"></script>


    <script src="dashboard/js/circle-progress.min.js"></script>

    <!-- Morris Chart -->
    <script src="dashboard/js/chartist.min.js"></script>
    <script src="dashboard/js/chartist-plugin-tooltip.min.js"></script>
    <script src="dashboard/js/dashboard.js"></script>

    <!-- For calender -->
    <script src="dashboard/js/jquery-ui.min.js"></script>
    <script src="dashboard/js/moment.js"></script>
    <script src="dashboard/js/fullcalendar.min.js"></script>
    <script src="dashboard/js/fullcalendar-init.js"></script>

</body>

</html>