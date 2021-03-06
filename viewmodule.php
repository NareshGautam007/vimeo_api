<html>
<head>
  <title>{page_title}</title>
</head>
<body>

  <iframe src="https://player.vimeo.com/video/{video_id}" width="{video_width}" height="{video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

  <script src="{url}"></script>
  <script>
    var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);

    player.on('play', function() {
      console.log('Played the video');
    });

    player.getVideoTitle().then(function(title) {
      console.log('title:', title);
    });
  </script>

</body>
</html>