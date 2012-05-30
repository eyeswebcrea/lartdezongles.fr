/**
 * @author john
 */
  $(function(){
    $("div#conteneur-bandeau div.slides").slides({
    	play: 10000,
    	slideSpeed: 1000,
    	crossfade: true
    });
    
    $("div#conteneur-bas div.slides").slides();
  });