$(document).ready(function(){
    $('#listar_funcionarios').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":"../serv_processa.php"
    });
});

