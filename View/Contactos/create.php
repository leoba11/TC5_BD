<html>
    <head>
        <title>Edit Contact</title>
    </head>

    <body>
        <h4>Edit</h4>
        <form name="createSubmit" id="createSubmit" method="post" action="/~eb50946/TC5_BD/">
            <input name="action" type="hidden" value="createSubmit">
                <label>Name: </label>
                <input type="text" name="name" id="name" size="40" maxlength="40">
                <br>
                <br>
                <label>Lastname: </label>
                <input type="text" name="last_name" id="last_name" size="40" maxlength="40">
                <br>
                <br>
                <label>Home Telephone: </label>
                <input type="text" name="home_telephone" id="home_telephone" size="40" maxlength="40">
                <br>
                <br>
                <label>Home Address: </label>
                <input type="text" name="home_address" id="home_address" size="40" maxlength="40">
                <br>
                <br>
                <label>Work Telephone: </label>
                <input type="text" name="work_telephone" id="work_telephone" size="40" maxlength="40">
                <br>
                <br>
                <label>Work Address: </label>
                <input type="text" name="work_address" id="work_address" size="40" maxlength="40">
                <br>
                <br>
                <label>Email: </label>
                <input type="text" name="email" id="email" size="40" maxlength="40">
                <br>
                <br>
                <input type="submit" name="submit" id="submit" value="SAVE">
                &nbsp
                <button onclick="window.location.href = '/~eb50946/TC5_BD/?action=index';">CANCEL</button>
        </form>
    </body>
</html>