@extends('layouts.app')

@section('pageContent')
    <div class="container my-5">
        <form class="row g-0">
            @csrf
            <textarea class="mb-2 form-control bg-light border border-2 rounded border-secondary text-nowrap code-section" rows="25"
            name="code">{{ $data[0]->code }}</textarea>
            <div class="col-6">
                <input type="text" class="py-2 form-control bg-light border border-2 rounded border-secondary code-section" name="title" value="{{ $data[0]->title }}">
            </div>
            <div class="col-6 text-end">
                <button type="submit" formaction="/update/paste{{ $data[0]->id }}" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill">Save changes</button>
                <button type="submit" formaction="/delete/paste{{ $data[0]->id }}" class="py-1 px-3 mx-3 btn btn-light border border-2 rounded border-secondary rounded-pill">Delete paste</button>
                <a href="/" type="submit" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill">Go back</a>
            </div>
        </form>
    </div>
@endsection
