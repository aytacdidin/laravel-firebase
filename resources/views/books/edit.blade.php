@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kitap Duzenle') }}</div>
                <div class="card-body">
                    <div class="row">
                        <a  href="{{route('books.index')}}">Kitap Listesi</a>
                    </div>

                    <form action="{{route('books.update',$book->id) }}" method="POST">
{{--                        guvenlik acisindan token csrf gondrelim--}}

                        @csrf
                        <div class="form-group">
                            <label for="">Kitabin adi</label>
                            <input type="text" name="name" class="form-control" value="{{$book->name}}" placeholder="Kitabin Adi">
                        </div>

                        <div class="form-group">
                            <label for="">Kitabin Fiyati</label>
                            <input type="text" name="price" class="form-control" value="{{$book->price}}" placeholder="Kitabin Fiyati">
                        </div>
                        <button type="submit" class="btn btn-success mt-1">Guncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
