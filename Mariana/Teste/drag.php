<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Drag and Drop example</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <!-- Custom styling -->
    <style type="text/css">
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    .ui-state-highlight { height: 1.5em; line-height: 1.2em; }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Drag and Drop example</h1>
        <p>Example of drag and drop</p>
    </div>

    <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
        <h2>Sort these elemements</h2>
            <form class="form">
                <div class="sort-container">

                    <div class="sort-item">
                        <input type="hidden" class="sort-order-value" id="form-field-01-sort-order" name="sort-order[]" value="1">
                        <label for="form-field-01">Your input</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="form-field-01" name="form-field[]">
                            <div class="input-group-addon dragdrop-handle"><span class="glyphicon glyphicon-move"></span></div>
                            <div class="input-group-addon delete-handle"><span class="glyphicon glyphicon-remove"></span></div>
                        </div>
                        <div class="subform" style="margin-left: 50px;">
                            <label for="form-field-01-subfield-01">Your input</label>
                            <input class="form-control" type="text" id="form-field-01-subfield-01" name="form-subfield[]">
                        </div>
                        <div class="subform" style="margin-left: 50px;">
                            <label for="form-field-01-subfield-02">Your input</label>
                            <input class="form-control" type="text" id="form-field-01-subfield-02" name="form-subfield[]">
                        </div>
                    </div>

                    <div class="sort-item">
                        <input type="hidden" class="sort-order-value" id="form-field-02-sort-order" name="sort-order[]" value="2">
                        <label for="form-field-02">Your input</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="form-field-02" name="form-field[]">
                            <div class="input-group-addon dragdrop-handle"><span class="glyphicon glyphicon-move"></span></div>
                            <div class="input-group-addon delete-handle"><span class="glyphicon glyphicon-remove"></span></div>
                        </div>
                        <div class="subform" style="margin-left: 50px;">
                            <label for="form-field-02-subfield-01">Your input</label>
                            <input class="form-control" type="text" id="form-field-02-subfield-01" name="form-subfield[]">
                        </div>
                        <div class="subform" style="margin-left: 50px;">
                            <label for="form-field-02-subfield-02">Your input</label>
                            <input class="form-control" type="text" id="form-field-02-subfield-02" name="form-subfield[]">
                        </div>
                    </div>

                </div><!-- /.sort-container -->
            </form>
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">&nbsp;</div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="application/javascript">
$(document).ready(function () {
    $('.sort-container').sortable({
        placeholder: "ui-state-highlight",
        handle: ".dragdrop-handle",
        opacity: 0.5,
        cursor: "move",
        update: function (event, ui) {
            $('.sort-order-value').each(function (index, value) {
                console.log(index);
                if (0 == index) {
                    $(value).parent().find('.delete-handle').hide();
                } else {
                    $(value).parent().find('.delete-handle').show();
                }
                $(value).val(index + 1);
            });
        }
    });
    $('.sort-container').disableSelection();
});
</script>
</body>
</html>