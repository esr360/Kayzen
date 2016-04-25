<?php function preloader($style = 'clock') { ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader_close">
            <div class="button-round-border-size-2-thin-grey-3">Disable Preloader</div>
        </div>
        <?php if ($style == 'clock') { ?>
            <div class="awd_clock">
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'pacman') { ?>
            <div class="awd_pacman">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'nexus') { ?>
            <div class="spinner"></div>
        <?php } ?>
    </div>
    
<?php } ?>