<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php
	global $DB;
	$admins = $DB->query( "SELECT * FROM users WHERE memtype='Admin'" );
	
?>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody>
	<?php while( $admin = $admins->fetch_object() ) : ?>
		<tr>
			<td><?php echo $admin->id ?></td>
			<td><?php echo $admin->usern ?></td>
			<td><?php echo $admin->firstn ?></td>
			<td><?php echo $admin->lastn ?></td>
		</tr>
	<?php endwhile; ?>
	</tbody>
</table>