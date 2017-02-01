<head>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
</head>
<h1 style='text-align:center;'>Results</h1>
<?php
if (isset($_GET['title'])){
  $title = $_GET['title'];
  echo "<p style='text-align:center;'>You searched for: ".$title.".</p>";
} else {
    $title = '';
}
?>
<p style='text-align:center;'>Your query returned <?=count($dvds)?> results.</br>
<a href='/dvds/search/' style='text-align:center;'>Return to search</a></p>
<div class='container'>
  <table class='table table-bordered'>
    <tr>
      <th>Title</th>
      <th>Rating</th>
      <th>Genre</th>
    </tr>
    @foreach ($dvds as $dvd)
    <tr>
      <td>{{$dvd->title}}</td>
      <td>{{$dvd->rating_name}}</td>
      <td>{{$dvd->genre_name}}</td>
    </tr>
    @endforeach
  </table>
</div>
