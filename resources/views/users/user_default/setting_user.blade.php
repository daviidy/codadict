@extends('layouts.menu_user_default')
@section('title', 'Paramètre')

@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="/assets/imgs/icon/avatar-01.jpg" alt="Card image cap" style="width:30%;">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> California, United States</div>
                                        </div>
                                        <hr>
                                        <form class="" action="index.html" method="post">
                                          <div class="row form-group">
                                              <div class="col col-md-3">
                                                  <label for="text-input" class=" form-control-label">Photo de profil </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="file" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-3">
                                                  <label for="text-input" class=" form-control-label">Username</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="row form-group">
                                              <div class="col col-md-3">
                                                  <label for="text-input" class=" form-control-label">Email</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                  <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control" disabled>
                                              </div>
                                          </div>
                                        </form>
                                        <!--hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
@endsection
