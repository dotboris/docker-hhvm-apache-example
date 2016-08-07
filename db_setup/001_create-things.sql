use app;

create table things (
  id int not null auto_increment,
  thing varchar(20) not null,
  primary key (id)
) engine=InnoDB
