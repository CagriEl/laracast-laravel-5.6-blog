@extends('layouts.master')

@section('content')


    <div class="col-sm-8">

        <h1>Register</h1>

        <form method="POST" action="/register">

            {{csrf_field()}}

            <div class="form-group">


                <label for="name" >Bana isim ver isim!</label>

                <input type="text" class="form-control" id="name" name="name" required>

            </div>

            <div class="form-group">


                <label for="email" >E-Mail</label>

                <input type="text" class="form-control" id="email" name="email" required>

            </div>

            <div class="form-group">


                <label for="password" >Şifre</label>

                <input type="password" class="form-control" id="password" name="password" required>

            </div>

            <div class="form-group">


                <label for="password_confirmation" >Şifreni tekrar yaz yanlış olmasın ciğerim</label>

                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

            </div>

            <div class="form-group">


                <button type="submit" class="btn btn-primary">Giriş yap</button>
            </div>



            @include('layouts.errors')



        </form>
    </div>

@endsection