

@extends('auth.app')

@section('title','Login')

@section('content')
    
<section class="login-register container col-6 ">
  <div class="tab-content pt-2" id="login_register_tab_content">
    <div class="tab-pane fade show active mt-5" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
      <div class="login-form card card-body mt-5 p-4">
        <h2 class="text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}" name="login-form" class="needs-validation" novalidate>
          @csrf
          <!-- Email -->
          <div class="form-floating mb-3">
            <input 
              type="email" 
              class="form-control form-control_gray" 
              id="email" 
              name="email" 
              required 
              autocomplete="email" 
              autofocus
            >
            <label for="email">Email address *</label>
          </div>

          <!-- Password -->
          <div class="form-floating mb-3">
            <input 
              type="password" 
              class="form-control form-control_gray" 
              id="password" 
              name="password" 
              required 
              autocomplete="current-password"
            >
            <label for="password">Password *</label>
          </div>

          <button class="btn btn-primary text-uppercase " type="submit">
            Log In
          </button>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection












