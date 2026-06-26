(function ($) {
  $(document).ready(function () {
    $('a[data-time]').on('click', function (e) {
      e.preventDefault();

      var time = $(this).data('time');
      var audioPlayer = $('audio')[0]; // Assuming you have one audio player on the page

      if (audioPlayer) {
        audioPlayer.currentTime = time; // Set the audio player to the time specified
        audioPlayer.play(); // Play the audio from the specified time
      }
    });
  });
})(jQuery);

