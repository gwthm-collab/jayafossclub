@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <h3>Send us your feedback</h3>
</div>
<div class="col-md-8 col-lg-8">
  <div class="well">
    {!! Form::open(['url' => 'contact/feedback']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::email('email', '',['class' => 'form-control', 'placeholder' => 'Enter E-mail ID'])}}
    </div>
    <div class="form-group">
      {{Form::label('feedback', 'Your Feedback')}}
      {{Form::textarea('feedback', '',['class' => 'form-control', 'placeholder' => 'Feel free to send us feedback', 'rows' => '3'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection

@section('sidebar')
  @parent
  <div class="well">
      <h4>You Requested</h4>
      <?php echo "Hello. This comes for Contact" ?>
  </div>
@endsection