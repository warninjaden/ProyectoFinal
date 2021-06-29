<?php

require '../vendor/autoload.php';

$arma = new Medieval\Arma;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Registrar'){

        if(empty($_POST['titulo']))
            exit('Completar titulo');
        
        if(empty($_POST['descripcion']))
            exit('Completar titulo');

        if(empty($_POST['tipo_id']))
            exit('Seleccionar una Categoria');

        if(!is_numeric($_POST['tipo_id']))
            exit('Seleccionar una Categoria válida');

        
        $_params = array(
            'titulo'=>$_POST['titulo'],
            'descripcion'=>$_POST['descripcion'],
            'foto'=> subirFoto(),
            'precio'=>$_POST['precio'],
            'tipo_id'=>$_POST['tipo_id'],
            'fecha'=> date('Y-m-d')
        );

        $rpt = $arma->registrar($_params);

        if($rpt)
            header('Location: armas/index.php');
        else
            print 'Error al registrar una pelicula';
        

    }

    if ($_POST['accion']=='Actualizar'){

        if(empty($_POST['titulo']))
        exit('Completar titulo');
    
    if(empty($_POST['descripcion']))
        exit('Completar titulo');

    if(empty($_POST['tipo_id']))
        exit('Seleccionar una Categoria');

    if(!is_numeric($_POST['tipo_id']))
        exit('Seleccionar una Categoria válida');

    
    $_params = array(
        'titulo'=>$_POST['titulo'],
        'descripcion'=>$_POST['descripcion'],
        'precio'=>$_POST['precio'],
        'tipo_id'=>$_POST['tipo_id'],
        'fecha'=> date('Y-m-d'),
        'id'=>$_POST['id'],
    );

    if(!empty($_POST['foto_tmp']))
        $_params['foto'] = $_POST['foto_tmp'];
    
    if(!empty($_FILES['foto']['name']))
        $_params['foto'] = subirFoto();

    $rpt = $arma->actualizar($_params);
    if($rpt)
        header('Location: armas/index.php');
    else
        print 'Error al actualizar un artículo';

    }

}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $arma->eliminar($id);
    
    if($rpt)
        header('Location: armas/index.php');
    else
        print 'Error al eliminar una pelicula';


}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $arma->eliminar($id);
    
    if($rpt)
        header('Location: armas/index.php');
    else
        print 'Error al eliminar un artículo';
}

function subirFoto() {

    $carpeta = '/var/www/html/mark/upload';

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];


}