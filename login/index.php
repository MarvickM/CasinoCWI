<?php include '../template/head.php'; ?>
<?php include '../template/navigation.php'; ?>

    <div class="text-center container">
    <form class="form-signin abtop">
        <h1 class="h3 mb-3 font-weight-normal">Anmelden</h1>
        <label for="inputUsername" class="sr-only">Benutzername</label>
        <input type="username" id="inputUsername" class="form-control" placeholder="Benutzername" required autofocus>
        <label for="inputPasswort" class="sr-only">Passwort</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Einloggen</button>
    </form>
    </div>

    <?php include '../template/footer.php'; ?>
