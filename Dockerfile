# Use a imagem oficial do PHP com Apache
FROM php:apache

# Instale as extensões MySQLi e PDO
RUN docker-php-ext-install mysqli pdo pdo_mysql 

# Ative o módulo rewrite do Apache
RUN a2enmod rewrite
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Copie os arquivos da aplicação para o diretório do Apache
COPY  . /var/www/html

# Exponha a porta 80 para o Apache
EXPOSE 80
