@extends('layout.app')

@section('title', 'Add New Student')

@section('content')

<section class="create-page m-0 p-0 pt-2 px-2 h-100">
  <!-- Here We have the top bar -->  
  <div class="row d-flex flex-row justify-content-between m-0 p-0 pb-2 bord">
    <h5 class="title mb-0 mt-1">Add New Student</h5>
    <a href="/student_table" type="button" class="btn btn-sm">Show Table</a>
  </div>

  <form action="{{ route('Students') }}" method="POST" enctype="multipart/form-data" class="p-0 m-0 mt-3">
    @include('Student.form') 
  </form> 
</section>

<script src="{{ asset('js/jquery3.4.0.js') }}"></script>
  <script>
    var loadFile = function(event) {
      var image = document.getElementById('output');
      image.style = 'display: block';
      image.src = URL.createObjectURL(event.target.files[0]);
      var label = document.getElementById('label')
      label.style = 'display: none !important';
    };

    
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
  </script>  

@endsection