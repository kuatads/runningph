
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    
                                    <form action="" name="form" method="POST">
                                        
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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="m-t-15">Start Date</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-15">End Date</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="datepicker-autoclose-2" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- CHECK --->
                                            <b>Featured Image</b>
                                            <small>Browse Featured Picture (Note** Should be 800 x 300 pixel)</small>
                                            <img src="<?php echo !empty($_GET['idproperties']) ? SITE_URL.'/uploads/'.$FeatureImage : '' ?>" class="upload_prev" />
                                                <div class="beforeupload">
                                                <input type="file" class="form-control" id="btnphoto" name="file" />
                                                    <input class="form-control" type="hidden" name="photo" id="photo" value="<?php echo !empty($_GET['idproperties']) ? $FeatureImage : '' ?>"/>
                                                <div id="progress" class="progress">
                                                    <div class="progress-bar progress-bar-success"></div>
                                                </div>
                                                </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>