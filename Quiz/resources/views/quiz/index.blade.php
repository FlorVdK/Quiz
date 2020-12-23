@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($quiz->categories as $category)
        <h1>{{ $category->category_name }}</h1>
        @foreach ($category->questions as $question)
            <p>{{ $question->question }}</p>
        @endforeach
    @endforeach
</div>

@endsection