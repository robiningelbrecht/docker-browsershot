FROM php:8.1-cli

RUN apt-get update && apt-get install -y zip unzip git curl libnss3 libatk1.0-0 \
    libcups2 libdrm2 libxkbcommon0 libxcomposite1 libxdamage1 libxrandr2 libgbm1 \
    libpango1.0.0 libcairo2 libasound2 libxfixes3 libatk-bridge2.0.0 \
    zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash
RUN apt-get install -yq nodejs build-essential

RUN npm install -g npm

RUN docker-php-ext-install sockets exif gd

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer