<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    @foreach($user as $us)
    <tr>
        <td>{{$us->id}}</td>
    </tr>
    <tr>
        <td>{{$us->name}}</td>
    </tr>
    <tr>
        <td>{{$us->email}}</td>
    </tr>
    <tr>
        <td>{{$us->password}}</td>
    </tr>
    @endforeach
</table>
    {{$user->links()}}

    @if($errors->has('mail'))
        {{ $errors->first('mail') }}
    @endif


    <form method="post" action="{{ route('fileTest') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name">
        <input type="file" name="profile_picture">
        <input type="submit">

    </form>

</body>
</html>