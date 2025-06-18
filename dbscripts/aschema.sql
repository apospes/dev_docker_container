drop database if exists musedb;
create database musedb;
use musedb;

drop table if exists users;
create table users (
    userid integer not null unique auto_increment,
    firstname varchar(100) not null,
    lastname varchar(100) not null,
    email varchar(100) not null
);

drop table if exists venues;
create table venues (
    venueid integer not null unique auto_increment,
    venuename varchar(100) not null,
    capacity integer not null
);