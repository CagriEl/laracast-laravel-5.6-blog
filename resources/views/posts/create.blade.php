@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Yazı Oluştur Bakem</h1>
        <form method="POST" action="/posts">

            @csrf

            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-group">
                <label for="body">İçerik</label>
                <textarea id="body" name="body" class="form-control" ></textarea>
            </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-default">Yayınla</button>
                </div>


            @include ('layouts.errors')

        </form>
   </div>




@endsection