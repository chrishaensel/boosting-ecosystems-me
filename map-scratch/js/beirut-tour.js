
mapboxgl.accessToken = 'pk.eyJ1IjoibWlyZWlsbGVyYWFkIiwiYSI6ImZSQURPM3cifQ.fivqJpti-Um8m38RMPWzkQ';
var map = new mapboxgl.Map({
    container: 'map-beirut',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [35.5018, 33.89],
    maxZoom: 16,
    minZoom: 9,
    zoom: 9.68
});

var title = document.getElementById('location-title');
var description = document.getElementById('location-description');
var image = document.getElementById('location-image');

var locations = [{
    "id": "2",
    "title": "Beirut",
    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas diam est, id dignissim lectus fringilla ut. Sed vulputate erat quis ligula malesuada efficitur. Aenean purus erat, sollicitudin nec sem ac, pellentesque laoreet velit. Pellentesque at mi tempus ante ornare rhoncus ac in libero.",
    "image" : '<img src="http://placehold.it/350x150/4A148C/ffffff">',
    "camera": {
        center: [35.482016, 33.899875],
        zoom: 12,
        pitch: 50
    }
}, {
    "id": "3",
    "title": "Hamra",
    "description": "Suspendisse posuere purus eu finibus hendrerit. Sed odio ligula, imperdiet ac rutrum sit amet, molestie et massa. Ut iaculis volutpat metus eget venenatis. Praesent vestibulum eu arcu nec consequat.",
     "image" : "<img src=http://placehold.it/350x150/ff00ff/ffffff'>",
    "camera": {
        center: [35.481458, 33.897009 ],
        bearing: -8.9,
        zoom: 14
    }
}, {
    "id": "1",
    "title": "Achrafiyeh",
    "description": "Nunc nisi ex, laoreet in ultricies non, tincidunt sit amet velit. Donec faucibus, turpis hendrerit blandit fringilla, enim dolor porta felis, eget tincidunt dui erat ut libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse tincidunt ligula ante, quis pulvinar arcu viverra et.",
     "image" : "<img src='http://placehold.it/350x150/ff00ff/ffffff'>",
    "camera": {
        center: [35.521941, 33.887256],
        bearing: 25.3,
        zoom: 14
    }
}, {
    "id": "4",
    "title": "Badaro",
    "description": "Duis volutpat purus sit amet elit tincidunt, nec posuere ipsum cursus. Sed erat libero, ultrices sed dui vitae, viverra iaculis tellus. Suspendisse luctus eu turpis vel pulvinar. Mauris tristique gravida sem. Nulla tempus tincidunt dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam at est tempor, imperdiet ligula sed, maximus lorem.",
     "image" : "<img src='http://placehold.it/350x150/ff00ff/ffffff'>",
    "camera": {
        center: [ 35.516264, 33.874386],
        bearing: 36,
        zoom: 14
    }
}, {
    "id": "5",
    "title": "Mkalles",
    "description": "Maecenas non interdum velit. Sed molestie libero et auctor porta. Etiam velit justo, gravida at tortor eu, viverra interdum tellus. Mauris ac posuere ligula, non euismod tortor. ",
     "image" : "<img src='http://placehold.it/350x150/ff00ff/ffffff'>",
    "camera": {
        center: [35.542626, 33.868733],
        bearing: 28.4,
        zoom: 15
    }
}, {
    "title": "Beirut",
    "description": "In magna ex, eleifend eget arcu et, sagittis feugiat diam. Morbi elementum dui in nulla ornare porta. Aenean volutpat, leo id suscipit consectetur, nulla risus euismod dui, vel porttitor orci risus id metus. Quisque vehicula gravida scelerisque. Ut cursus vitae tortor vel finibus.",
    "camera": {
        center: [35.562662, 33.881208],
        zoom: 12,
        pitch: 0
    }
}];

 

function playback(index) {

    //title.textContent = locations[index].title;
    description.textContent = locations[index].description;
    image.textContent =  (locations[index].image);
 
    // Animate the map position based on camera properties
    map.flyTo(locations[index].camera);

    // map.once('moveend', function() {
    //     // Duration the slide is on screen after interaction
    //     window.setTimeout(function() {
    //         // Increment index
    //         index = (index + 1 === locations.length) ? 0 : index + 1;
    //         playback(index);
    //     }, 4000); // After callback, show the location for 3 seconds.
    // });
}

// Display the first title/description first
title.textContent = locations[0].title;
description.textContent = locations[0].description;
image.textContent = locations[0].image;

$("#next-map").click(function() {

      // Start the playbacks
     indx =  parseInt( $("#nav-city").attr("data-index"))  + 1;
    $("#nav-city").attr("data-index" , indx);
     console.log(indx);
     playback(indx);



});

map.on('load', function() {

     
    map.addSource("citydata", {
        "type": "vector",
        "url": "mapbox://mapbox.8ibmsn6u"
    });


     // Add a new source from our GeoJSON data and set the
      playback(3);

    // Create five layers:
    // One for unclustered points, three for each cluster category,
    
  

  



});