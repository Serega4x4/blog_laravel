<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">

    <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
<ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
        <a href="{{ route('admin.post.index') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>
            Post
            </p>
        </a>
    </li>

    <li class="nav-item">
    <a href="{{ route('admin.category.index') }}" class="nav-link">
        <i class="nav-icon fas fa-th-list"></i>
        <p>
        Category
        </p>
    </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
            Tag
            </p>
        </a>
    </li>

</ul>

</div>
<!-- /.sidebar -->

</aside>
