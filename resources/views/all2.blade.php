@extends('thisuser')
@section('content')



<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <h1 class="page-title">جميع الإضافات</h1>
              <div>
                  <ol class="breadcrumb">
\                        <li class="breadcrumb-item active" aria-current="page">جميع الإضافات </li>
                  </ol>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- ROW-1 OPEN -->
                               
      
          @foreach($ccps as $ccp)

          <div class="info-frame">
              <h2>الإسم: {{ $ccp->name }}</h2>
              <h5> السبب: {{ $ccp->description }}</h5>
              <h4>CCP : {{ $ccp->ccps }}</h4>
          </div>
              <div class="gallery-frame">
                @foreach (explode(',', $ccp->filenames) as $filename)
                  @php
                    $filename = str_replace(['[', ']','"'], '', $filename);
                  @endphp
                  <img src="{{ asset('files/' . $filename) }}" class="gallery-img">
                @endforeach
                @if (count(explode(',', $ccp->filenames)) === 0)
                  <p>لا يوجد صور</p>
                @endif
              
            </div>
            @endforeach

            @foreach($stors as $stor)

            <div class="info-frame">
                <h2>الإسم: {{ $stor->name }}</h2>
                <h5> السبب: {{ $stor->description }}</h5>
                <h4>رقم الهاتف: {{ $stor->number }}</h4>
            </div>
                <div class="gallery-frame">
                  @foreach (explode(',', $stor->filenames) as $filename)
                    @php
                      $filename = str_replace(['[', ']','"'], '', $filename);
                    @endphp
                    <img src="{{ asset('files/' . $filename) }}" class="gallery-img">
                  @endforeach
                  @if (count(explode(',', $stor->filenames)) === 0)
                    <p>لا يوجد صور</p>
                  @endif
                
              </div>
              @endforeach
          















                              </div>
                            </div>

















@endsection
@section('js')
<script>
  const editButtons = document.querySelectorAll('.edit-button');

editButtons.forEach(button => {
  button.addEventListener('click', () => {
    // add your edit functionality here
  });
});

const galleryImgs = document.querySelectorAll('.gallery-img');

galleryImgs.forEach(img => {
  const url = img.getAttribute('src');

  img.addEventListener('click', () => {
    window.open(url);
  });
});



</script>
  
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/home3.css') }}"></head>

@endsection