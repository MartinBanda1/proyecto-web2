<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:07:45
  from 'C:\xampp\htdocs\proyecto\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd23192abf2_31238527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d2794c3d6e2d75890850813e1520f698cefdc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\header.tpl',
      1 => 1666044462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dd23192abf2_31238527 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <base href="<?php echo BASE_URL;?>
">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Pagina peliculas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login">Login</a>
          </li>
        <?php } else { ?> 
          <li class="nav-item ml-auto">
            <a class="nav-link" aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
          </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>

 <main class="container"><?php }
}
