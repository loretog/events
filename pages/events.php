<?php element( 'header' ) ?>
<?php date_default_timezone_set('Asia/Manila'); ?>

<div class="container">
    <?php if( isset( $_SESSION[ 'uid' ] ) ) : ?>

  <?php if( $_SESSION[ 'MESSAGE' ] ) : ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-danger"><?php echo $_SESSION[ 'MESSAGE' ] ?></div>
    </div>
  </div>
  <?php endif; ?>
    
  
	<div class="row">
      <?php if( isset( $_SESSION[ 'memtype' ] ) && $_SESSION[ 'memtype' ] == 'Admin' ) : ?>
        <div class="col-lg-6">           
            <!-- Button trigger modal -->
            <button type="button" id="event_new" class="btn btn-primary btn-small" data-toggle="modal" data-target="#myModal">
              New Event
            </button><br><br>
        </div>
      <?php endif; ?>
		<div class="col-lg-12" style="margin-bottom: 15px; background-color: #fff;">
            <?php
                $events = $DB->query( "SELECT * FROM events" );
                $data_event = array();
                while( $event = $events->fetch_object() ) {
                    $data_event[] = array( 'eid' => $event->eid,'title' => $event->eventn . "\nOrganizer: " . $event->organizer . "\nFee: Php " . $event->fee, 'start' => $event->startd, 'end' => $event->endd );
                }                
            ?>
            <script type="text/javascript">
                $data_events = <?php echo json_encode( $data_event ) ?>;
            </script>      

			<div class="calendar"></div>        
		</div>
	</div>

    
            <div class="box">                
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Community
                        <strong>Comments</strong>
                    </h2>
                    <hr>
                    <hr class="visible-xs">
                    <iframe width="100%" height="250px" src="https://docs.google.com/spreadsheets/d/19JFhBLKSEnvjGSfzlqiE9VyqpJCvYNtO7EnPiy9BuXw/pubhtml?gid=703058687&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
                    <br><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    
                </div>
                <div class="row">
        <div class="col-lg-6">
            <h2>Comments:</h2>
            <form action="<?php echo SITE_URL ?>/?page=events&action=add_comment" method="post">
                <input type="hidden" name="uid" value="<?php echo $_SESSION[ 'uid' ] ?>">
                <textarea class="form-control" name="message"></textarea>
                <input class="form-control" type="submit" value="Comment">
            </form>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
                $comments = $DB->query( "SELECT * FROM comments AS c LEFT JOIN users AS u ON c.id = u.id ORDER BY date DESC" );
                while( $comment = $comments->fetch_object() ) :
            ?>              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $comment->cid ?>">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $comment->cid ?>" aria-expanded="false" aria-controls="collapse<?php echo $comment->cid ?>">
                      Comment from <?php echo $comment->usern ?> (<?php echo $comment->date ?>)
                    </a>
                  </h4>
                </div>
                <div id="collapse<?php echo $comment->cid ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $comment->cid ?>">
                  <div class="panel-body">
                    <?php echo $comment->message ?>
                    <form method="post" action="<?php echo SITE_URL ?>/?page=events&action=add_reply">
                        <input type="hidden" name="uid" value="<?php echo $_SESSION[ 'uid' ] ?>">
                        <input type="hidden" name="cid" value="<?php echo $comment->cid ?>">
                        <textarea name="reply"></textarea>
                        <input type="submit" value="Reply">
                    </form>
                    <div class="replies">
                        <?php $replies = $DB->query( "SELECT * FROM replies AS r LEFT JOIN users AS u ON r.uid = u.id WHERE r.cid = " . $comment->cid ) ?>
                        <?php while( $reply = $replies->fetch_object() ) : ?>
                            reply from: <?php echo $reply->usern ?> (<?php echo $reply->reply_datetime ?>)<br>
                            <?php echo $reply->message ?>
                            <hr>
                        <?php endwhile; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>            
            </div>
        </div>
        <div class="col-lg-6">
            
        </div>
            </div>

        </div>

    <?php else : ?>
    <div class="row">
        <div class="col-lg-12" style="margin-bottom: 15px; background-color: #fff;">
            <h2>Please login to access this page.</h2>
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Event</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="event_form" action="<?php echo SITE_URL ?>/?page=events&action=add_event">
          <input type="hidden" id="eid" name="eid">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" id="event_name" name="name" class="form-control" placeholder="Name of the Event" required>
          </div>          
          <div class="form-group">
            <label for="exampleInputEmail1" style="display: block;">Date Start</label>
            <input type="date" id="start_date" name="start_date" style="width: 250px; display: inline;" class="form-control" placeholder="" min="<?php echo date( "Y-m-d" ) ?>">
            <input type="time" id="start_time" name="start_time" style="width: 150px; display: inline;" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" style="display: block;">Date End</label>
            <input type="date" id="end_date" name="end_date" style="width: 250px; display: inline;" class="form-control" placeholder="" min="<?php echo date( "Y-m-d" ) ?>">
            <input type="time" id="end_time" name="end_time" style="width: 150px; display: inline;" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Organizer</label>
            <input type="text" id="organizer" name="organizer" class="form-control" placeholder="Name of the Event" required>
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Fee</label>
            <input type="text" id="fee" name="fee" class="form-control" placeholder="Name of the Event" required>
          </div> 
          <button type="submit" id="event_submit" class="btn btn-success" style="display: inline;">Save Event</button>
          <a id="event_delete" class="btn btn-danger" style="display: none;">Delete Event</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php element( 'footer' ) ?>