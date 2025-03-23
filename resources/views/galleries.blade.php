@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-24 border-b border-gray-200 pb-10">
        <div class="bg-cover bg-center w-full" style="background-image: url('images/bgpic10.jpg')">
            <h2 class="text-6xl text-white py-20">
                Galleries
            </h2>
        </div>
    </div>
</div>
<!-- Gallery Grid -->
@include('partials.exploregalleries')

@endsection
