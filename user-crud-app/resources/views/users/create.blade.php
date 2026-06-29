@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Users /</span> Create
</h4>

<div class="row">
  <div class="col-xl-8">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">New User</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
          @include('users._form', ['submitLabel' => 'Create User'])
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
