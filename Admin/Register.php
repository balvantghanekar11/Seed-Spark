 <!-- Load Files -->
      <?php include_once("Connection.php");?>
      <?php include_once("loadfiles.php");?>
      <?php include_once("loadfilesjs.php");?>  
  <!-- Load Files -->

  <!--Registration Page Starts-->
<section id="regestration">
    <div class="container">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex">
                            <div class="col-12 col-sm-12 col-md-6 gradient-deep-orange-orange">
                                <div class="card-block">
                                    <div class="card-img overlap">  
                                        <img alt="Card image cap" src="app-assets/img/elements/13.png" width="350" class="mx-auto d-block">
                                    </div>
                                    <h2 class="card-title font-large-1 text-center white mt-3">Registration</h2>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center">
                                <div class="card-block mx-auto">
                                    <form >
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">
                                                <i class="icon-user"></i>
                                            </span>
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Name" required >
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">
                                                <i class="ft-mail"></i>
                                            </span>
                                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required >
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon">
                                                <i class="ft-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" name="inputPass" id="inputPass" placeholder="Password" required >
                                        </div>
                                        <div class="form-group col-sm-offset-1">
                                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input type="checkbox" class="custom-control-input" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="pl-2">I agree <a>terms and conditions</a></span>
                                            </label>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-warning btn-raised">Get Started</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Registration Page Ends-->