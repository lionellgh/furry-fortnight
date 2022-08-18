{{--
  ./resources/views/pages/fluxTwitter.blade.php
--}}

<!-- Latest News FB -->
<div class="col-sm-6 latest-news">
  <h2>Lastest Tweets</h2>

@php
    require "../vendor/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
    $twitter = new TwitterOAuth(
      "BwoY6343ZxOwQVlbZ1JKyXSte",
      "Oqfbj6v6DDKzTQPGuwkccn2YE3Tg5vOJzy8sbjJSU8krITOWL1",
      "1184370139086708736-d1CNZ8J32N7TOtOECIfyd9ZCivLMBg",
      "PClOIkpIPbvF7l3vAm94ahUSUO8qRc75uUnWAJaPyy7AR"
    );
    $tweets = $twitter->get('statuses/user_timeline', [
      'screen_name' => 'Sardoche_Lol',
      'exclude_replies' => true,
      'count' => 50
    ]);

@endphp


@foreach(array_slice( $tweets, 0, 3) as $tweet)
  <div class="row">
    <div class="col-sm-12">
      <div class="caption"><a href="#">{{ $tweet->user->name }}</a></div>
      <div class="date">{{ \Carbon\Carbon::parse($tweet->created_at)->format('j F, Y - H:i') }}</div>
      <div class="intro">{{ $tweet->text }}
        <br/><a href="{{ 'http://twitter.com/'. $tweet->user->screen_name }}">Read more...</a></div>
    </div>
  </div>
@endforeach


</div>
<!-- End Featured News -->
