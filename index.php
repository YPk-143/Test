<!DOCTYPE html> 
<html lang="en"> 
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 , user-scalable=no">
    <meta name="viewport" content="width=device-width" />
    <!-- SEO-->
    <meta name="author" content="T20HD Embed" />
    <meta name="designer" content="T20 " />
    <meta name="description" content="Watch Live Streaming T20. No signup required">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
     <link rel="stylesheet" href="/dist/wmlogo.css" />
    <script src="https://kit.fontawesome.com/bf2610f0a2.js" crossorigin="anonymous"></script>
    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/gh/halfmoonui/halfmoon@1.0.4/css/halfmoon.min.css" rel="stylesheet" />
    <title>T20HD - Watch Live T20 Free on T20HD </title>

<script>
document.addEventListener("DOMContentLoaded",()=> {
  const e = document.querySelector("video"),
    n = e.getElementsByTagName("source")[0].src,
    o = {};
  if(Hls.isSupported()) {
    var config = {
      maxMaxBufferLength: 100,
    };
    const t = new Hls(config);
    t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
      const s = t.levels.map(e => e.height);
      o.quality = {
        default: s[0],
        options: s,
        forced: !0,
        onChange: e => (function(e) {
          window.hls.levels.forEach((n, o) => {
            n.height === e && (window.hls.currentLevel = o)
          })
        })(e)
      };
      new Plyr(e, o)
    }), t.attachMedia(e), window.hls = t
  } else {
    new Plyr(e, o)
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>
</head>
<body class="dark-mode with-custom-scrollbars with-custom-css-scrollbars">
   
<video id="player" controls preload="metadata" poster="https://img10.hotstar.com/image/upload/f_auto,q_90,w_3840/sources/r1/cms/prod/7471/1637471-h-d28a10f8c2ea" class="plyr">
<source src="https://5hls21dec.bunycdn.com/live/index5.mpd" type="application/x-mpegURL"/>
</video>
<script>      document.addEventListener('DOMContentLoaded', () => {          const player = Plyr.setup('.js-player');      });  </script>


<script>      document.addEventListener('DOMContentLoaded', () => {          const player = Plyr.setup('.js-player');      });  </script>






</body>
</html>