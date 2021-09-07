@extends('start')

@section('content')
    <section class="main-slider">
        <div class="d-flex p-2">
        </div>
    </section>

        <div class="row">
            <div class="col-6 faq-box main-boxes">
                <a class="nav-link" href="{{ URL::to('faq') }}">FAQ</a>
            </div>
            <div class="col-6 statistics-box main-boxes">
                <a class="nav-link">STATISTICS</a>
            </div>

            <div class="col-6 resources-box main-boxes">
                <a class="nav-link">RESOURCES</a>
            </div>
            <div class="col-6 tools-box main-boxes">
                <a class="nav-link">TOOLS</a>
            </div>
        </div>
@endsection('content')
