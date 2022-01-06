@extends('blogg.layout')
@section('content')
	<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('assets/images/Capture.png') }}" class="d-block" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('assets/images/Capture1.png') }}" class="d-block second" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/Capture2.png') }}" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the  collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
      <a href="master" class="btn btn-primary my-2">Main call to action</a>
      <a href="master" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
             <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    <div class="ratio ratio-16x9">
      <video src="{{ asset('assets/videos/cover.mp4') }}" title="YouTube video" 
      autoplay muted controls allowfullscreen loop></video>
    </div>
    <!--feedback form--->
    <footer class="text-muted">
      <div class="container">
        <form action="feedback" method="post">
          @csrf
        <div class="row">
          <div class="col-25">
            <label for="name">Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Your name..">
          </div>
          @error('name')
            <div class="alert-warning text-center" style="margin-left: 295px; width: 50%;">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Country</label>
          </div>
          <div class="col-75">
            <select id="country" name="country"> 
                <option value="nepal">Nepal</option>
            </select>
          </div>
          @error('country')
            <div class="alert-warning text-center" style="margin-left: 295px; width: 50%;">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Feedback</label>
          </div>
          <div class="col-75">
            <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>
          </div>
          @error('feedback')
            <div class="alert-warning text-center" style="margin-left: 295px; width: 50%;">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </footer>
@endsection