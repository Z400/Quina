create database Quina;
use Quina;
drop database Quina;

create table Jogos(
Jogo int(5) unique primary key not null auto_increment
);

select * from Jogos;
insert into Jogos (Jogo) value ('12122');

