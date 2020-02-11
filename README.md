#### Black Sabbath: 50 anos

```Nota: ainda que o código-fonte da implementação deste material esteja licensiado sob uma licença GNU, o Estadão reserva os direitos autorais sobre o conteúdo jornalístico - ou seja, os elementos textuais – desta reportagem. As imagens utilizadas no produto são ou de divulgação ou estão sob licença Creative Commons. Os direitos de uso pertencem aos respectivos autores.```

Este repositório contém uma implementação que usa JavaScript e Python para criar um modelo de *swiper story* com elementos de áudio.

Ele foi usado no desenvolvimento de uma [reportagem sobre os 50 anos do primeiro disco do Black Sabbath](https://arte.estadao.com.br/cultura/black-sabbath-50-anos/).

No diretório `data`, o arquivo `structure.json` é usado para montar uma estrutura narrativa que usa os templates html definidos no diretório `templates`. 

O arquivo JSON é processado usando o pacote de Python [FrozenFlask](https://pythonhosted.org/Frozen-Flask/) para gerar o arquivo estático `index.php`, que contém o conteúdo de toda a reportagem.

O diretório `static` contém os arquivos de mídia e estilo, além do código em JavaScript para executar os elementos de áudio conforme o usuário avança na matéria.
