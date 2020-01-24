# Set the base image
FROM alpine:3.8.4

# Install packages
RUN apk --update add wget \ 
                     composer \
                     mc \
                     bash \
                     curl \
                     git \
                     php7 \
                     php7-cli \
                     php7-curl \
                     php7-openssl \
                     php7-iconv \
                     php7-json \
                     php7-mbstring \
                     php7-phar \
                     php7-dom \
                     php7-xml \
                     php7-tokenizer \
                     && rm /var/cache/apk/*


# Create PHSSR directory
RUN mkdir opt

# Git clone
WORKDIR /opt/
RUN git clone https://github.com/keshon/phrrs.git

# Run php composer to install dependencies
WORKDIR /opt/phrrs/
RUN composer install

# Set Environment
ENV HOME /opt/phrrs/
ENV SERVER ${HOME}src/StartRobotRemoteServer.php
ENV LIBRARY ${HOME}tests/test-libraries/ExampleLibrary.php
ENV PORT 8111

# Expose port
EXPOSE $PORT

# Set Entry point and CMD
#ENTRYPOINT php ${SERVER} ${LIBRARY} ${PORT}
#ENTRYPOINT ["entrypoint.sh"]
#CMD ["php", "-S", "0.0.0.0:11996"]
CMD ["sh", "-c", "php $SERVER $LIBRARY $PORT"]


# Author
MAINTAINER Innokentiy Sokolov <don@keshon.ru>

# Extra metadata
LABEL version="1.0"
LABEL description="PHP RobotFramework Server (forked PHRRS)"