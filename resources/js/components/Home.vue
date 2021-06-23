<template>
    <div>
        <div id="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
            <img src="images/ssc_packs.jpg" alt="Packstore" style="width:100%;">
            <div class="carousel-caption">
              <h3>Packstore</h3>
              <p>Choose a pack to get players!</p>
            </div>
          </div>
    
          <div class="item">
            <img src="images/ssc_squad.jpg" alt="Squad" style="width:100%;">
            <div class="carousel-caption">
              <h3>Squad</h3>
              <p>Build the team of your dreams!</p>
            </div>
          </div>
        
          <div class="item">
            <img src="images/ssc_match.jpg" alt="Match" style="width:100%;">
            <div class="carousel-caption">
              <h3>Match</h3>
              <p>Take on other squad in a match!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</template>
<script>
export default {

}
</script>
