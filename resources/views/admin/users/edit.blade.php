<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    Pagina para agregar usuarios


    {!!Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}

    <table>
         <tr>
            <td>{!!Form::label('name','Nombre')!!}</td>
            <td>{!!Form::text('name')!!}</td>
         </tr>

         <tr>
            <td>{!!Form::label('email','Email')!!}</td>
            <td>{!!Form::text('email')!!}</td>
         </tr>
         <tr>
            <td>{!!Form::label('email_verified_at','Verificar Email')!!}</td>
            <td>{!!Form::text('email_verified_at')!!}</td>
         </tr>
         <tr>
            <td>{!!Form::label('role_id','Role')!!}</td>
            <td>{!!Form::text('role_id')!!}</td>
         </tr>
         <tr>
            <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto:'pardo.jpg'}}" width="150px"></td>
            <td>{!!Form::file('foto_id')!!}</td>
         </tr>

         <tr>
            <td>{!!Form::submit('Modificar usuario')!!}</td>
            <td>{!!Form::reset('Limpiar')!!}</td>
         </tr>



    </table>

    {!!Form::close()!!}

    {!!Form::model($user,['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]])!!}

    {!!Form::submit('Eliminar usuario')!!}

    {!!Form::close()!!}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
