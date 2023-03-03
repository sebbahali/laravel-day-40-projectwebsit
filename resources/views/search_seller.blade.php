@extends('this')
@section('content')




<main>
    <p>يمكنك البحث سواء بإستعمال رقم الهاتف أو إسم الكامل </p>

    <div class="search-container">
        <form action="{{route('search')}}" method="GET">
          <input type="text" placeholder="ابحث في قاعدة البيانات ...." name="search">
          <button type="submit" class="search-button">البحث</button>
        </form>
      </div>
  </main>
  
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>













@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/home4.css') }}"></head>

@endsection
@section('js')
<script>

    const searchContainer = document.querySelector('.search-container');
    searchContainer.classList.add('animated');
    
    
    </script>
@endsection