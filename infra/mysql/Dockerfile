FROM mysql:8.0

ENV MYSQL_DATABASE=laravel_local \
  MYSQL_USER=tennis-circle \
  MYSQL_PASSWORD=daikichi852 \
  MYSQL_ROOT_PASSWORD=daikichi852 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf
