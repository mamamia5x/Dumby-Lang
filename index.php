  <!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
  background-color: black;
  color: white;
}
button{
  position: relative;
  border: none;
  background-color : #475a5e; 
  color: #dfddbe;
  font-family: 'Fira Code', monospace;
}
textarea{
    width: 40%;
    background: url(img/lines.png);
    background-attachment: local;
    background-repeat: no-repeat;
    padding-left: 35px;
    padding-top: 10px;
    border-color: #ccc;
    font-family: 'Inconsolata', monospace;
    font-size: 50%;
    /*font-family: 'Fira Code', monospace;*/
    background-color : #1d2020; 
    color:#fff982;
    height: 80vh;
}
.green{
  color: #8bf0a6;
}
.look{
  border:1px solid lightgrey;
  width: 45%;
  height: 80vh;
  position: relative;
  bottom: 82vh;
  left: 50%;
  overflow: hidden;
}  
.look2{
  border: none;
  width: 100%;
  height: 65vh;
  position: relative;
  bottom: 70vh;
  right: 00%;
  overflow: hidden;
}
</style>
<script>
var check = localStorage.getItem("Enters");
if (check == null){
  localStorage.setItem("Enters", 0);
  setTimeout(reload, 1000);
}
if (check % 2 == 1){
  localStorage.setItem("Enters", check + 1);
  setTimeout(reload, 1000);
}
function reload (){
  location.reload();
}
</script>
<!--link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet"-->
<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" type="image/png" href="img/dumby.png">
    <meta charset="UTF-8">
    <title>Dumby Lang</title>
</head>
<body>
<div class="w3-container">
  <p class="w3-center w3-animate-top green">Saved!</p>
</div>
    <form method="POST">
      <button>Run</button><br><br>
      <textarea spellcheck="false" name="code" type="text"><?php
       echo file_get_contents('script.txt');
       ?></textarea>
    </form>
    <iframe class="look" src="terminal.php"></iframe>
    <iframe class="look2" id="key" src="key.html"></iframe>
    <?php
    if (isset($_POST['code'])) {
      $return = file_put_contents('script.txt', $_POST['code']);
      $file = file_get_contents('script.txt');
      $num = 0;
      $put = '';
      while (strlen($file) >= $num){ 
        if (substr($file, $num, 1) == "1"){
          $put = $put . 'a';
        }
        if (substr($file, $num, 1) == "5"){
          $put = $put . 'b';
        }
        if (substr($file, $num, 1) == "2"){
          $put = $put . 'c';
        }
        if (substr($file, $num, 1) == "@"){
          $put = $put . 'd';
        }
        if (substr($file, $num, 1) == "G"){
          $put = $put . 'e';
        }
        if (substr($file, $num, 1) == "e"){
          $put = $put . 'f';
        }
        if (substr($file, $num, 1) == "l"){
          $put = $put . 'g';
        }
        if (substr($file, $num, 1) == "M"){
          $put = $put . 'h';
        }
        if (substr($file, $num, 1) == "'"){
          $put = $put . 'i';
        }
        if (substr($file, $num, 1) == "s"){
          $put = $put . 'j';
        }
        if (substr($file, $num, 1) == "\""){
          $put = $put . 'k';
        }
        if (substr($file, $num, 1) == "<"){
          $put = $put . 'l';
        }
        if (substr($file, $num, 1) == ","){
          $put = $put . 'm';
        }
        if (substr($file, $num, 1) == "#"){
          $put = $put . 'n';
        }
        if (substr($file, $num, 1) == " "){ //O IS SPACE!!!!
          $put = $put . 'o';
        }
        if (substr($file, $num, 1) == "O"){
          $put = $put . 'p';
        }
        if (substr($file, $num, 1) == "o"){
          $put = $put . 'q';
        }
        if (substr($file, $num, 1) == "P"){
          $put = $put . 'r';
        }
        if (substr($file, $num, 1) == "v"){
          $put = $put . 's';
        }
        if (substr($file, $num, 1) == ">"){
          $put = $put . 't';
        }
        if (substr($file, $num, 1) == "\\"){ //It's just /
          $put = $put . 'u';
        }
        if (substr($file, $num, 1) == "+"){ 
          $put = $put . 'v';
        }
        if (substr($file, $num, 1) == "*"){ 
          $put = $put . 'w';
        }
        if (substr($file, $num, 1) == "{"){ 
          $put = $put . 'x';
        }
        if (substr($file, $num, 1) == "X"){ 
          $put = $put . 'y';
        }
        if (substr($file, $num, 1) == "^"){ 
          $put = $put . 'z';
        }
        if (substr($file, $num, 1) == "4"){ 
          $put = $put . 'A';
        }
        if (substr($file, $num, 1) == ")"){ 
          $put = $put . 'B';
        }
        if (substr($file, $num, 1) == "a"){ 
          $put = $put . 'C';
        }
        if (substr($file, $num, 1) == "C"){ 
          $put = $put . 'D';
        }
        if (substr($file, $num, 1) == "/"){ 
          $put = $put . 'E';
        }
        if (substr($file, $num, 1) == ";"){ 
          $put = $put . 'F';
        }
        if (substr($file, $num, 1) == "c"){ 
          $put = $put . 'G';
        }
        if (substr($file, $num, 1) == "A"){ 
          $put = $put . 'H';
        }
        if (substr($file, $num, 1) == "h"){ 
          $put = $put . 'I';
        }
        if (substr($file, $num, 1) == "&"){ 
          $put = $put . 'J';
        }
        if (substr($file, $num, 1) == "8"){ 
          $put = $put . 'K';
        }
        if (substr($file, $num, 1) == "K"){ 
          $put = $put . 'L';
        }
        if (substr($file, $num, 1) == "j"){ 
          $put = $put . 'M';
        }
        if (substr($file, $num, 1) == "Z"){ 
          $put = $put . 'N';
        }
        if (substr($file, $num, 1) == "W"){ 
          $put = $put . 'O';
        }
        if (substr($file, $num, 1) == "_"){ 
          $put = $put . 'P';
        }
        if (substr($file, $num, 1) == "T"){ 
          $put = $put . 'Q';
        }
        if (substr($file, $num, 1) == "f"){ 
          $put = $put . 'R';
        } 
        if (substr($file, $num, 1) == "F"){ 
          $put = $put . 'S';
        }
        if (substr($file, $num, 1) == "p"){ 
          $put = $put . 'T';
        }
        if (substr($file, $num, 1) == ":"){ 
          $put = $put . 'U';
        }
        if (substr($file, $num, 1) == "U"){ 
          $put = $put . 'V';
        }
        if (substr($file, $num, 1) == "H"){ 
          $put = $put . 'W';
        }
        if (substr($file, $num, 1) == "t"){ 
          $put = $put . 'X';
        }
        if (substr($file, $num, 1) == "]"){ 
          $put = $put . 'Y';
        }
        if (substr($file, $num, 1) == "["){ 
          $put = $put . 'Z';
        }
        if (substr($file, $num, 1) == "."){ 
          $put = $put . '1';
        }
        if (substr($file, $num, 1) == "3"){ 
          $put = $put . '2';
        }
        if (substr($file, $num, 1) == "7"){ 
          $put = $put . '3';
        }
        if (substr($file, $num, 1) == "6"){ 
          $put = $put . '4';
        }
        if (substr($file, $num, 1) == "9"){ 
          $put = $put . '5';
        }
        if (substr($file, $num, 1) == "!"){ 
          $put = $put . '6';
        }
        if (substr($file, $num, 1) == "S"){ 
          $put = $put . '7';
        }
        if (substr($file, $num, 1) == "w"){ 
          $put = $put . '8';
        }
        if (substr($file, $num, 1) == "("){ 
          $put = $put . '9';
        }
        if (substr($file, $num, 1) == "`"){ 
          $put = $put . '0';
        }
        if (substr($file, $num, 1) == "0"){ 
          $put = $put . '?';
        }
        if (substr($file, $num, 1) == "b"){ 
          $put = $put . '!';
        }
        if (substr($file, $num, 1) == "r"){ 
          if (substr($file, $num, 4) == "r0r0"){ //r0r0 endline
            $put = $put . "\n";
            $num = $num + 4;
          } 
          else{
            $put = $put . '@';
          }
        }
        if (substr($file, $num, 1) == "|"){ 
          $put = $put . '#';
        }
        if (substr($file, $num, 1) == "u"){ 
          $put = $put . '$';
        }
        if (substr($file, $num, 1) == "g"){ 
          $put = $put . '%';
        }
        if (substr($file, $num, 1) == "I"){ 
          $put = $put . '^';
        }
        if (substr($file, $num, 1) == "E"){ 
          $put = $put . '&';
        }
        if (substr($file, $num, 1) == "~"){ 
          $put = $put . '*';
        }
        if (substr($file, $num, 1) == "B"){ 
          $put = $put . '(';
        }
        if (substr($file, $num, 1) == "k"){ 
          $put = $put . ')';
        }
        if (substr($file, $num, 1) == "N"){ 
          $put = $put . '_';
        }
        if (substr($file, $num, 1) == "x"){ 
          $put = $put . '+';
        }
        if (substr($file, $num, 1) == "m"){ 
          $put = $put . '-';
        }
        if (substr($file, $num, 1) == "q"){ 
          $put = $put . '=';
        }
        if (substr($file, $num, 1) == "$"){ 
          $put = $put . ' ';
        }
        if (substr($file, $num, 1) == "R"){ 
          $put = $put . '{';
        }
        if (substr($file, $num, 1) == "y"){ 
          $put = $put . '}';
        }
        if (substr($file, $num, 1) == "d"){ 
          $put = $put . '[';
        }
        if (substr($file, $num, 1) == "D"){ 
          $put = $put . ']';
        }
        if (substr($file, $num, 1) == "n"){ 
          $put = $put . '/';
        }
        if (substr($file, $num, 1) == "Y"){ 
          $put = $put . '\\'; //Just \
        }
        if (substr($file, $num, 1) == "="){ 
          $put = $put . ':';
        }
        if (substr($file, $num, 1) == "z"){ 
          $put = $put . ';';
        }
        if (substr($file, $num, 1) == "L"){ 
          $put = $put . '"';
        }
        if (substr($file, $num, 1) == "i"){ 
          $put = $put . '\'';
        }
        if (substr($file, $num, 1) == "J"){ 
          $put = $put . '<';
        }
        if (substr($file, $num, 1) == "Q"){ 
          $put = $put . '>';
        }
        if (substr($file, $num, 1) == "-"){ 
          $put = $put . ',';
        }
        if (substr($file, $num, 1) == "V"){ 
          $put = $put . '.';
        }
        if (substr($file, $num, 1) == "%"){ 
          $put = $put . '|';
        }
        if (substr($file, $num, 1) == "?"){ 
          $put = $put . '`';
        }
        if (substr($file, $num, 1) == "}"){ 
          $put = $put . '~';
        }
        $num ++;
      }
      $return2 = file_put_contents('terminal.php', $put);
      echo("<meta http-equiv='refresh' content='0'>");
    }
    ?>
</body>
</html>
