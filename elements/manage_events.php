<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php
	global $DB;
	$events = $DB->query( "SELECT * FROM events" );
	
?>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Event</th>
			<th>Start</th>
			<th>End</th>
			<th>Organizer</th>
			<th>Fee</th>
		</tr>
	</thead>
	<tbody>
	<?php while( $event = $events->fetch_object() ) : ?>
		<tr>
			<td><?php echo $event->eid ?></td>
			<td><?php echo $event->eventn ?></td>
			<td><?php echo $event->startd ?></td>
			<td><?php echo $event->endd ?></td>
			<td><?php echo $event->organizer ?></td>
			<td><?php echo $event->fee ?></td>
		</tr>
	<?php endwhile; ?>
	</tbody>
</table>