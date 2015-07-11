<?php
$project_names= ["TeamBooster", "Blocbox", "Paycrave"];
?>
            <div class="row" data-equalizer>
<?php if($title !== "TeamBooster") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-6"; } else { echo "medium-4"; } ?>
              columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="teambooster.php"><img src="img/home-teambooster.gif">
  <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>Logo Design, Onboarding Wireframe, Landing Page, UI/UX</p></a>           
  <?php } ?>
                </div>
              </div>
<?php } ?>
<?php if($title !== "Blocbox") { ?>
              <div class="<?php if (in_array($title, $project_names)) { echo "medium-6"; } else { echo "medium-4"; } ?>
                columns project-logo s-space-below">
                <div class="card <?php if (in_array($title, $project_names)) { echo "all-rounded"; }?>">
                  <a href="blocbox.php"><img src="img/home-blocbox.gif">
    <?php if (!in_array($title, $project_names)) { ?>
                  <p data-equalizer-watch>Logo Design, Landing Page</p></a>
    <?php } ?>
                </div>
              </div>
<?php } ?>
              <div class="medium-4 columns project-logo">
                <!--
                <div class="card">
                  <a href="paycrave.php"><img src="img/home-paycrave.gif">
                  <p data-equalizer-watch>App Design, UI/UX</p></a>
                </div>
                -->
              </div>
            </div>