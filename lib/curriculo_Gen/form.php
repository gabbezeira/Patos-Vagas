<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php');
    include('/../../index.php');

    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 

    //Parametros

    $title = 'Certificação';
    $text = 'Certificado de curso';
    $nome = 'Victor Michael';
    $data = date('d,m,Y');
    $logo = 'logo.jpg';

    //carregando template
    $template = 'teste.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Alterar Textos

    $TBS->MergeField('pro.teste', $title);
    $TBS->MergeField('txt.text', $text);
    $TBS->MergeField('pro.nome', $nome);
    $TBS->MergeField('pro.data', $data);
    $TBS->VarRef['x'] = $logo;

    $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

    $save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
    $output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
    if ($save_as==='') {
        $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);
        header('location: index.php ');
        exit();
    } else {
        $TBS->Show(OPENTBS_FILE, $output_file_name);
        header('location: index.php');
        exit("File [$output_file_name] has been created.");  
    }
?>