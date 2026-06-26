(function ($, Drupal) {
  Drupal.behaviors.mapZoom = {
    attach: function (context, settings) {
      const params = new URLSearchParams(window.location.search);
      const tid = params.get('tid');
      if (!tid) return;

      // Wait for Leaflet to initialize
      setTimeout(function () {
        const mapid = Object.keys(settings.leaflet)[0];
        const map = settings.leaflet[mapid].lMap;

        // Find the marker with matching tid
        map.eachLayer(function (layer) {
          if (layer.getPopup) {
            const popup = layer.getPopup();
            if (popup) {
              const content = popup.getContent();
              if (content && content.includes('marker-tid') && $(content).find('.marker-tid').text() == tid) {
                map.setView(layer.getLatLng(), 17);
              }
            }
          }
        });
      }, 500);
    }
  };
})(jQuery, Drupal);
