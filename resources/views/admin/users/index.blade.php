<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

@if(Session::has('usuario_borrado'))

<p class="bg-danger">{{session('usuario_borrado')}}</p>

@endif
    <h1 style="text-align:center; margin:50px 0">Pagina principal del controlador</h1>

    <table class="table">
        <thead>
           <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Role Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Creado</th>
            <th>Actualizado</th>
           </tr>
        </thead>
        <tbody>
        @if($users)
           @foreach($users as $user)
           <tr>
             <td>{{$user->id}}</td>
             @if($user->foto)
             <td><img src="/images/{{$user->foto->ruta_foto}}" width="150px"></td>
             @else
             <td><img src="/images/pardo.jpg" width="150px"></td>
             @endif
             <td>{{$user->role_id}}</td>
             <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
             <td>{{$user->email}}</td>
             <td>{{$user->created_at}}</td>
             <td>{{$user->updated_at}}</td>
           </tr>
           @endforeach
         @endif
        </tbody>

    </table>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
