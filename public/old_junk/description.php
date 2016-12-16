<!-- Wide card with share menu button -->
<style>

  .description-card > .mdl-card__title {
    color: #fff;
  }
  .description-card > .mdl-card__menu {
    color: #fff;
  }

  .description-card{
    width: 100%;
    margin: 50px 0;
  }

  .main-description{
    
    width: 100%;
  }

  .left-description{
    margin-left: 20px;
    float: left;
    width: 25%;
  }

  .right-description{
    
    padding:20px;
    float: left;
    width: 60%;
  }

  

</style>

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--7-col" style="margin:auto">
    <div class="description-card mdl-card mdl-shadow--2dp">
      <div class="main-description">
        <h4 class="left-description">Location</h4>
        <p class="right-description">
          Lotus Temple Rd, Shambhu Dayal Bagh, Bahapur, New Delhi, Delhi 110019
        </p>
        <h4 class="left-description">Description</h4>
        <p class="right-description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi posuere, dignissim purus eu,
           semper odio. Suspendisse potenti. Praesent id elit et risus lacinia gravida sed et velit. Sed commodo
            ac mauris a placerat. Duis maximus diam in mi tincidunt, id convallis metus maximus. Donec convallis
             pretium nunc. Praesent ut finibus ex, nec feugiat ligula. Aliquam id maximus turpis
        </p>
        <h4 class="left-description">Type</h4>
        <p class="right-description">
          Monument
        </p>
      </div>
    </div>

      <div>
        <h3>Events</h3>
      </div>

      <div class="description-card mdl-card mdl-shadow--2dp">
        <div class="main-description">
          <div class="left-description mdl-typography--text-center">
           <h2>18</h2> 
           <h4>November</h4>
         </div>
          <p class="right-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi posuere,
            dignissim purus eu, semper odio. Suspendisse potenti.
          </p>


        </div>
         <div class="mdl-card__actions mdl-card--border mdl-typography--text-right">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              More Details
            </a>
          </div>
    </div>


    <!-- facebook comments -->

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="fb-comments main-desrciption" data-href="http://localhost/_postibuff/lotus_temple.php" data-width="auto" data-numposts="5"></div>

  </div>

  

  <div class="mdl-cell mdl-cell--3-col" style="margin:0 auto;">
    <div class="top-reviews">
      <h4>Top Reviews</h4>
    </div>
  </div>
  
</div>
