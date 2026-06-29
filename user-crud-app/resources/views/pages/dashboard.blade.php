@extends('layouts.app')

@section('title', 'Dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Welcome back! 🎉</h5>
            <p class="mb-4">
              You have <span class="fw-bold">{{ $totalUsers }}</span> registered users.
              @if ($newUsersThisMonth > 0)
                <span class="fw-bold">{{ $newUsersThisMonth }}</span> joined this month.
              @endif
            </p>
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary">Add New User</a>
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary ms-2">View Users</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
              height="140"
              alt="Dashboard"
            />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="Users" class="rounded" />
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Total Users</span>
            <h3 class="card-title mb-2">{{ number_format($totalUsers) }}</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Active</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="New Users" class="rounded" />
              </div>
            </div>
            <span>New Users</span>
            <h3 class="card-title text-nowrap mb-1">{{ number_format($newUsersThisMonth) }}</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> This month</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                  {{ now()->year }}
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0);">{{ now()->year - 1 }}</a>
                  <a class="dropdown-item" href="javascript:void(0);">{{ now()->year - 2 }}</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>
          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>{{ now()->year }}</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>{{ now()->year - 1 }}</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="Payments" class="rounded" />
              </div>
            </div>
            <span class="d-block mb-1">Payments</span>
            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{ asset('assets/img/icons/unicons/cc-primary.png') }}" alt="Transactions" class="rounded" />
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Transactions</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
          </div>
        </div>
      </div>
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Profile Report</h5>
                  <span class="badge bg-label-warning rounded-pill">Year {{ now()->year }}</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">User Statistics</h5>
          <small class="text-muted">{{ $totalUsers }} total registered</small>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">{{ number_format($totalUsers) }}</h2>
            <span>Total Users</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-user"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Registered</h6>
                <small class="text-muted">All time users</small>
              </div>
              <div class="user-progress"><small class="fw-semibold">{{ $totalUsers }}</small></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class="bx bx-user-plus"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">This Month</h6>
                <small class="text-muted">New sign ups</small>
              </div>
              <div class="user-progress"><small class="fw-semibold">{{ $newUsersThisMonth }}</small></div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class="bx bx-envelope"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Verified</h6>
                <small class="text-muted">Email confirmed</small>
              </div>
              <div class="user-progress"><small class="fw-semibold">{{ $totalUsers }}</small></div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-group"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Active</h6>
                <small class="text-muted">Currently online</small>
              </div>
              <div class="user-progress"><small class="fw-semibold">{{ max($totalUsers - 1, 0) }}</small></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-selected="true">
              Income
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{ asset('assets/img/icons/unicons/wallet.png') }}" alt="Wallet" />
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold"><i class="bx bx-chevron-up"></i> 42.9%</small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0"><div id="expensesOfWeek"></div></div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Recent Users</h5>
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          @forelse ($recentUsers as $index => $user)
            <li class="d-flex {{ ! $loop->last ? 'mb-4 pb-1' : '' }}">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{ asset('assets/img/avatars/' . (($index % 5) + 1) . '.png') }}" alt="{{ $user->name }}" class="rounded" />
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">{{ $user->name }}</h6>
                  <small class="text-muted">{{ $user->email }}</small>
                </div>
                <div class="user-progress">
                  <small class="fw-semibold">{{ $user->created_at->diffForHumans() }}</small>
                </div>
              </div>
            </li>
          @empty
            <li class="text-center text-muted py-3">No users yet. <a href="{{ route('users.create') }}">Add one</a></li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endpush
