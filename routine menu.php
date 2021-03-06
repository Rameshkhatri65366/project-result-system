<html>
<?php include "header.php"; ?>
<h1>CHECK YOUR ROUTINE</h1>

<head>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
            ;
        }

        form {
            width: 40%;
            padding: 50px;
            height: fit-content;
            margin: 0 auto;
            margin-top: fit-content;
            background-color: #f9f9f9
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-control_another {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #a2b9bc;
            color: black;
            border: none;
            cursor: pointer;
            width: 30%;
            margin: 5px auto;
            padding: 8px;
            box-shadow: 0px 5px 5px #ccc;
            border-radius: 10px;
            border-top: 1px solid #e9e9e9;
            display: block;
            text-align: center;
        }

        .signup {
            background-color: blue;
            margin-bottom: 20px;
        }

        .login-box {
            align: left;
            position: left;
            top: 50%;
            transform: translateY(-50%);
            padding: 50px;
            background-color: #fff;
            box-shadow: 0px 5px 5px #ccc;
            border-radius: 10px;
            border-top: 1px solid #e9e9e9;
        }

        h1 {
            color: Black;
        }

        h4,
        b,
        h2,
        p {
            text-align: center;
            font-size: larger;
        }

        body {
            background-color: #e8edf7;
        }

        option[value=""][disabled] {
            display: none;
        }
    </style>
</head>

<body>
    <form name="my_form" action="routine.php" method="post">
        <div class="container">
            <label for="id"><b>Faculty</b></label>
            <select class="form-control_another" name="faculty" id="faculty">
                <option value="" disabled selected>Select your Faculty</option>
                <option value="civil">Civil</option>
                <option value="computer">Computer</option>
                <option value="architecture">Architecture</option>
            </select><br>
            <label for="id"><b>Semester</b></label>
            <select class="form-control" name="semester" id="semester">
                <option value="" disabled selected>Select your Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select><br>
            <button type="submit" name="btn_submit" value="onsubmit">Submit</button><br>
        </div>
    </form>

</body>

</html>