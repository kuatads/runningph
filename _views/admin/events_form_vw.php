
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add New Event</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Event Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <form action="" name="form" method="POST">
                    <div class="col-md-6">
                        <b>Event Title</b>
                        <input type="text" name="eventtitle" id="eventtitle" class="form-control" autocomplete="off">

                        <br/>
                        <b>Event Details</b>
                        <!-- Create the editor container -->
                        <div id="editor" style="height: 300px;">
                            <p>Event Details Here!</p>
                            <p>
                            <br>
                            </p>
                        </div>

                        <label class="m-t-15">Start Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                        <label class="m-t-15">End Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="datepicker-autoclose-2" placeholder="mm/dd/yyyy">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                          
                    </div>
                </form>
            </div>
</div>