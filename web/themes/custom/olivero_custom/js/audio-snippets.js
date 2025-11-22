(function ($, Drupal, once) {
  Drupal.behaviors.audioSnippets = {
    attach: function (context, settings) {
      // Select all links inside your audio snippets field, but only once per page load
      const links = once('audio-snippets', '.field--name-field-audio-snippets a[data-time]', context);

      links.forEach(link => {
        link.addEventListener('click', e => {
          e.preventDefault();

          const time = parseFloat(link.dataset.time);
          // Find the audio element in the closest node container
          const audioElement = link.closest('.node').querySelector('.field--name-field-oh-interview-file audio');

          if (audioElement && !isNaN(time)) {
            audioElement.currentTime = time;
            audioElement.play();
          } else {
            console.warn('Audio element not found or invalid time');
          }
        });
      });
    }
  };
})(jQuery, Drupal, once);

