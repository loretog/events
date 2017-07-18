<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php
	global $DB;
	$students = $DB->query( "SELECT * FROM users WHERE memtype='Member'" );
	
?>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Year &amp; Section</th>
			<th>Mobile #</th>
			<th>Email</th>
			<th>Student Status</th>
		</tr>
	</thead>
	<tbody>
	<?php while( $admin = $students->fetch_object() ) : ?>
		<tr>
			<td><?php echo $admin->id ?></td>
			<td><?php echo $admin->usern ?></td>
			<td><?php echo $admin->firstn ?></td>
			<td><?php echo $admin->lastn ?></td>
			<td><?php echo $admin->gender ?></td>
			<td><?php echo $admin->yrsec ?></td>
			<td><?php echo $admin->mobile ?></td>
			<td><?php echo $admin->email ?></td>
			<td><?php echo $admin->stutype ?></td>
		</tr>
	<?php endwhile; ?>
	</tbody>
</table>