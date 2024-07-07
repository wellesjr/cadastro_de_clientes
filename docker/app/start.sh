#!/bin/sh

# Copia o projeto Laravel existente
echo "Copiando arquivos do projeto..."
cp -R /opt/Projetos/cadastro_de_clientes/src/ /var/www/html/cadastro_de_clientes

# Instala as dependências do projeto
echo "Instalando dependências do projeto..."
composer install --no-interaction --optimize-autoloader --working-dir=/var/www/html/cadastro_de_clientes/src

# Ajusta as permissões do diretório
echo "Ajustando permissões do diretório..."
chown -R www-data:www-data /var/www/html/cadastro_de_clientes

# Inicia o servidor PHP-FPM
php-fpm