@extends('layouts.app')

@section('content')

  <section class="hero section container is-fullheight">

    <div class="columns is-gapless  is-vcentered">
        {{-- feed --}}
      <div class="column is-8">
          <div class="mb-0">
                {{-- <div class="media-left">
                  <figure class="image is-64x64">
                    <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                  </figure>
                </div> --}}
                <div class="content">
                  <div class="content mb-e3">
                    <p class="has-text-grey-lighter">
                        <strong class="title is-5 has-text-primary">How to Use Axios?</strong>
                        <small class="title is-6 has-text-grey">@johnsmith <i>31m</i></small>
                      <br>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa...
                    </p>
                  </div>
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
      <div class="column has-background-black">
         <h1 class="title has-text-primary">@guest You are browsing as Guest @else{{ Auth::user()->name }}@endguest</h1>
      </div>
    </div>

@endsection