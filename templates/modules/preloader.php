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
        <?php } else if ($style == 'balloons') { ?>
            <div class="awd_balloons">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'hourglass') { ?>
            <div class="awd_hourglass">
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'carousel') { ?>
            <div class="awd_carousel">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'carousel') { ?>
            <div class="awd_carousel">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'bounce') { ?>
            <div class="awd_bounce">
                <div>
                    <div></div>
                </div>
            </div>
        <?php } else if ($style == 'ripple') { ?>
            <div class="awd_ripple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'disc') { ?>
            <div class="awd_disc">
                <div></div>
            </div>
        <?php } else if ($style == 'snake') { ?>
            <div class="awd_snake">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'wave') { ?>
            <div class="awd_wave">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'newton') { ?>
            <div class="awd_newton">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } else if ($style == 'steps') { ?>
            <div class="awd_steps">
                <div></div>
                <div></div>
            </div>
        <?php } ?>
    </div>
    
<?php } ?>