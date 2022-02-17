@extends('layout.main')

@section('container')

<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Silahkan Login</h1>
    </div>
    <div class="form-content">
      <form action="/login" method="post">

      	@csrf

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" autofocus required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <button type="submit">Log In</button>
        </div>
      </form>
    </div>
  </div>


@endsection
