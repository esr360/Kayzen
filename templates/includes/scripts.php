<!-- SCRIPTS -->

<?php if (env == 'dev') { ?>

    <!-- jQuery -->
    <script src="<?php echo appDir ?>/scripts/jquery.js"></script>
    
    <!-- sudojQuery end -->
    <script src="<?php echo appDir ?>/scripts/sudojQuery-end.js"></script>
    
    <!-- App -->
    <script src="<?php echo appDir ?>/scripts/app.js"></script>

<?php } else if (env == 'prod') { ?>

    <!-- jQuery -->
    <script src="<?php echo appDir ?>/scripts/jquery.min.js"></script>
    
    <!-- sudojQuery end -->
    <script src="<?php echo appDir ?>/scripts/sudojQuery-end.min.js"></script>
    
    <!-- App -->
    <script src="<?php echo appDir ?>/scripts/app.min.js"></script>
    
<?php } ?>