function ex1(){	
    var idade = 0;
    var mulher = 0;
	var homem = 0;
	var contamulher = 0;
	var contahomem = 0;

        for(var i = 1 ;i <= 6; i++) {        
            var idade = parseFloat(prompt("Informe sua idade["+i+"]:"));
            var sexo = prompt("Sexo: M ou F:");
{
                if(i == 1) {
                    menoriade = idade;
                }
                } if(sexo == 'F' || sexo == 'f') {
                    contamulher += mulher;
                } else if(sexo == 'M' || sexo == 'm') {
                    contahomem += homem;
                }
            }
          echo = document.write("O número de mulheres maiores de 18 é: "+contamulher+"<BR>");
            document.write("O número de homens é: "+contahomem+"<BR>");
        }