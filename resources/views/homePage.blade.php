@extends('layouts.app')

@section('pageContent')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-7">
                <form class="row g-0" action="/addPaste" method="post">
                    @csrf
                    <textarea class="mb-2 form-control bg-light border border-2 rounded border-secondary text-nowrap code-section" rows="25"
                    name="code" placeholder="Paste your code here"></textarea>
                    <div class="col-sm-8 pe-0 pe-sm-4">
                        <input type="text" class="py-2 form-control bg-light border border-2 rounded border-secondary code-section" name="title" placeholder="Your code title">
                    </div>
                    <div class="col-sm-4 my-3 my-sm-0 text-end">
                        <button type="submit" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill" style="width: 100%;">Save it</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="container overflow-auto px-0 px-lg-2 mt-4 mt-lg-0" style="max-height: 500px;">
                    @foreach($data as $item)
                        <div class="card mb-2">
                            <a href="/paste{{ $item->id }}" class="code-title">
                                <h5 class="card-header bg-light text-uppercase fs-6">{{ $item->title }}</h5>
                            </a>
                            <div class="card-body">
                                <p class="card-text text-truncate">{{ $item->code }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
