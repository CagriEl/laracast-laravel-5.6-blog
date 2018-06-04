@extends('layouts.master')



@section('content')


    <div class="col-md-8">

        <h1> Giriş Yap</h1>


        <form method="POST" action="/login">

            {{csrf_field()}}


            <div class="form-group">

                <label for="email">email ver bakim</label>

                <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="form-group">

                <label for="password">password alim bebeim</label>

                <input type="password" class="form-control" id="password" name="password">

            </div>


            <div class="form-group">


                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </div>

                @include('layouts.errors')

        </form>



    </div>


@endsection