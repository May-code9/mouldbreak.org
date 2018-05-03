<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Auth::user()->first_name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          @if (Auth::user()->role == 4)
            <li class="@if(isset($index_active)) {{$index_active}} @endif">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Display Images</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.dashboard.header_image')}}"><i class="fa fa-angle-double-right"></i> Header Image</a></li>
                </ul>
            </li>
            <li class="@if (isset($testimony_active)) {{$testimony_active}} @endif">
              <a href="{{route('admin.dashboard.testimony')}}">
                <i class="fa fa-envelope"></i> <span>Testimonies</span>
                <!--<small class="badge pull-right bg-red">3</small>-->
              </a>
            </li>

            <li class="treeview @if (isset($form_active)) {{$form_active}} @endif">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('admin.dashboard.blog')}}"><i class="fa fa-angle-double-right"></i> Blog</a></li>
                    <li><a href="{{route('admin.dashboard.course')}}"><i class="fa fa-angle-double-right"></i> Courses</a></li>
                    <li><a href="{{route('admin.dashboard.event')}}"><i class="fa fa-angle-double-right"></i> Events</a></li>
                    <li><a href="{{route('admin.dashboard.lecturer')}}"><i class="fa fa-angle-double-right"></i> Lecturers</a></li>
                    <li><a href="{{route('admin.dashboard.news')}}"><i class="fa fa-angle-double-right"></i> News</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.dashboard.table.testimony') }}"><i class="fa fa-angle-double-right"></i>Testimony List</a></li>
                    <li><a href="{{ route('admin.dashboard.table.messages') }}"><i class="fa fa-angle-double-right"></i>Message List</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
