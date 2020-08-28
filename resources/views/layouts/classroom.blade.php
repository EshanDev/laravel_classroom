<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ห้องเรียน / ห้องอบรม</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/classroom.css') }}">
    <script src="https://kit.fontawesome.com/915c079cb9.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Wrapper -->
    <div id="wrapperContainer" class="wrapper isOpen">

        <!-- Sidebar -->
            <div id="SidebarContainer" class="sidebar">
                <div class="content">
                    <!-- Content One -->
                    <div class="sidebar-header">
                        <h3 class="text-center mp-none"><i class="glyph-icon flaticon-001-workplace"></i> ห้องเรียน</h3>
                    </div>
                    <!-- End Content One -->

                    <!-- Content Two -->
                    <div class="sidebar-list">
                        <ul id="SLink" class="sidebar-link">
                        	<li class="{{ set_active('classroom') }}"><a href="{{ url('/classroom') }}">หน้าหลัก</a></li>
                            <li class="{{ set_active('classroom/user/profile') }}"><a href="{{ url('/classroom/user/profile') }}">บัญชีผู้ใช้งาน</a></li>
                            <li class="Slink-item"><a href="#">คอร์สเพลย์ลิสต์</a></li>
                            <li class="{{ Request::path() == 'classroom/store' ? 'active' : '' }}"><a href="{{ route('classroom.test') }}">แบบทดสอบ</a></li>
                            <li class="Slink-item"><a href="#">ติดต่อผู้ดูแลระบบ</a></li>
                            <li class="Slink-item"><a href="#">ออกจากระบบ</a></li>
                        </ul>
                    </div>
                    <!-- End Content Two -->

                </div>
            </div>
        <!-- End Sidebar -->

        <!-- Main Container -->
        <div id="MainContainer" class="main-container isOpen">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand navbar-light bg-light shadow-sm fixed-top">
                <div class="container-fluid">
                    <div id="ToggleBar" class="navbar-header">
                            <div class="menu-bars">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                    </div>
                    <div class="navbar-links">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item hidden-sm"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            <li class="nav-item hidden-sm"><a href="#register" class="nav-link">Register</a></li>
                            <li class="nav-item nav-link visible-sm">Guest</li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content bg-light py-5">
                <div class="container-fluid py-3">
                    @yield('main-container')
                </div>
            </div>

            <!-- End Top Navbar -->
        </div>
        <!-- End Main Container -->


    </div>
    
    <!-- End Wrapper -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script src="{{ asset('js/classroom.js') }}"></script>
    
        @yield('scrpt')


</body>
</html>