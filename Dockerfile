FROM php:7.1.11-cli
MAINTAINER Milo van der Linden <milo@codefor.nl>
RUN apt-get update -y && apt-get install -y libicu-dev \
    && docker-php-ext-install intl
COPY . /clarity
WORKDIR /clarity
EXPOSE 8765
CMD bin/cake server -H 0.0.0.0
