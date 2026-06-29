@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Users /</span> Edit
</h4>

<div class="row">
  <div class="col-xl-8">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit User</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('users.update', $user) }}" method="POST">
          @method('PUT')
          @include('users._form', ['submitLabel' => 'Update User'])
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
