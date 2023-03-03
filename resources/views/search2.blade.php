@extends('this')
@section('content')



<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <h1 class="page-title">تمت الإضافة</h1>
              <div>
                  <ol class="breadcrumb">
\                        <li class="breadcrumb-item active" aria-current="page">تمت الإضافة</li>
                  </ol>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- ROW-1 OPEN -->
                               
      

          @if ($results->count() > 0)
          <p>نتائج {{ $results->count() }} للبحث عن "{{ $query }}":</p>
      
          <ul>
              @foreach ($results as $result)
              <div class="info-frame">
                      <h2>{{ $result->name }}</h2>
                      <p>{{ $result->description }}</p>
                     
                     
                      </div>
                      <div class="gallery-frame">
                        @foreach (explode(',', $result->filenames) as $filename)
                          @php
                            $filename = str_replace(['[', ']','"'], '', $filename);
                          @endphp
                          <img src="{{ asset('files/' . $filename) }}" class="gallery-img">
                        @endforeach
                        @if (count(explode(',', $result->filenames)) === 0)
                          <p>لا يوجد صور</p>
                        @endif
                      </div>
                
              @endforeach
          </ul>
      
      @else
          <p>No results found for "{{ $query }}".</p>
      @endif
          
          
          















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