<?php
session_start(); // start the session
include("./conexion.php"); // include the connection file
include("./functions.php"); // include the functions file

// user signup
if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['user_name']) || isset($_POST['email'])) && isset($_POST['password'])) {
    // something was posted
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($email) && !empty($password)) {
        // Check if the username already exists
        $check_query_username = "SELECT * FROM users WHERE user_name = '$user_name'";
        $check_result_username = mysqli_query($con, $check_query_username);

        // Check if the email already exists
        $check_query_email = "SELECT * FROM users WHERE email = '$email'";
        $check_result_email = mysqli_query($con, $check_query_email);

        if (mysqli_num_rows($check_result_username) > 0) {
            // Username already exists
            echo "<script>alert('El nombre de usuario ya está en uso. Por favor, elige otro.');</script>";
        } elseif (mysqli_num_rows($check_result_email) > 0) {
            // Email already exists
            echo "<script>alert('El correo electrónico ya está registrado. Por favor, utiliza otro correo.');</script>";
        } else {
            // Save to database
            $user_id = random_num(20); // generate a random number
            $query = "INSERT INTO users (user_id, user_name, email, password) VALUES ('$user_id', '$user_name', '$email', '$password')"; // insert the user data into the database
            $result = mysqli_query($con, $query); // execute the query

            if ($result) {
                echo "<script>alert('¡Registro exitoso!'); window.location.href = 'login.php';</script>";
                exit; // Agregar esta línea para detener la ejecución del script PHP
            } else {
                echo "Error al registrar el usuario: " . mysqli_error($con);
            }
        }
    } else {
        echo "<script>alert('¡Por favor, complete todos los campos!');</script>";
    }
}

//user login
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email2']) && isset($_POST['password2'])) // if the request method is post and the email and password is set
{
    // something was posted
    $email = $_POST['email2'];
    $password = $_POST['password2'];

    if (!empty($email) && !empty($password)) // if the email and password is not empty
    {
        // read from database
        $query = "select * from users where email = '$email' limit 1"; // get the user data from the database
        $result = mysqli_query($con, $query); // execute the query

        if ($result) // if the query is successful
        {
            if ($result && mysqli_num_rows($result) > 0) // if the query is successful and the user exists
            {
                $user_data = mysqli_fetch_assoc($result); // get the user data
                if ($user_data['password'] === $password) // if the password is correct
                {
                    $_SESSION['user_id'] = $user_data['user_id']; // set the user id in the session
                    header("Location: ../cursos/cursos.php"); // redirect to cursos
                    die;
                }
            }
        }
        echo "<script>
                    alert('por favor ingrese un email y contraseña válidos!');
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login_style.css">
    <title>Radiant Vision || Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post">
                <h1>Crear una cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ó usa tu email para registrarte</span>
                <input type="text" name="user_name" placeholder="Nombre de usuario">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit" name="signup" value="Signup">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post">
                <h1>Iniciar sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>ó usa tu email y contraseña</span>
                <input type="email" name="email2" placeholder="Email">
                <input type="password" name="password2" placeholder="Contraseña">
                <a href="#">Olvidaste tu contraseña?</a>
                <button type="submit" name="login" value="Login">Ingresar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido!</h1>
                    <p>Ingresa tus datos personales para accedar al contenido de la página...</p>
                    <button class="hidden" id="login">Ingresar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola, jugador!!</h1>
                    <p>Registrate con tus datos para usar el contenido de la página...</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login_script.js"></script>
</body>

</html>