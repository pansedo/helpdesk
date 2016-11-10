@extends('Includes.master')

@section('content')
<!-- CONTENT -->
  <!--TITLE -->
  <div class="row">
      <div id="paper-top">

          <div class="col-sm-3">
              <h2 class="tittle-content-header">
                  <i class="icon-menu"></i>
                  <span>Provinsi</span>
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
      <li><span class="icon-gear"></span></li>
      <li><i class="fa fa-lg fa-angle-right"></i></li>
      <li><a href="#" title="Setting">Setting</a></li>
      <li><i class="fa fa-lg fa-angle-right"></i></li>
      <li><a href="/provinsi" title="Provinsi">Provinsi</a></li>
  </ul>

  <!-- END OF BREADCRUMB -->


  <div class="content-wrap">
      <div class="row">
          <div class="col-sm-12">
              <div class="nest" id="basicClose">

                  <div class="title-alt">
                      <h6>List Provinsi</h6>
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


@section('footerTambahan')

@stop
