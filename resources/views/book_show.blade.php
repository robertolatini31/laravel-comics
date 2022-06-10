@extends('layouts.app')

@section('content')

@include('partials.jumbotron')

<main>

   @include('partials.single_book_img_section')

   @include('partials.single_book_description_section')

   @include('partials.single_book_section_specs')

   <div class="single_book_section_digital">
       <div class="container">
           <div class="row row-cols-4">
               <div class="col d-flex justify-content-between">
                    <h6 class="text-uppercase">digital comics</h6>
                    <img src="{{asset('img/cta-icons.png')}}" alt="">
               </div>
           </div>
       </div>
   </div>

</main>

@include('partials.menu_section')

@endsection