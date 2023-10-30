create database goodpet;
use database goodpet;

create table usuario (
  codigo int primary key auto_increment,
  nome text not null,
  email text not null,
  senha int(10)
);