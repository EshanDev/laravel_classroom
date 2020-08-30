<template>
    <!-- Wrapper -->
    <div id="wrapperContainer" class="wrapper isOpen">
        <!-- Sidebar -->
        <div id="SidebarContainer" class="sidebar">
            <div class="content">
                <!-- Content One -->
                <div class="sidebar-header">
                    <h3 class="text-center mp-none">
                        <i class="glyph-icon flaticon-001-workplace"></i>
                        ห้องเรียน
                    </h3>
                </div>
                <!-- End Content One -->

                <!-- Content Two -->
                <div class="sidebar-list">
                    <ul id="SLink" class="sidebar-link">
                        <li>
                            <router-link :to="{name: 'home'}" exact>หน้าหลัก</router-link>
                        </li>
                        <li>
                            <router-link :to="{name: 'profile'}"
                            >บัญชีผู้ใช้งาน</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/classroom/playlist"
                            >เพลย์ลิสต์</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/classroom/quiz"
                            >แบบทดสอบ</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/classroom/contact"
                            >ติดต่อผู้ดูและระบบ</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/classroom/logout">ออกจากระบบ</router-link>
                        </li>
                    </ul>
                </div>
                <!-- End Content Two -->
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Main Container -->
        <div id="MainContainer" class="main-container isOpen">
            <!-- Top Navbar -->
            <nav
                class="navbar navbar-expand navbar-light bg-light shadow-sm fixed-top"
            >
                <div class="container-fluid">
                    <div id="ToggleBar" class="navbar-header">
                        <div class="menu-bars">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </div>
                    <div class="navbar-links">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item nav-link">Administrator</li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content bg-light py-5">
                <div class="container-fluid py-3">
                    <router-view></router-view>
                </div>
            </div>

            <!-- End Top Navbar -->
        </div>
        <!-- End Main Container -->
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .router-link-active {
        color: #ffffff !important;
        border-left: 5px solid #00695C !important;
        background-color: rgb(7, 69, 73);
    }
</style>
