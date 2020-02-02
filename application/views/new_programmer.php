<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Novo programador</h1>
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
                                <input type="text" class="form-control" id="programmer-name" name="programmer-name" placeholder="Min. 6 caracteres">
                            </div>
                            <div class="form-group">
                                <label>Idade</label>
                                <input type="number" id="programmer-age" class="form-control" name="programmer-age" placeholder="Apenas números positivos">
                            </div>
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" id="programmer-city" name="programmer-city" placeholder="Min. 6 caracteres">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="programmer-email" name="programmer-email" placeholder="Digite um email válido">
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <select class="form-control" id="programmer-role" name="programmer-role">
                                    <?php
                                        foreach($roles as $role){
                                            echo '<option value="'.$role->id.'">'.$role->nome.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Anos de Experiência</label>
                                <input type="number" id="programmer-years-exp" class="form-control" name="programmer-years-exp" placeholder="Apenas números positivos">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" id="new-programmer" value="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>