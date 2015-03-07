<?php
/*
  Template Name: Contato
 */
?> 

<?php 

    function validaCampos($post) {
        return true;
    }
    
    if (isPost()) {    
        $dadosContato = getPost();
        
        if (validaCampos($dadosContato)) {
            
            // monta o email
            setMessage("Obrigado pelo seu contato. Em breve entraremos em contato.");
                        
        } else {             
            setMessage("Preencha os campos obrigatórios!", 'alert-danger');
        }
        
    }

?>

<?php get_header(); ?>

<div class="row">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p>Preencha os campos abaixo. Desde já agradecemos o seu contato.</p>
        <?php renderMessages(); ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <form method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="">
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Digite o assunto">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" cols="20" rows="10"></textarea>
                </div>                
                <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>        
    </header>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>



