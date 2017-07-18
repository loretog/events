<?php element( 'header' ) 
?>
<?php date_default_timezone_set('Asia/Bangkok'); ?>

<div class="container">
    <?php if( isset( $_SESSION[ 'uid' ] ) ) : ?>
    <div class="row">
        <div class="col-lg-12" style="margin-bottom: 15px; background-color: #fff;">
            <h2>Sorry this page is under construction.</h2>
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
<?php element( 'footer' ) ?>