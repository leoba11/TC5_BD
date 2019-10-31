<html>
    <head>
        <title>Edit Contact</title>
    </head>

    <body>
        <h4>Edit</h4>
        <form name="editSubmit" id="editSubmit" method="post" action="/~eb50946/TC5_BD/?id=<?php echo $contact->id?>"></form>
            <input name="action" type="hidden" value="editSubmit">

            <label>Name: </label>
            <input type="text" name="name" id="name" size="40" maxlength="40" value="<?php echo $contact->name;?>">
    </body>
</html>