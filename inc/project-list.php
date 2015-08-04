<?php
$project_names= array("TeamBooster", "Blocbox", "Paycrave", "EliteAudio");
?>
            <div class="row" data-equalizer>
<?php if($title !== "EliteAudio") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-4"; } else { echo "medium-3"; } ?>
              columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="eliteaudio.php"><img src="img/home-eliteaudio.gif">
  <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>Logo Design, Product Page, Product Mockup</p>           
  <?php } ?>
                  </a>
                </div>
              </div>
<?php } ?>


<?php if($title !== "TeamBooster") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-4"; } else { echo "medium-3"; } ?>
              columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="teambooster.php"><img src="img/home-teambooster.gif">
  <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>Logo Design, Prototypes, Landing Page, UI/UX</p>         
  <?php } ?>
                  </a>
                </div>
              </div>
<?php } ?>
<?php if($title !== "Blocbox") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-4"; } else { echo "medium-3"; } ?>
                columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="blocbox.php"><img src="img/home-blocbox.gif">
    <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>Logo Design, Landing Page</p>
    <?php } ?>
                  </a>
                </div>
              </div>
<?php } ?>

<?php if($title !== "Paycrave") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-4"; } else { echo "medium-3"; } ?>
                columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="paycrave.php"><img src="img/home-paycrave.gif">
    <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>App Design, Prototype, UI/UX</p>
    <?php } ?>
                </a>
                </div>
              </div>
<?php } ?>