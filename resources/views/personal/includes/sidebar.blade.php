<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">

    <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
<ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
        <a href="{{ route('personal.main.index') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
            Main
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('personal.liked.index') }}" class="nav-link">
            <i class="nav-icon far fa-heart"></i>
            <p>
            Likes Posts
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('personal.comment.index') }}" class="nav-link">
            <i class="nav-icon far fa-comment"></i>
            <p>
            Comments
            </p>
        </a>
    </li>

</ul>

</div>
<!-- /.sidebar -->

</aside>
