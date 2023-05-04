<p align=center>Уровень сложности:</p>
<p align=center>HARD</p>
<p>Угадай число от 1 до 10)</p>
    <form action="GuessNumberHard.php" method="post">
        <p>Ваше предположение: </p>
        <input type="text" name="guess">
        <input type="submit" name="button" value="отправить">
    </form>

<?php
$number = rand(1, 10);

if(isset($_POST["button"])){
    if($_POST["guess"] == $number){
        echo "Вы выиграли!"."<br>";
        echo "<a href='GuessNumberHard.php'> Хочу еще! </a>". "<br>";
        echo "<a href='GuessNumberMain.php'> Главное меню </a>"; 
    } else {
        echo "Жаль, но у ты не угадал :("."<br>";
        echo "<a href='GuessNumberHard.php'> Попробовать снова </a>". "<br>";
        echo "<a href='GuessNumberMain.php'> Главное меню </a>"; 
    }
}
//echo "<br><a href='FormToGuess.html'> ВЕРНУТЬСЯ </a>"
?>