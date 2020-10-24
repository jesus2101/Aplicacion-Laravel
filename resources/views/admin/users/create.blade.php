<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Pagina para agregar usuarios</h1>

    {!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}

    <table>
         <tr>
            <td>{!!Form::label('name','Nombre')!!}</td>
            <td>{!!Form::text('name')!!}</td>
         </tr>
         <tr>
            <td>{!!Form::label('password','Password')!!}</td>
            <td>{!!Form::text('password')!!}</td>
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
            <td>{!!Form::label('foto_id','Foto')!!}</td>
            <td>{!!Form::file('foto_id')!!}</td>
         </tr>

         <tr>
            <td>{!!Form::submit('Crear usuario')!!}</td>
            <td>{!!Form::reset('Limpiar')!!}</td>
         </tr>



    </table>




    {!!Form::close()!!}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
