(function ($, Drupal) {
  Drupal.behaviors.audioSnippets = {
    attach: function (context, settings) {
      $('.field--name-field-audio-time-stamps', context).once('audio-snippets').each(function () {
        const $field = $(this);

        $field.find('a[data-time]').on('click', function (e) {
          e.preventDefault();

          const time = $(this).data('time');
          const audioPlayer = $('audio')[0]; // Adjust if needed for multiple players

          if (audioPlayer && !isNaN(time)) {
            audioPlayer.currentTime = time;
            audioPlayer.play();
          }
        });
      });
    }
  };
})(jQuery, Drupal);

