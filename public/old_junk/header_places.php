
<div class="my-header">
	<img src="images/full_logo.png">

	<!-- search -->


      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right" style="float:right;padding:20px">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <?php include 'icons/search_icon.svg'; ?>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>

<br>

	<!-- profile image -->
	<div class="profile">
		<div class="mdl-grid">
				<img class="profile-img mdl-cell mdl-cell--6-col" src="images/min_lotus_temple.jpg">
				<div class="mdl-cell mdl-cell--6-col">
					<h3 class="mdl-color-text--white">Lotus Temple</h3>

					<!-- icon for place -->
					<div class="mdl-color-text--white" style="padding:0 20px">
						<?php include 'icons/location_icon.svg'; ?>New Delhi
						<span style="margin-left:50px"><?php include 'icons/msg_icon.svg'; ?> 12</span>
					</div>
				</div>
				
		</div>
	</div>
	
	<!-- likes icon and comments icon (reviews) -->
</div>

<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-layout__header--transparent">
     
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Description</a>
      <a href="#scroll-tab-2" class="mdl-layout__tab">Gallary</a>
      <a href="#scroll-tab-3" class="mdl-layout__tab">Map</a>
      <a href="#scroll-tab-4" class="mdl-layout__tab">360&deg; view</a>
    </div>
  </header>
  
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
      <div class="page-content">
      <!-- content goes here -->

      	<?php include '../includes/description.php'; ?>

      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2">
      <div class="page-content">
      <!-- content goes here -->

      	<?php include '../includes/gallary.php'; ?>

      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content">
      <!-- content goes here -->

      	<?php include '../includes/map.php'; ?>

      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-4">
      <div class="page-content">
      <!-- content goes here -->

        <?php include '../includes/360.php'; ?>

      </div>
    </section>
  </main>
</div>