

<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<a href="index3.html" class="brand-link"> <img
		src="<?php echo base_url("assets/images/conbridlogo.jpg")?>"
		alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		style="opacity: .8"> <span class="brand-text font-weight-light">CONBRID</span>
	</a>

	<div class="sidebar">

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img
					src="<?php echo base_url("assets/admin")?>/dist/img/user2-160x160.jpg"
					class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Admin</a>
			</div>
		</div>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column"
				data-widget="treeview" role="menu" data-accordion="false">

				
						<li class="nav-item"><a href="<?php echo base_url('admin/Dashboard')?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Dashboard</p>
						</a></li>
						<li class="nav-item"><a href="<?php echo base_url('admin/Dashboard/individuals')?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Individuals</p>
						</a></li>
						<li class="nav-item"><a href="<?php echo base_url('admin/Dashboard/companies')?>" class="nav-link"> <i
								class="far fa-circle nav-icon"></i>
								<p>Companies</p>
						</a></li>
						<li class="nav-item"><a href="<?php echo base_url('admin/Dashboard/customers')?>" class="nav-link"> <i
								class="far fa-circle nav-icon"></i>
								<p>Customers</p>
						</a></li>
						<li class="nav-item"><a href="<?php echo base_url('admin/Dashboard/job_post')?>" class="nav-link"> <i
								class="far fa-circle nav-icon"></i>
								<p>Job Post</p>
						</a></li>
					
					
					<li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Master <i class="right fas fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?php echo base_url('admin/Master/state')?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>State</p></a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo base_url('admin/Master/city')?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>City</p></a>
                        </li>
                        </ul>
                    </li>

	<li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Construction Contracts <i class="right fas fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?php echo base_url('admin/Construction_contract_master/new_construction')?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>New Construction</p></a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo base_url('admin/Construction_contract_master/demolition')?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>Demolition with New Construction</p></a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo base_url('admin/Construction_contract_master/renovation')?>" class="nav-link"><i class="far fa-circle nav-icon"></i>
                        <p>Renovation</p></a>
                        </li>
                        </ul>
                    </li>


			</ul>
		</nav>

	</div>

</aside>
