@extends('layouts.menu_user_default')
@section('title', 'Mes projets')

@section('content')
<style media="screen">
  .hover:hover{
    box-shadow: inset 0px 0px 1px 0 rgba(0, 0, 0, 0.2), 0px 2px 5px 0 rgba(0, 0, 0, 0.19);

  }
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          <a href="#">
                            <div class="col-md-4">
                                <div class="card hover" style="">
                                    <img class="card-img-top" src="/assets/imgs/bg-title-01.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
@endsection
