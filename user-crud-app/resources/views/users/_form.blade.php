@csrf

<div class="mb-3">
  <label class="form-label" for="name">Full Name</label>
  <input
    type="text"
    class="form-control @error('name') is-invalid @enderror"
    id="name"
    name="name"
    value="{{ old('name', $user->name ?? '') }}"
    placeholder="John Doe"
    required
  />
  @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
  <label class="form-label" for="email">Email</label>
  <input
    type="email"
    class="form-control @error('email') is-invalid @enderror"
    id="email"
    name="email"
    value="{{ old('email', $user->email ?? '') }}"
    placeholder="john.doe@example.com"
    required
  />
  @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
  <label class="form-label" for="phone">Phone</label>
  <input
    type="text"
    class="form-control @error('phone') is-invalid @enderror"
    id="phone"
    name="phone"
    value="{{ old('phone', $user->phone ?? '') }}"
    placeholder="658 799 8941"
  />
  @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
  <label class="form-label" for="password">Password</label>
  <input
    type="password"
    class="form-control @error('password') is-invalid @enderror"
    id="password"
    name="password"
    placeholder="********"
    @if (!isset($user)) required @endif
  />
  @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  @isset($user)
    <div class="form-text">Leave blank to keep current password.</div>
  @endisset
</div>

<div class="mb-3">
  <label class="form-label" for="password_confirmation">Confirm Password</label>
  <input
    type="password"
    class="form-control"
    id="password_confirmation"
    name="password_confirmation"
    placeholder="********"
    @if (!isset($user)) required @endif
  />
</div>

<button type="submit" class="btn btn-primary">
  {{ $submitLabel ?? 'Save' }}
</button>
<a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Cancel</a>
