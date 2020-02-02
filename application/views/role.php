<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Todos os cargos</h1>
    </div>
</div>
<?php
    if($this->session->flashdata('success')){
        echo '<div class="row"><div class="col-lg-12"><div class="alert alert-success">'.$this->session->flashdata('success').'</div></div></div>';
    }elseif($this->session->flashdata('error')){
        echo '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">'.$this->session->flashdata('error').'</div></div></div>';
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Criado em</th>
                                <th>Modificado em</th>
                                <th colspan="2" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($roles as $role){
                                    echo '
                                    <tr class="odd">
                                        <td>'.$role->nome.'</td>
                                        <td>'.dbToDate($role->criado).'</td>
                                        <td>'.dbToDate($role->modificado).'</td>
                                        <td class="text-center"><a href="'.BASE_URL('role/update/'.$role->id).'">Atualizar</a></td>
                                        <td class="text-center"><a href="'.BASE_URL('role/delete/'.$role->id).'">Deletar</a></td>
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>