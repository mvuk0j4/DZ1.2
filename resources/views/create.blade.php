<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Customers Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customer.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Customer Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">Customer country:</label>
              <input type="text" class="form-control" name="country"/>
          </div>

          <div class="form-group">
              <label for="cases">Number:</label>
              <input type="text" class="form-control" name="Number"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Customer</button>
      </form>
  </div>
</div>
@endsection
