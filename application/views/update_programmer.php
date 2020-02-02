<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Atualizar programador</h1>
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
                            <input type="hidden" name="id" value="<?php echo $programmer[0]->id; ?>">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" id="programmer-name" name="programmer-name" value="<?php echo $programmer[0]->nome; ?>" placeholder="Min. 6 caracteres">
                            </div>
                            <div class="form-group">
                                <label>Idade</label>
                                <input type="number" id="programmer-age" class="form-control" name="programmer-age" value="<?php echo $programmer[0]->idade; ?>" placeholder="Apenas números positivos">
                            </div>
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" id="programmer-city" name="programmer-city" value="<?php echo $programmer[0]->cidade; ?>" placeholder="Min. 6 caracteres">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="programmer-email" name="programmer-email" value="<?php echo $programmer[0]->email; ?>" disabled placeholder="Digite um email válido">
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <select class="form-control" id="programmer-role" name="programmer-role">
                                    <?php
                                        foreach($roles as $role){
                                            if($role->id == $programmer[0]->cargo_id){
                                                echo '<option value="'.$role->id.'" selected>'.$role->nome.'</option>';
                                            }else{
                                                echo '<option value="'.$role->id.'">'.$role->nome.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Anos de Experiência</label>
                                <input type="number" id="programmer-years-exp" class="form-control" name="programmer-years-exp" value="<?php echo $programmer[0]->anos_exp; ?>" placeholder="Apenas números positivos">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" id="update-programmer" value="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>