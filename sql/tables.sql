
create table users (firstName varchar(16), lastName varchar(16), title varchar(4), gender char(1), street varchar(256), city varchar(128), state  varchar(16), email varchar(128), password varchar(16), md5Hash char(32),shaHash char(40), phone varchar(20), cell varchar(20),ssn varchar(20), picture varchar(256), Primary Key(email));

create table comments( thread int, commentID int,  comment text, author varchar(16), timeStmp timestamp, Primary Key(thread,commentId));