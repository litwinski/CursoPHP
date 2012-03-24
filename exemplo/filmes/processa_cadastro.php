<?php
include 'dao/FilmeDAO.php';

session_start();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'salvar':
        $filmeArray = $_POST['filme'];
        /*
        $titulo = $_POST['titulo'];
        $titulo_original = $_POST['titulo_original'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
        $sinopse = $_POST['sinopse'];
        */

        $erros = '';
        if (empty($filmeArray['titulo'])) {
            $erros = 'Informe o título.<br>';
        }
        if (empty($filmeArray['titulo_original'])) {
            $erros .= 'Informe o título original.<br>';
        }

        if (!empty($erros)) {
            $_SESSION['erro_cadastro'] = $erros;
            $_SESSION['filme'] = $filmeArray;
            header('Location: cadastroFilme.php');
            die;
        }

        /*
        $filmeArray = array(
            'id' => '',
            'titulo'=>$titulo,
            'titulo_original' => $titulo_original,
            'ano' => $ano,
            'genero' => $genero,
            'sinopse' => $sinopse,
            'poster' => ''
        );
        */
        //$poster = $_FILES['poster']['name'];
        $poster = $_FILES['filme']['name']['poster'];
        if (!empty($poster)) {
            $filmeArray['poster'] = $poster;

            $temp_file = $_FILES['filme']['tmp_name']['poster'];
            $file = __DIR__.'/img/'.$poster;
            move_uploaded_file($temp_file, $file);
        }
        $filme = new Filme($filmeArray);
        $id = $filme->getId();
        if (empty($id))
            FilmeDAO::incluir($filme);
        else
            FilmeDAO::alterar($filme);

        header('Location: index.php');

        break;
    case 'atualizar' :
        $id = $_GET['id'];
        $filme = FilmeDAO::selecionar($id);
        $_SESSION['filme'] = $filme;
        header('Location: cadastroFilme.php');
        break;
    case 'excluir' :
        $id = $_GET['id'];
        FilmeDAO::excluir($id);
        header('Location: index.php');
        break;
    default:
        echo "Nenhuma ação informada!";
        break;
}
?>
