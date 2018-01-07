$(function(){

  var texto = $("#phome").text();
  var paragrafo = [];
  var cont = 0;
  var inicial = 0;
  var qntp = 0;

  for(var i = 0; i< texto.length; i++ )
  {
    if(((cont-inicial) >= 60) && (texto.substring(i,i+1) == '.') || (i == (texto.length-1)))
    {
         var posicao = i+1;
         paragrafo.push(texto.substring(inicial+2, posicao));
         qntp++;
         inicial = cont;
      }
      cont++

    }

    for(var i = 0; i<qntp;i++)
    {
      $('.info').append("<p id=\"home\">"+paragrafo[i] + "</p>");
    }
    $("#phome").remove();

  });
