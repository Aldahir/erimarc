<a href="">Efectuar login</a>
<a href="">Escolher tema</a>
<a href="">Escolher tema</a>


<?php 
global $con;

include('../../../model/Conexao.php');
$con = new Conexao();
$conexao = $con->getConnection();

/**
 * Defined by default
 * @var DEFAULT_TABLE
 */

define('DEFAULT_TABLE', "MyForm");

/*
$data = json_decode(file_get_contents("php://input"));
$value = $data->assunto;

$sql = $conexao->prepare("INSERT INTO MyForm(field_assunto) VALUES(?)");
$sql->bindParam(1, $value);

$result = $sql->execute() == true 
? 
json_encode([ 'msg'=>"Registo inserido com sucesso", 'status'=> 200, 'lastId'=>$conexao->lastInsertId() ]) 
: 
json_encode([ 'msg'=>"Falha ao salvar o registo", 'status'=>301, 'lastId'=>$conexao->lastInsertId() ]);

echo $result;*/

function exists_created_form(){
    $con = new Conexao();
    $con->setDatabase();
    $database = $con->getDatabase();
    $sql = "call sys.table_exists('{$database}','{DEFAULT_TABLE}', @table_type); select @table_type;";


    return $sql;
}?>
<div class="container">
    <div style="display: flex;">
        <div>
            <a href="">Criar um formulário</a>
        </div>
        <?php echo exec("pwd"); ?>
        <?php echo ( exists_created_form() ); ?>
        <div>
            <a href="">Criar um formulário</a>
        </div>
        <!-- <?php //endif; ?> -->
    </div>
</div>