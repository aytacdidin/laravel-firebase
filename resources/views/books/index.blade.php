@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kitaplar') }}</div>
                <div class="card-body">

                    <a href="{{route('books.create')}}" class="btn btn-info text-left">Ekle</a>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kitabin ismi</th>
                            <th scope="col">Kitabin Fiyati</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <th scope="row">{{$book->id}}</th>
                                <td>{{$book->name}}</td>
                                <td>{{$book->price}} TL</td>
                                <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-info">Duzenle</a></td>
                                <td><a href="{{route('books.delete',$book->id)}}" class="btn btn-danger">Sil</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
