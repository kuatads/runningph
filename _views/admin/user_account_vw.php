
 <div class="page-wrapper">
    <?php if($_SESSION['status'] == 0) : ?>
        <div id="errmsg" class="alert alert-danger alert-dismissible">Activate your account by completing all the details!</div>
    <?php endif; ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My Account</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fullname" placeholder="Full Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="contactno" placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Security Info</h4>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="username" placeholder="etuyco">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="password" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                             <form class="form-horizontal">
                                <div class="card-body">
                                    <img width="140px" height="140px" src="<?php echo SITE_URL.'/uploads/tads.jpg' ?>">
                                    <div class="form-group row">
                                         <div class="custom-file">
                                            <input type="file" class="custom-file-input btn-sm" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile"><small>Choose File..</small></label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
</div>