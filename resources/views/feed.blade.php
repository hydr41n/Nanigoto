@extends('layouts.app')

@section('content')

  <section class="hero section container is-fullheight">

    <div class="columns">
       
      <div class="column is-8">
         {{-- feed --}}
          <div class="column has-background-black my-1">
                <nav class="level is-mobile mb-2">
                  <div class="level-left">
                      {{-- count --}}
                    <a class="level-item has-text-grey" aria-label="">
                      <span class="icon is-small">
                        <i class="fas fa-eye" aria-hidden="true"></i>
                      </span>
                      <strong class="has-text-grey">&nbsp;422</strong>
                    </a>
                    <a class="level-item has-text-grey" aria-label="">
                      <span class="icon is-small">
                        <i class="fas fa-comment-alt" aria-hidden="true"></i>
                      </span>
                      <strong class="has-text-grey">&nbsp;643</strong>
                    </a>
                    <a class="level-item has-text-grey" aria-label="">
                      <span class="icon is-small">
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </span>
                      <strong class="has-text-grey">&nbsp;702</strong>
                    </a>
                  </div>
                </nav>
                <div class="content">
                  <div class="content mb-e3">
                    <p class="has-text-grey-lighter">
                        <strong class="title is-5 has-text-primary">How to Use Axios?</strong>
                        <small class="title is-6 has-text-grey">@johnsmith <i>31m</i></small>
                      <br>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa...
                    </p>
                  </div>
                  <nav class="level is-mobile">
                    <div class="level-left">
                        {{-- tags --}}
                      <a class="level-item tags" aria-label="reply">
                       <span class="tag is-black has-text-primary">#Javascript</span>
                      </a>
                    </div>
                  </nav>
                </div>
          </div>
        {{-- end feed --}}
      </div>
      
      <div class="column px-4 py-4">
         <div class="column is-12  has-background-black box">

           {{-- <span class="icon is-large">
              <img src="{{asset('images/favicon.ico')}}" alt="made with bulma" height="22" width="22">
           </span>
           <span class="icon is-large">
            <i class="fab fa-laravel title is-5 has-text-warning-dark" aria-hidden="true"></i>
           </span>
           <span class="icon is-large title is-5 has-text-primary">
              <i class="fab fa-vuejs" aria-hidden="true"></i>
           </span>
           <span class="icon is-large">
              <i class="fas fa-equals" aria-hidden="true"></i>
           </span>
           <span class="icon is-large title is-5 has-text-danger-dark">
              <i class="fas fa-heart" aria-hidden="true"></i>
           </span> --}}
           
           {{-- <h1 class="title has-text-primary">@guest You are browsing as Guest @else{{ Auth::user()->name }}@endguest</h1> --}}

             <div class="field">
              <div class="control">
                <p class="control has-icons-left">
                  <input class="input has-background-black-bis" type="text" placeholder="Search something here">
                  <span class="icon is-left has-text-primary-dark">
                    <i class="fas fa-search"></i>
                  </span>
                </p>
              </div>
            </div>
            <hr class="has-background-black-bis">
            <div class="field">
              <a class="button is-primary is-fullwidth" href="{{ url('/guest') }}">
                {{ __('Ask Now') }}                
              </a>
            </div>
         </div>
      </div>
    </div>

@endsection