@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.showcase')
<div class="col-md-8 col-lg-8">
  <div class="jumbotron well">
    <h2>10 Years of Promoting FOSS</h2>
    <p>
      The promotion of Free and Open Source Software club. The journey of JFC comprises with various SFDs, FOSS day, Hackathons and seminars through decades. The members of our club are active participants of ILUG-C.
    </p>
  </div>
</div>
@endsection

@section('sidebar')
  @parent
  <p>hello</p>
@endsection