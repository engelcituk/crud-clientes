<?php require APPROOT . '/views/shared/header2.php'; ?>

<form class="login" action="<?php echo URLROOT . '/users/login'; ?>" method="post">
        <div>
            <h2 class="h2D">Digital Plus</h2>
        </div>
        <div class="form-group">
            <i class="fas fa-user"></i>
            <!-- <input type="text" name="admin" placeholder="Usuario"><br> -->
            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid':''; ?>" placeholder="Su correo electrónico" value="<?php echo $data['email'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
        </div><br>
        <div class="form-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid':''; ?>" placeholder="Su contraseña" value="<?php echo $data['password'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
        </div><br>

        <br><button type="submit"> Entrar </button><br><br>
        <a href="<?php echo URLROOT . '/users/register'; ?>">¿No tienes cuenta?, Regístrese</a>
    </form>

</body>

</html>