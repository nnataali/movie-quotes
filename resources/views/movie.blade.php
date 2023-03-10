@extends('components.layout')
@section('slot')
  <x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en', $movie->id]) }}"
    georgian="{{ route(Route::currentRouteName(),[ 'ka', $movie->id])}}"/>

   <section>
       <div class="flex flex-col justify-center items-center">
           <div class="my-20 w-3xl">
               <h1 class="text-5xl text-white ml-3">{{ $movie->title }}</h1>
 
               @foreach ($movie->quote as $quote )
               <div class="mt-20 border-solid border-black border-1px rounded-xl">
                    @if (substr($quote->image, 0, 5) == 'https')
                         <img src="{{asset($quote->image )}}"  alt="movie-image" class="rounded-t-lg h-96 w-700px object-cover" >
                    @else
                        <img src="{{asset('storage/' . $quote->image) }}"  alt="movie-image" class="rounded-t-lg h-96 w-700px object-cover" >
                    @endif
                   <div class="bg-white h-28 -mt-5 rounded-b-lg">
                       <h2 class=" text-3xl py-10 pl-8 relative">"{{ $quote->quote }}"</h2>
                   </div>
               </div>
 
               @endforeach
           </div>
      
       </div>
   </section>
 
@endsection
