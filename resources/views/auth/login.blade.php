@extends('layouts.app')

@section('content')

<section class="">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-4-widescreen">
           <form class="box" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="field">
              <label for="" class="label">Email</label>
              <div class="control has-icons-left">
                <input type="email" placeholder="e.g. nanigoto.dev@gmail.com" class="input @error('email') is-danger @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus name="email">
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
                @error('email')
                    <div class="notification is-danger is-light m-1">
                      <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
                @error('password')
                    <div class="notification is-danger is-light m-1">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            {{-- <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox">
               Remember me
              </label>
            </div> --}}
            <div class="field">
              <button type="submit" class="button is-primary is-fullwidth">
                {{ __('Login') }}
              </button>
            </div>
            <div class="field">
                @if (Route::has('password.request'))
                    <a class="is-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <hr>
            <div class="field">
              <a class="button is-black is-outlined is-fullwidth" href="{{ url('/guest') }}">
                {{ __('Continue as Guest') }}                
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

