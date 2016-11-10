@extends('Includes.master')

@section('content')
<!-- CONTENT -->
  <!--TITLE -->
  <div class="row">
      <div id="paper-top">

          <div class="col-sm-3">
              <h2 class="tittle-content-header">
                  <i class="icon-user"></i>
                  <span>Customer</span>
              </h2>
          </div>

          <div class="col-sm-7">
              <div class="devider-vertical visible-lg"></div>
              <div class="tittle-middle-header">
                  <div class="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <span class="tittle-alert entypo-info-circled"></span>
                      Welcome back,&nbsp;<strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                  </div>
              </div>
          </div>

      </div>
  </div>
  <!--/ TITLE -->

  <!-- BREADCRUMB -->
  <ul id="breadcrumb">
      <li><span class="entypo-home"></span></li>
      <li><i class="fa fa-lg fa-angle-right"></i></li>
      <li><a href="#" title="Sample page 1">Setting</a></li>
      <li><i class="fa fa-lg fa-angle-right"></i></li>
      <li><a href="#" title="Sample page 1">Customer</a></li>
      <li class="pull-right">
          <div class="input-group input-widget">
              <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
          </div>
      </li>
  </ul>

  <!-- END OF BREADCRUMB -->


  <div class="content-wrap">
      <div class="row">


          <div class="col-sm-12">
              <div class="nest" id="basicClose">
                  <div class="title-alt">
                      <h6>Basic</h6>
                      <div class="titleClose">
                          <a class="gone" href="#basicClose">
                              <span class="entypo-cancel"></span>
                          </a>
                      </div>
                      <div class="titleToggle">
                          <a class="nav-toggle-alt" href="#basic">
                              <span class="entypo-up-open"></span>
                          </a>
                      </div>

                  </div>

                  <div class="body-nest" id="basic">
                      <div class="form_center">
                          <form role="form">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" placeholder="Enter email" id="exampleInputEmail1" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" placeholder="Password" id="exampleInputPassword1" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <input type="file" id="exampleInputFile">
                                  <p class="help-block">Example block-level help text here.</p>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox">Check me out
                                  </label>
                              </div>
                              <button class="btn btn-info" type="submit">Submit</button>
                          </form>
                      </div>


                  </div>

              </div>
          </div>

      </div>
  </div>




  <div class="content-wrap">
      <div class="row">
          <div class="col-sm-12">
              <div class="nest" id="horizontalClose">
                  <div class="title-alt">
                      <h6>
                          Horizontal Forms</h6>
                      <div class="titleClose">
                          <a class="gone" href="#horizontalClose">
                              <span class="entypo-cancel"></span>
                          </a>
                      </div>
                      <div class="titleToggle">
                          <a class="nav-toggle-alt" href="#horizontal">
                              <span class="entypo-up-open"></span>
                          </a>
                      </div>

                  </div>

                  <div class="body-nest" id="horizontal">

                      <div class="form_center">
                          <form role="form" class="form-horizontal">
                              <div class="form-group">
                                  <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">Email</label>
                                  <div class="col-lg-10">
                                      <input type="email" placeholder="Email" id="inputEmail1" class="form-control">
                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">Password</label>
                                  <div class="col-lg-10">
                                      <input type="password" placeholder="Password" id="inputPassword1" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox">Remember me
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                      <button class="btn btn-danger" type="submit">Sign in</button>
                                  </div>
                              </div>
                          </form>
                      </div>

                  </div>

              </div>
          </div>
      </div>
  </div>
<!-- /END OF CONTENT -->

@stop
