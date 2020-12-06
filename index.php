<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>UPA Norte - Chamamento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=seS4OKvk"></script>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">  
</head>
<body onselectstart="return false">
<div class="jumbotron" id="tela">
  <h1 class="display-4" id="paciente"></h1>
  <br> 
  <h3 class="display-4" id="local"></h3>
</div>

<!--<div class="jumbotron" id="prioridade">

</div>  -->

<div id="principal">
<select class="custom-select pri">
  <option selected>Selecione o paciente...</option>
  <option value="1">Marcos de Sousa da Cruz</option>
  <option value="2">José Aparecido dos Santos</option>
  <option value="3">Luciana Eliza Matos</option>
  <option value="4">Flavia Bevilacqua Nassur</option>
  <option value="3">Amanda Santos</option>
  <option value="3">Beltrano Ciclano Lobo</option>
</select>

<select class="custom-select loc">
  <option selected>Selecione o local...</option>
  <option value="1">Classificação de Risco 1</option>
  <option value="2">Classificação de Risco 2</option>
</select>
<button type="button" class="btn btn-dark btn-lg" onclick='Chamar()'>Chamar Paciente</button>
</div>
  <script type="text/javascript">

$(function() {

//Add event listener to dropdown with class radio-line
$('.pri').change(function() {

  //Get the text of the selected option. Not its value
  var text = $(this).find("option:selected").text();

  //Update the text of h1
  $('h1').text(text);

});

});

$(function() {

//Add event listener to dropdown with class radio-line
$('.loc').change(function() {

//Get the text of the selected option. Not its value
var text = $(this).find("option:selected").text();

//Update the text of h1
$('h3').text(text);

});

}); 

</script>
<script type="text/javascript">

  function Chamar() {
          var local = document.getElementById('local').innerText;
          var chamar = document.getElementById('paciente').innerText;
  responsiveVoice.speak(chamar, "Brazilian Portuguese Female",{rate: 0.88});responsiveVoice.speak(local, "Brazilian Portuguese Female",{rate: 0.95});
  
  }
</script>
<script type="text/javascript" src="som.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
