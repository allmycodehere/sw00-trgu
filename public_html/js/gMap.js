/* 
 * js to handle only the google map part
 * whithout the use of any api-key
 * Author : Ansari Abdullah
 * Date : 06/08/2015
 */

function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
        scrollwheel: true,
        draggable: true,
        disableDefaultUI: true,
        center: new google.maps.LatLng(18.4928434, 73.8758694),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);
