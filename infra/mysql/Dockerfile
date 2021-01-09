FROM mysql:8.0

ENV MYSQL_DATABASE=tennis_circle \
  MYSQL_USER=root \
  MYSQL_PASSWORD=daikichi852 \
  MYSQL_ROOT_PASSWORD=daikichi852 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf
