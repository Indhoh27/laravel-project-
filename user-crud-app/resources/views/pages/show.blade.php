@extends('layouts.app')

@section('title', $meta['title'])

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">{{ $meta['breadcrumb'] }}</span>
</h4>

<div class="row">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3">
          <span class="avatar avatar-md me-3">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="bx {{ $meta['icon'] }} bx-sm"></i>
            </span>
          </span>
          <div>
            <h5 class="mb-0">{{ $meta['title'] }}</h5>
            <small class="text-muted">Placeholder page</small>
          </div>
        </div>
        <p class="mb-4">{{ $meta['description'] }}</p>
        <div class="alert alert-info mb-0" role="alert">
          This is a demo page for sidebar navigation. Content can be added here later.
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-3">Quick links</h6>
        <ul class="list-unstyled mb-0">
          <li class="mb-2"><a href="{{ route('users.index') }}"><i class="bx bx-user me-1"></i> Users</a></li>
          <li class="mb-2"><a href="{{ route('pages.dashboard') }}"><i class="bx bx-home-circle me-1"></i> Dashboard</a></li>
          <li><a href="{{ route('pages.show', 'analytics') }}"><i class="bx bx-bar-chart-alt-2 me-1"></i> Analytics</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
