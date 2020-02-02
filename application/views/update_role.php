<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Atualizar cargo</h1>
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
                            <input type="hidden" name="id" value="<?php echo $role[0]->id; ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="role-name" name="role-name" value="<?php echo $role[0]->nome; ?>" placeholder="Min. 6 characters">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" id="update-role" value="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>