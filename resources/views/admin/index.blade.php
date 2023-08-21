@extends('adminlte::page')

@section('title', 'Admin - Care Training')

@section('content_header')

@stop

@section('content')

<div class="wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-laptop"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Courses</span>
                    <span class="info-box-number">{{ count($published_courses) }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">{{ count($users) }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>


        </div>
        <!-- /.row -->



        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            {{-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px; overflow: hidden">
                      <div class="map"></div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Latest Reviews</h3>

                    <div class="card-tools">
                      <span title="{{ (count($reviews) > 1) ? count($reviews) . ' new reviews' : count($reviews) . ' new reviews' }} New Messages" class="badge {{ (count($reviews) > 1) ? 'badge-warning' : '' }}">{{ (count($reviews) > 0) ? count($reviews) : ''  }}</span>
                      {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button> --}}
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                      <!-- Message. Default to the left -->
                      @foreach($reviews as $review)
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left"></span>
                          <span class="direct-chat-timestamp float-right">{{ $review->created_at }}</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            {{ $review->comment }}
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      @endforeach
                      <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                  </div>
                  <!-- /.card-body -->

                  <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Users</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">{{ (count($latest_users) > 1) ? count($latest_users) . ' new users' : count($latest_users) . ' new users' }}</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                        @foreach( $latest_users as $latest_user)
                            <li>
                                <img class="mx-auto" src="{{ $latest_user->profile_photo_url }}" alt="User Image">
                                <a class="users-list-name" href="#">{{ $latest_user->name }} {{ $latest_user->lastname }}</a>
                                <span class="users-list-date">{{ $latest_user->created_at }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ route('admin.users.index') }}">See all users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Courses</h3>

                {{-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($new_courses as $new_course)
                            <tr>
                                <td>{{ $new_course->id }}</td>
                                <td>{{ $new_course->title }}</td>
                                <td>
                                    @switch( $new_course->status )
                                        @case(1)
                                            <span class="badge badge-secondary">Scribbler</span>
                                            @break
                                        @case(2)
                                            <span class="badge badge-warning">Revision</span>
                                            @break
                                        @case(3)
                                            <span class="badge badge-success">Published</span>
                                            @break
                                        @case(4)
                                            <span class="badge badge-danger">Disabled</span>
                                            @break
                                        @default

                                    @endswitch

                                </td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $new_course->created_at }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
                <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-secondary float-right">See all courses</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            {{-- <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Browser Usage</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i> Chrome</li>
                      <li><i class="far fa-circle text-success"></i> IE</li>
                      <li><i class="far fa-circle text-warning"></i> FireFox</li>
                      <li><i class="far fa-circle text-info"></i> Safari</li>
                      <li><i class="far fa-circle text-primary"></i> Opera</li>
                      <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-light p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      United States of America
                      <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      India
                      <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      China
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card --> --}}

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Courses in Review</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    @foreach( $revision_courses as $revision_course)
                        <li class="item">
                            {{-- <div class="product-img">
                            <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                            </div> --}}
                            <div class="product-info">
                            <a href="" class="product-title">{{ $revision_course->title }}
                                {{-- <span class="badge badge-warning float-right">{{ $revision_course->status }}</span></a> --}}
                            <span class="product-description">
                                {{ $revision_course->editor->name }} {{ $revision_course->editor->lastname }}
                            </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="{{ route('admin.courses.revision') }}" class="uppercase">View all courses under review</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    I am aside
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="footer" style="padding: 20px;">
    <strong>Copyright &copy; 2023 <a href="https://care.training">care.training</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->


@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop

@section('js')
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('vendor/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    {{-- <script src="dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="dist/js/pages/dashboard2.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
@stop
