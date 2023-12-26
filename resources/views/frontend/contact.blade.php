@extends('frontend.layouts.main')

@section('main-container')

<!-- Contact Section -->
<section id="contact" class="container mt-5">
  <div class="contact-form">
    <h2>Contact Us</h2>

    {{ Form::open([
        'url' => url('storefile'),
        'method' => 'post',
        'id' => 'contact',
        'role' => 'form',
        'class' => 'bv-form',
        'enctype' => 'multipart/form-data'
    ]) }}

    <div class="form-group">
        {{ Form::text('name', '', [
            'id' => 'name',
            'required' => 'required',
            'placeholder' => 'Name',
            'data-bv-field' => 'name'
        ]) }}
        <label for="name">Name:</label>
    </div>

    <div class="form-group">
      {{ Form::select('Country',
      ['1'=> 'india',
        '2'=>'america'],
        "2",
      ['id' => 'name', 'required' => "" , 'class'=>'form' , 'data-bv-field'=>"name"])
       }}
        <label for="name">Select:</label>
    </div>

    <div class="form-group">
        {{ Form::email('email', '', [
            'id' => 'email',
            'required' => 'required',
            'placeholder' => 'Your Email',
            'data-bv-field' => 'email'
        ]) }}
        <label for="email">Email:</label>
    </div>

    <div class="form-group">
        {{ Form::tel('phone', '', [
            'id' => 'phone',
            'required' => 'required',
            'placeholder' => 'Your Phone Number',
            'data-bv-field' => 'phone'
        ]) }}
        <label for="phone">Phone Number:</label>
    </div>

    <div class="form-group">
        {{ Form::text('website', '', [
            'id' => 'website',
            'required' => 'required',
            'placeholder' => 'Your Website Name',
            'data-bv-field' => 'website'
        ]) }}
        <label for="website">Website Name:</label>
    </div>

    <div class="form-group">
        {{ Form::textarea('message', '', [
            'id' => 'message',
            'rows' => '4',
            'required' => 'required',
            'placeholder' => 'Your Message',
            'data-bv-field' => 'message'
        ]) }}
        <label for="message">Message:</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    {{ Form::close() }}
  </div>
</section>

<!-- Bootstrap JS and Popper.js CDN (Make sure to include jQuery before Popper.js) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection