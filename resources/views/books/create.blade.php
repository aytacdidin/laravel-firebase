@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kitap Ekle') }}</div>
                <div class="card-body">
                    <h1>Kitap Ekle</h1>
                    <form action="{{route('books.store')}}" method="POST">
{{--                        guvenlik acisindan token csrf gondrelim--}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="">Kitabin adi</label>
                            <input type="text" name="name" class="form-control" placeholder="Kitabin Adi">
                        </div>

                        <div class="form-group">
                            <label for="">Kitabin Fiyati</label>
                            <input type="text" name="price" class="form-control" placeholder="Kitabin Fiyati">
                        </div>
                        <button type="submit" class="btn btn-success mt-1">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
