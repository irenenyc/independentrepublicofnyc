(function ($, Drupal, once) {
  Drupal.behaviors.audioSnippets = {
    attach: function (context, settings) {
      console.log("JS behavior attached");

      // Use 'once' to ensure event listeners attach only once
      const elements = once('audio-snippets', '.field--name-field-audio-snippets', context);

      elements.forEach(element => {
        const links = element.querySelectorAll('a[data-time]');
        links.forEach(link => {
          link.addEventListener('click', e => {
            e.preventDefault();

            const time = parseFloat(link.dataset.time);
            console.log('Clicked time:', time);

            // Find the audio element in the closest node container
            const audioElement = element.closest('.node').querySelector('.field--name-field-oh-interview-file audio');

            if (audioElement && !isNaN(time)) {
              audioElement.currentTime = time;
              audioElement.play();
            }
            else {
              console.warn('Audio element not found or invalid time');
            }
          });
        });
      });
    }
  };
})(jQuery, Drupal, once);

