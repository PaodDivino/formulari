<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="ema">Email</label>
            <br>
            <input type="email" id="ema" name="ema" placeholder="Email">
            <br><br>

            <label for="pwd">Password</label>
            <br>
            <input type="password" id="pwd" name="pwd" placeholder="Password">
            <br><br>

            <!-- Nome -->
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname" placeholder="First name">
            <br>

            <!-- Mensagem -->
            <label for="message">Write something</label>
            <br>
            <textarea name="message" id="message" placeholder="Escreve algo..."></textarea>
            <br><br>

            <!-- Côr dos olhos (lado a lado) -->
            <label>Pick your eye color</label>
            <div class="option-group">
                <input type="radio" id="eyecolorblue" name="eyecolor" value="Blue">
                <label for="eyecolorblue">Blue</label>
                
                <input type="radio" id="eyecolorgreen" name="eyecolor" value="Green">
                <label for="eyecolorgreen">Green</label>
                
                <input type="radio" id="eyecolorbrown" name="eyecolor" value="Brown">
                <label for="eyecolorbrown">Brown</label>
            </div>
            <br><br>

            <!-- Animais de estimação (lado a lado) -->
            <label>What pet do you have</label>
            <div class="option-group">
                <input type="checkbox" id="petdog" name="pet" value="Dog">
                <label for="petdog">Dog</label>
                
                <input type="checkbox" id="petcat" name="pet" value="Cat">
                <label for="petcat">Cat</label>
                
                <input type="checkbox" id="petturtle" name="pet" value="Turtle">
                <label for="petturtle">Turtle</label>
            </div>
            <br><br>

            <!-- Tipo de carro -->
            <label for="cartype">Car type</label>
            <br>
            <select name="cartype" id="cartype">
                <option value="None">None</option>
                <option value="BMW">BMW</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Toyota">Toyota</option>
                <option value="Ford">Ford</option>
            </select>
            <br><br>

            <button type="submit" value="submit">submit</button>
        </form>
    </main>
</body>
</html>
