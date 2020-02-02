<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Novo cargo</h1>
    </div>
</div>
<?php
    
    echo validation_errors('<div class="row"><div class="col-lg-12"><div class="alert alert-danger">', '</div></div></div>');
    
    if(!empty($success)){
        echo '<div class="row"><div class="col-lg-12"><div class="alert alert-success">'.$success.'</div></div></div>';
    }elseif(!empty($error)){
        echo '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">'.$error.'</div></div></div>';
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" id="role-name" name="role-name" placeholder="Min. 6 caracteres">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" id="new-role" value="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>