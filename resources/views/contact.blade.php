@extends('layout')


@section('content')

Contact us and share your feedback about the website!

<form action="" method="post">
        {{ csrf_field() }}
    Your email address<input type="email" name="email"><br>
    <hr>
    The subject of your message<input type="text" name="subject"><br>
    <hr>
    The test of your message<textarea name="text" id="" cols="30" rows="10"></textarea><br>
    <hr>
    <input type="submit" value="Send message"><br>
</form>



@endsection