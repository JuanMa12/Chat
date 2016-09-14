<html>
<head></head>
<body>
<form action="{{url('account/create')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="account">
    <input type="submit" class="btn btn-default-tendaz" value="Guardar Anuncio">
</form>
</body>
</html>