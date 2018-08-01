$(document).ready(function(){


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

});