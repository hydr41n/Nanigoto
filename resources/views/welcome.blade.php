<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanigoto なにごと</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
    <style type="text/css">
        body,html{
            height: 100%;
        }
    </style>
  </head>
  <body class="has-background-black-bis">

    <nav class="navbar has-background-black">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <strong class="has-text-grey-lighter">Nanigoto </strong>
          <strong class="has-text-primary">&nbsp;なにごと</strong>
        </a>
        {{-- <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div> --}}
      </div>

    {{--   <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
          
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            
          </div>
        </div>
      </div> --}}
    </nav>
  <section class="section container">

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
                  <div class="content mb-3">
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
         hello
      </div>
    </div>


  </section>
  </body>
</html>