projeto TCC
os arquivos presentes consistem no projeto principal do TCC.
A ideia do projeto é criar uma 'máquina de bebidas' automatizada utilizando php, arduino, html, css e javascript e os conhecimentos básicos em elétrica.

primeiramente temos o arquivo 'BebidasFesta.php' que seria a tela principal do projeto onde será feita a escolha da sua bebida.
depois da escolha, você é direcionado para uma tela de "preparação", ela apresenta um erro em php, isso é devido ao fato de não haver a porta do arduino,
utilizamos a função (fopen) para acessar a porta do arduino, como não há uma porta, ele apresenta o erro.
após isso você verá uma tela com um QRCODE(ilustrativo) que te direcionaria para a tela inicial novamente, ou apenas clique no link abaixo do mesmo.


O arquivo 'arduinocode' é onde faz o arduino funcionar, contém comandos básicos da linguagem C, os arquivos em PHP trabalham em conjunto com o arquivo do arduino,
fazendo funcionar o projeto.
