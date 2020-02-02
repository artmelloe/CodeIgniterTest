<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Todos os programadores</h1>
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
                                <th>Idade</th>
                                <th>Cidade</th>
                                <th>Email</th>
                                <th>Cargo</th>
                                <th>Anos de Experiência</th>
                                <th>Criado em</th>
                                <th>Modificado em</th>
                                <th colspan="2" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($programmers as $programmer){
                                    echo '
                                    <tr class="odd">
                                        <td>'.$programmer->nome.'</td>
                                        <td>'.$programmer->idade.'</td>
                                        <td>'.$programmer->cidade.'</td>
                                        <td>'.$programmer->email.'</td>
                                        <td>'.$programmer->cargo.'</td>
                                        <td>'.$programmer->anos_exp.'</td>
                                        <td>'.dbToDate($programmer->criado).'</td>
                                        <td>'.dbToDate($programmer->modificado).'</td>
                                        <td class="text-center"><a href="'.BASE_URL('programmer/update/'.$programmer->id).'">Atualizar</a></td>
                                        <td class="text-center"><a href="'.BASE_URL('programmer/delete/'.$programmer->id).'">Deletar</a></td>
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