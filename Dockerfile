# Usar a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Copiar todo o conteúdo do projeto para o diretório web padrão do Apache
COPY . /var/www/html/

# Expor a porta 80 (usada pelo Apache)
EXPOSE 80

# Iniciar o servidor Apache com o PHP embutido
CMD ["apache2-foreground"]
