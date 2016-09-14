<html>
<head></head>
<body>
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Login por Facebook</h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: grey;">Inicio</a></li>
                    <li><a href="#" style="color: orange">Redes Sociales</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-facebook fa-2x"></i> Permitir que tus clientes se logueen en tu sitio utilizando Facebook</h4>
                </div>
                <div class="panel-body">
                    <div style="margin-top: 20px;"></div>
                    <p align="justify">
                        Con esta opcion  tus clientes que ingresen a tu tienda poder iniciar session para realizar pedido a travez de Facebook.
                    </p>

                    <form action="{{url('marketing/facebook')}}" method="post" role="form">
                        <div class="form-group">
                            <label for="appid">App ID</label>
                            <input type="text" class="form-control" name="id">
                        </div>
                        <div class="form-group">
                            <label for="appsecret">App Secret</label>
                            <input type="text" class="form-control" name="secret">
                            <a href=""><i class="fa fa-exclamation-circle"></i><strong>&iquest;Como activo el login via Facebook para mis clientes?</strong></a>
                        </div>

                        <div style="margin-bottom: 50px;"></div>

                        <div class="panel-footer">
                            <div class="text-center">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-default-tendaz" value="Activar Facebook">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 30px;"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="fa fa-twitter fa-2x"></i> Permitir que tus clientes se logeen en tu sitio Twitter</h4>
                </div>
                <div class="panel-body">

                    <p>Con esta opcion tus clientes pueden ingresar via Twitter </p>
                    <div style="margin-bottom: 10px;"></div>
                    <form action="{{url('admin/marketing/twitter')}}" method="post">
                        <div class="form-group">
                            <label for="consumerKey_twitter">Consumer Key</label>
                            <input type="text" class="form-control" name="id">
                        </div>
                        <div class="form-group">
                            <label for="consumerSecret" >Consumer Secret</label>
                            <input type="text" class="form-control" name="secret">
                            <a href="https://dev.twitter.com/oauth/application-only"><i class="fa fa-exclamation-circle"></i> <strong>&iquest;Como activo el login via Twitter para mis clientes?</strong></a>
                        </div>

                        <div class="panel-footer">
                            <div class="text-center">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-default-tendaz" value="Activar Twitter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>