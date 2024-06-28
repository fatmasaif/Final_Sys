<?php

include('admin_session.php');

?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
	  
	   <li class="nav-item active">
        <a class="nav-link" href="../index.php" target="_blank">
          <i class="fas fa-fw fa-home"></i>
          <span>Website</span></a>
      </li>
	  
	   <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

   

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-plus"></i>
          <span>Entries</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Entries:</h6>
            <a class="collapse-item" href="addcat.php">Add Categories</a>
            <a class="collapse-item" href="editcat.php">Edit Categories</a>
            <a class="collapse-item" href="addmat.php">Add Service</a>
            <a class="collapse-item" href="editmat.php">Edit Service</a>
			     
          </div>
        </div>
      </li>



   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities34" aria-expanded="true" aria-controls="collapseUtilities34">
          <i class="fas fa-fw fa-book"></i>
          <span>Bills</span>
        </a>
        <div id="collapseUtilities34" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bills:</h6>
            <a class="collapse-item text-warning" href="bills.php">Waiting Bills</a>
			 <a class="collapse-item text-danger" href="dbills.php">Declined Bills</a>
			 
            <a class="collapse-item text-info" href="review.php">Review</a>
     
			
          </div>
        </div>
      </li>

   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities343" aria-expanded="true" aria-controls="collapseUtilities34">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span>
        </a>
        <div id="collapseUtilities343" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users:</h6>
            <a class="collapse-item text-success" href="users.php">View Users</a>
		
            
     
			
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>