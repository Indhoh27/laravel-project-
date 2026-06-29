@extends('layouts.app')

@section('title', 'View User')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Users /</span> Details
</h4>

<div class="row">
  <div class="col-xl-8">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">{{ $user->name }}</h5>
        <div>
          <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">
            <i class="bx bx-edit-alt me-1"></i> Edit
          </a>
          <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
      </div>
      <div class="card-body">
        <dl class="row mb-0">
          <dt class="col-sm-3">ID</dt>
          <dd class="col-sm-9">{{ $user->id }}</dd>

          <dt class="col-sm-3">Name</dt>
          <dd class="col-sm-9">{{ $user->name }}</dd>

          <dt class="col-sm-3">Email</dt>
          <dd class="col-sm-9">{{ $user->email }}</dd>

          <dt class="col-sm-3">Phone</dt>
          <dd class="col-sm-9">{{ $user->phone ?? '—' }}</dd>

          <dt class="col-sm-3">Created</dt>
          <dd class="col-sm-9">{{ $user->created_at->format('M d, Y H:i') }}</dd>

          <dt class="col-sm-3">Updated</dt>
          <dd class="col-sm-9">{{ $user->updated_at->format('M d, Y H:i') }}</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
@endsection
