@extends('mail.abstract-mail')

@section('mail-model')

    <div class="container-fluid">
        <div class="row">
            <div class="col mail-body p-3">
                @section('mail-body')
                    
                @show
            </div>
        </div>
        <div class="row">
            <div class="col footer bg-dark">
                <footer>
                    <div class="d-flex justify-content-center py-2">
                        <img src="{{ mix('image/logomark.min.svg') }}" alt="">
                    </div>
                    <h5 class="text-center text-white">@lucafullstackdev</h5>
                </footer>
            </div>
        </div>
    </div>

@endsection