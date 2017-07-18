<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Eunice &amp; Chriselle 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo SITE_URL ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_URL ?>/assets/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_URL ?>/assets/fullcalendar/fullcalendar.min.js"></script>    

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $( "#event_new" ).click(function() {
            $( "#event_form" ).attr( "action", "<?php echo SITE_URL ?>/?page=events&action=add_event" );
        });
        $( "#event_delete" ).click(function() {            
            window.location.href = "<?php echo SITE_URL ?>/?page=events&action=delete_event&eid=" + $( "#eid" ).val();
        });        
        $( ".calendar" ).fullCalendar({
            events: $data_events,
            eventClick: function(calEvent, jsEvent, view) {

                /*alert('Event: ' + calEvent.title);
                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                alert('View: ' + view.name);*/

                // change the border color just for fun
                /*$(this).css('border-color', 'red');*/
                /*alert( calEvent.eid );*/

                <?php if( isset( $_SESSION[ 'memtype' ] ) && $_SESSION[ 'memtype' ] == 'Admin' ) : ?>

                $( "#event_form" ).attr( "action", "<?php echo SITE_URL ?>/?page=events&action=update_event" );
                $.ajax({
                    "type": "get",
                    "url": "<?php echo SITE_URL ?>/?action=get_event&eid=" + calEvent.eid,
                    "success": function( data ) {                       
                        event = JSON.parse(data);
                        $( "#eid" ).val( event.eid );
                        $( "#event_name" ).val( event.eventn );
                        $( "#start_date" ).val( event.startd );
                        $( "#start_time" ).val( event.startt );                   
                        $( "#end_date" ).val( event.endd );
                        $( "#end_time" ).val( event.endt );
                        $( "#organizer" ).val( event.organizer );
                        $( "#fee" ).val( event.fee );                        
                        
                        $( "#event_delete" ).css( "display", "inline" );
                    }
                });
                $('#myModal').modal('show');

                <?php endif; ?>

            }
        });
    });
    </script>

</body>

</html>