@extends('layouts.basic')
@section('content')
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
<body>
  <br>
  <div>
      <table class='table table-bordered'>
        <th>Why Register?</th>
        <tr><td><p>Get Latest Property News and Updates</p></td></tr>
        <tr><td><p>Get Market informtion,reports and Trends</p></td></tr>
        <tr><td><p>Get Market infy Alerts</p></td></tr>
        <tr><td><p>Advertise your property and get it listed for free</p></td></tr>
        <tr><td><p>Easy Buying, Selling and Renting</p></td></tr>
      </table>
  </div>
  <button class='btn btn-primary' onclick="location.href='/properties'">Show my Properties</button>
  <button type="submit" class='btn btn-default float-right' onclick="location.href='/search'">Search Properties</button>
  <footer>©Copyright 2019</footer>
  @endsection
