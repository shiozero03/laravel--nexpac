<nav class="sidebar sidebar-offcanvas" id="sidebar">
  	<ul class="nav">
    	<li class="nav-item" id="dashboard">
      		<a class="nav-link" href="{{ route('admin.dashboard') }}">
        		<i class="mdi mdi mdi-speedometer menu-icon"></i>
        		<span class="menu-title">Dashboard</span>
      		</a>
    	</li>
    	<li class="nav-item nav-category">User Data</li>
    	<li class="nav-item" id="user">
      		<a class="nav-link" data-bs-toggle="collapse" href="#user-data" aria-expanded="false" aria-controls="user-data">
        		<i class="menu-icon mdi mdi-account-check"></i>
        		<span class="menu-title">User</span>
        		<i class="menu-arrow"></i> 
      		</a>
      		<div class="collapse" id="user-data">
        		<ul class="nav flex-column sub-menu">
          			<li class="nav-item"> <a class="nav-link" href="">Pengguna Umum</a></li>
        		</ul>
      		</div>
    	</li>
    	<li class="nav-item" id="profil">
      		<a class="nav-link" data-bs-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
        		<i class="menu-icon mdi mdi-account-convert"></i>
        		<span class="menu-title">Profil</span>
        		<i class="menu-arrow"></i> 
      		</a>
      		<div class="collapse" id="profile">
        		<ul class="nav flex-column sub-menu">
          			<li class="nav-item"> <a class="nav-link" href="">Ubah Data</a></li>
          			<li class="nav-item"> <a class="nav-link" href="">Ubah Password</a></li>
        		</ul>
      		</div>
    	</li>
    	<li class="nav-item">
      		<a class="nav-link" href="{{ route('logout') }}">
        		<i class="menu-icon mdi mdi-logout"></i>
        		<span class="menu-title">Logout</span>
      		</a>
    	</li>
  	</ul>
</nav>