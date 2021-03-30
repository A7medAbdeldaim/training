@extends('layouts.app')
@section('title', 'Search')

@section('content')

    <section id="category" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Category</h2>
                <p>{{ ($category->name ?? '') }}</p>
            </div>

            <div class="row content">
                @foreach($data as $row)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                        @if ($type == 'car')
                            <a href="{{ route('cars.show', $row->id) }}">
                        @else
                            <a href="{{ route('bikes.show', $row->id) }}">
                        @endif
                            <div class="portfolio-img">
                                <img src="{{ $row->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $row->name }}</h4>
                                <p>{{ \Illuminate\Support\Str::limit($row->description, 50) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
