@extends('layouts.app')

@section('pageContent')
    <div class="container my-5">
        <form>
            @csrf
            <textarea class="mb-2 form-control bg-light border border-2 rounded border-secondary text-nowrap code-section" rows="25"
            name="code">{{ $data[0]->code }}</textarea>
            <div class="row g-1">
                <div class="col-lg-6 pe-lg-4 pe-0">
                    <input type="text" class="py-2 form-control bg-light border border-2 rounded border-secondary code-section" name="title" value="{{ $data[0]->title }}">
                </div>
                <div class="col-lg-6">
                    <div class="row my-3 my-lg-0 text-end">
                        <div class="col-sm-4 px-sm-2 px-2">
                            <button type="submit" formaction="/paste/{{ $data[0]->id }}/update" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill" style="width: 100%;">Save changes</button>
                        </div>
                        <div class="col-sm-4 px-sm-3 px-2 my-3 my-sm-0">
                            <button type="submit" formaction="/paste/{{ $data[0]->id }}/delete" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill" style="width: 100%;">Delete paste</button>
                        </div>
                        <div class="col-sm-4 px-sm-2 px-2">
                            <a href="/" type="submit" class="py-1 px-3 btn btn-light border border-2 rounded border-secondary rounded-pill" style="width: 100%;">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
