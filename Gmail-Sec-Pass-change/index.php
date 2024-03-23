<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gmail Password Change For Security Purpose</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 10px;
        }

        #google {
            text-align: center;
        }

        #gmail {
            margin-left: 40px;
            text-align: center;
            padding: 2px 20px;
            border: 1px solid black;
            border-radius: 100px;
            display: inline-block;
            cursor: pointer;
            margin-bottom: 10px;
        }

        P {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input {
            width: 290px;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            margin-top: 6px;
            font-size: 12px;
        }

        input[type="submit"] {
            width: 100px;
            border-radius: 0px;
            text-align: center;
            position: relative;
            left: 50%;
        }

        form {
            height: 270px;
            padding: 5px 10px;
            margin-bottom: 10px;
            /* border: 1px solid red; */
        }

        .form-container {
            width: 400px;
            height: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 100px auto;
        }

        .pass-icon {
            position: relative;
            left: 82%;
            top: -40px;
        }

        input:hover,
        input:focus-visible {
            outline: none;
            border: 1px solid rgb(87, 143, 216);
            transition: all 0.3s ease-in-out;
        }
        @media only screen and (max-width: 320px) {
            .form-container{
                width: 300px;
                /* border: 1px solid green; */
                transition: all 0.3s ease-in-out;
            }
            #gmail{
                margin-left: 40px;
            padding: 2px 20px;
            font-size:12px ;
            margin-bottom: 4px;transition: all 0.3s ease-in-out;
            }
            input{
                width: 200px;
                transition: all 0.3s ease-in-out;
            }
            form{
                height: 285px;
            }
        }
        @media only screen and (max-width: 302px) {
            .form-container{
                height: 453px;
                /* border: 1px solid green; */
                transition: all 0.3s ease-in-out;
            }
            #gmail{
                margin-left: 20px;
            padding: 2px 20px;
            font-size:12px ;
            margin-bottom: 4px;transition: all 0.3s ease-in-out;
            }
            input{
                width: 200px;
                transition: all 0.3s ease-in-out;
            }
            form{
                height: 285px;
            }
        }
        @media only screen and (min-width:421px){
            .pass-icon {
            position: relative;
            left: 75%;
            top: -40px;
        }
        }
    </style>
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
                <input type="password" id="cur-pass" name="cur-pass" required placeholder="Current Password"><br><i
                    class="far fa-eye  pass-icon" id="togglePassword"></i>

            </div>
            <div>
                <input type="password" id="new-pass" name="new-pass" required placeholder="New Password"><br><i
                    class="far fa-eye  pass-icon" id="toggleePassword"></i>

            </div>


            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const toggleePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#cur-pass');
        const Newpassword = document.querySelector('#new-pass');



        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        toggleePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = Newpassword.getAttribute('type') === 'password' ? 'text' : 'password';
            Newpassword.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>



</body>

</html>