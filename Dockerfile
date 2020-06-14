FROM php:7.3
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
RUN git clone https://github.com/erangakodikara/covidApi.git && cd covidApi && git checkout development
WORKDIR /app
RUN cp -r ../covidApi/* /app
RUN ls -al
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=80
EXPOSE 80
