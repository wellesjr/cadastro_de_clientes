
## Instalação
Para realizar rodar o projeto local e necessario ter o docker instalado em sua maquina!\
Caso nao possua instale seguindo as recomendações https://docs.docker.com/desktop/

Após a instação clone o projeto em uma pasta de sua preferencia use 
```bash
    git clone https://github.com/wellesjr/cadastro_de_clientes.git
```
Acesse a pasta src do projeto e renomei o arquivo ``.env.example`` para ``.env``\
nesta mesma pasta execute o comando\
```bash
    cd cadastro_de_clientes/src
    composer install
```
logo em sequida retorne a pasta recem clonada e execute o docker
```bash
    cd ..
    docker-compose up --build
```
Abra um novo terminal e execute a alteraçao de permissao
```bash
    cd ..
    sudo chmod -R 777 cadastro_de_clientes/
    cd cadastro_de_clientes
```

Logo em seguida acesse a pasta src novamente e execute
```bash
    php artisan key:generate
```

pronto o projeto estará disponivel no http://localhost/

## O que foi usado
Docker\
Nginx\
PHP 8.2\
Laravel 10\
Mysql 8.0

## Screenshot
![App Screenshot](https://github.com/wellesjr/cadastro_de_clientes/blob/main/imagens/image1.png)
![App Screenshot](https://github.com/wellesjr/cadastro_de_clientes/blob/main/imagens/image2.png)
![App Screenshot](https://github.com/wellesjr/cadastro_de_clientes/blob/main/imagens/image3.png)
![App Screenshot](https://github.com/wellesjr/cadastro_de_clientes/blob/main/imagens/image4.png)
