<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
{{-- <div class="sidebar-heading">
    Interface
</div> --}}

<!-- Nav Item -  -->
{{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Warga</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('block.index') }}">Data Block Rumah</a>
            <a class="collapse-item" href="{{ route('warga.index') }}">Data Warga</a>
        </div>
    </div>
</li> --}}

<!-- Nav Item -  -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('students.index') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Student</span></a>
</li>
