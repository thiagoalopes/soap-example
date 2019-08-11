# soap-example

Exemplo simples de um servidor soap desenvolvido em php

## Começando

Este é um pequeno webservice soap desenvolvido em php com slim framework
para ajudar iniciantes que precisam começar de algum lugar a desenvolver
com este tipo de webservice.

### Requisitos

* [Php7.3](https://windows.php.net/downloads/releases/php-7.3.8-Win32-VC15-x64.zip)
* [Visual Code](https://code.visualstudio.com/download/)
* [Mysql-8.0](https://dev.mysql.com/downloads/mysql/)
* [Postman](https://www.getpostman.com/downloads/)

### Configuração

* Clone este repositório no seu computador
* Instale o Mysql e crie o banco de dados de exemplo com script dentro do diretório do projeto
* Depois de baixar o php7.3, descompacte ele na raiz do sistema. Ex windows: C:/
* Verifique se a extensão soap está ativa (descomentada) no php.ini
* Configure o php executável nas variáveis de ambiente do sistema operacional
* Abra o diretório do projeto com o Visual Code e exiba o terminal no menu Exibir->Terminal
* Altere a URI na classe Controller.php e as informações de conexão com o banco de dados na classe Connection.php

### Testando

Após configurar o projeto, abra o Postman e faça uma Request http (POST) para: seu-host/somar ou seu-host/listar
Você deverá receber uma http Response nesse formato:

```
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
        <SOAP-ENV:Fault>
            <faultcode>SOAP-ENV:Client</faultcode>
            <faultstring>Bad Request</faultstring>
        </SOAP-ENV:Fault>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```
No Postman, selecione a aba 'body', marque a opção 'raw' e na combobox ao lado selecione XML(text/xml).

Cole no body a requisição nesse formato para seu-host/listar.

```
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
      <all/>   
     </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```
O resultado será uma lista de estados no formato xml.


Cole no body a requisição nesse formato para seu-host/somar.

```
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
      <somar>
        <a>10</a>
        <b>10</b>
      </somar>
     </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```
O resultado será um xml com o resultado a soma.

## Exemplo Online

O webservice online é um exemplo funcional deste exemplo.

No Postman, selecione a aba 'body', marque a opção 'raw' e na combobox ao lado selecione XML(text/xml).
Então submeta uma requisição POST para http://soap.thiagoalopes.com.br/somar no formato abaixo:

```
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
      <somar>
        <a>10</a>
        <b>10</b>
      </somar>
     </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

No Postman submeta uma requisição POST para http://soap.thiagoalopes.com.br/listar no formato abaixo:

```
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Body>
      <all/>   
     </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

