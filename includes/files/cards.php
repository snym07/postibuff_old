<!-- Wide card with share menu button -->
<style>

.demo-card-wide{
  width: 100%;
  margin: 20px auto;
}

.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 150px;
  background: url('<?php echo $row[5];?>') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
</style>

<div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <!-- this title is left black for image -->
    </div>
    <div class="mdl-card__supporting-text">
      <h4><?php echo $name; ?></h4>
      <?php echo $location; ?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        View
      </a>
    </div>
    
  </div>
</div>
