<?php element( 'header' ); ?>
<?php if (isset ($_SESSION['memtype']) && $_SESSION[ 'memtype' ] == "Admin" ) : ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<div class="list-group">
				  <a href="<?php echo SITE_URL ?>/?page=admin&subpage=dashboard" class="list-group-item active">Dashboard</a>
				  <a href="<?php echo SITE_URL ?>/?page=admin&subpage=admins" class="list-group-item">Admins</a>
				  <a href="<?php echo SITE_URL ?>/?page=admin&subpage=students" class="list-group-item">Students</a>
				  <a href="<?php echo SITE_URL ?>/?page=admin&subpage=manage_events" class="list-group-item">Manage Events</a>				  
				</div>
			</div>
			<div class="col-lg-10" style="background-color: #fff;">
				<?php
					$subpage = isset( $_GET[ 'subpage' ] ) && !empty( $_GET[ 'subpage' ] ) ? $_GET[ 'subpage' ] : 'dashboard';
					element( $subpage ); 
				?>
			</div>
		</div>
	</div>
<?php else : ?>
<div class="row">
        <div class="col-lg-12" style="margin-bottom: 15px; background-color: #fff;">
            <h2>Sorry you need Admin priveleges to access this page.</h2>
        </div>
    </div>
<?php endif; ?>
<?php element( 'footer' ); ?>