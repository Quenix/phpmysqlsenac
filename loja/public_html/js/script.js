$(document).ready(function(){

    // USUÁRIOS
    $('#adicionar-usuario').on('click', function(e){
        e.preventDefault();

        $.confirm({
            title: 'Editar',
            content: '' +
            '<form action="?page=adicionarUsuario" method="POST" class="formName">' +
            '<div class="form-group">' +
            '<label>Nome:</label>' +
            '<input type="text" name="nome" placeholder="Primeiro nome" class="name form-control"  required />' +
            '<label>Sobrenome:</label>' +
            '<input type="text" name="sobrenome" placeholder="Sobrenome" class="name form-control"  required />' +
            '<label>Email:</label>' +
            '<input type="email" name="email" placeholder="Email" class="name form-control"  required />' +
            '<label>Senha:</label>' +
            '<input type="password" name="senha" placeholder="Senha" class="name form-control"  required />' +
            '<label>Confirmar Senha:</label>' +
            '<input type="password" name="senha_confirmar" placeholder="Confirmar senha" class="name form-control"  required />' +
            '</div>' +
            '</form>',
            buttons: {
                formSubmit: {
                    text: 'Submit',
                    btnClass: 'btn-blue',
                    action: function () {
                        var name = this.$content.find('.name').val();
                        if(!name){
                            $.alert('provide a valid name');
                            return false;
                        }

                        this.$content.find('form').submit();

                    }
                },
                cancel: function () {
                    //close
                }
            }
        });
    });


    $('.edit').on('click', function(e){
        e.preventDefault();

        var nome        = $(this).find("input[name='nome']").val();
        var sobrenome   = $(this).find("input[name='sobrenome']").val();
        var id_usuario = $(this).find("input[name='id_usuario']").val();

        $.confirm({
            title: 'Editar',
            content: '' +
            '<form action="?page=editarUsuario" method="POST" class="formName">' +
            '<div class="form-group">' +
            '<label>Nome:</label>' +
            '<input type="text" name="nome" placeholder="Primeiro nome" class="name form-control" value="'+nome+'" required />' +
            '<label>Sobrenome:</label>' +
            '<input type="text" name="sobrenome" placeholder="Sobrenome" class="name form-control" value="'+sobrenome+'" required />' +
            '<input type="hidden" name="id_usuario" value="'+id_usuario+'"/>' +
            '</div>' +
            '</form>',
            buttons: {
                formSubmit: {
                    text: 'Submit',
                    btnClass: 'btn-blue',
                    action: function () {
                        var name = this.$content.find('.name').val();
                        if(!name){
                            $.alert('provide a valid name');
                            return false;
                        }

                        this.$content.find('form').submit();

                    }
                },
                cancel: function () {
                    //close
                }
            }
        });

    });

    $('.delete').on('click', function(e){
        e.preventDefault();
        var formulario = $(this);
        $.confirm({
            title: 'AVISO!',
            content: 'Você tem certeza que deseja excluir este usuário?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Confirmar',
                    btnClass: 'btn-red',
                    action: function(){

                        formulario.submit();

                    }
                },
                Cancelar: function () {
                }
            }
        });

    });


    // PRODUTOS
    $('#adicionar-produto').on('click', function(e){
        e.preventDefault();

        $.confirm({
            title: 'Editar',
            content: '' +
            '<form action="?page=adicionarProduto" method="POST" class="formName" enctype="multipart/form-data">' +
            '<div class="form-group">' +
            '<label>Nome:</label>' +
            '<input type="text" name="nome_produto" placeholder="Nome Produto" class="name form-control" required />' +
            '<label>Preço:</label>' +
            '<input type="text" name="preco_produto" placeholder="Preço" class="name form-control" required />' +
            '<label>Peso:</label>' +
            '<input type="text" name="peso_produto" placeholder="Peso" class="name form-control" required />' +
            '<label>Descrição:</label>' +
            '<textarea rows="10" maxlength="2000" name="detalhes_produto" placeholder="Descrição" class="name form-control" required />' +
            '<label>Categoria:</label>' +
            '<input type="text" name="categoria" placeholder="Categoria" class="name form-control" required />' +
            '<label for="upload"> Selecione uma imagem </label>' +
            '<input id="upload" name="foto_produto" type="file" accept="image/jpeg" class="btn-dark form-control"> ' +
            '</div>' +
            '</form>',
            buttons: {
                formSubmit: {
                    text: 'Enviar',
                    btnClass: 'btn-blue',
                    action: function () {
                        var name = this.$content.find('.name').val();
                        if(!name){
                            $.alert('provide a valid name');
                            return false;
                        }

                        this.$content.find('form').submit();

                    }
                },
                cancel: function () {
                    //close
                }
            }
        });
    });


    $('.edit-produto').on('click', function(e){
        e.preventDefault();

        var id_produto       = $(this).find("input[name='id_produto']").val();
        var categoria        = $(this).find("input[name='categoria']").val();
        var nome_produto     = $(this).find("input[name='nome_produto']").val();
        var preco_produto    = $(this).find("input[name='preco_produto']").val();
        var peso_produto     = $(this).find("input[name='peso_produto']").val();
        var detalhes_produto = $(this).find("input[name='detalhes_produto']").val();
        var foto_produto     = $(this).find("input[name='foto_produto']").val();

        $.confirm({
            title: 'Editar',
            columnClass: 'col-md-6 col-md-offset-3',
            content: '' +
            '<form action="?page=editarProduto" method="POST" class="formName" enctype="multipart/form-data">' +
            '<div class="form-group">' +
            '<label>Nome:</label>' +
            '<input type="text" name="nome_produto" placeholder="Nome Produto" class="name form-control" value="'+nome_produto+'" required />' +
            '<label>Preço:</label>' +
            '<input type="text" name="preco_produto" placeholder="Preço" class="name form-control" value="'+preco_produto+'" required />' +
            '<label>Peso:</label>' +
            '<input type="text" name="peso_produto" placeholder="Peso" class="name form-control" value="'+peso_produto+'" required />' +
            '<label>Descrição:</label>' +
            '<textarea rows="10" maxlength="2000" name="detalhes_produto" placeholder="Descrição" class="name form-control" required>'+detalhes_produto+'</textarea>'+
            '<label>Categoria:</label>' +
            '<input type="text" name="categoria" placeholder="Categoria" class="name form-control" value="'+categoria+'" required />' +
            '<label for="upload"> Selecione uma imagem </label>' +
            '<input id="upload" name="foto_produto" type="file" accept="image/jpeg" class="btn-dark form-control" value="'+foto_produto+'"> ' +
            '<input type="hidden" name="id_produto" value="'+id_produto+'"/>' +
            '<img src ="'+foto_produto+'">' +
            '</div>' +
            '</form>',
            buttons: {
                formSubmit: {
                    text: 'Enviar',
                    btnClass: 'btn-blue',
                    action: function () {
                        var name = this.$content.find('.name').val();
                        if(!name){
                            $.alert('provide a valid name');
                            return false;
                        }

                        this.$content.find('form').submit();

                    }
                },
                cancel: function () {
                    //close
                }
            }
        });

    });

    $('.delete-produto').on('click', function(e){
        e.preventDefault();
        var formulario = $(this);
        $.confirm({
            title: 'AVISO!',
            content: 'Você tem certeza que deseja excluir este produto?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Confirmar',
                    btnClass: 'btn-red',
                    action: function(){

                        formulario.submit();

                    }
                },
                Cancelar: function () {
                }
            }
        });

    });

});