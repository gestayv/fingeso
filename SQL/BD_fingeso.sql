/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     24-11-2016 17:24:38                          */
/*==============================================================*/


drop table if exists administrators;

drop table if exists apartments;

drop table if exists buildings;

drop table if exists surveys;

drop table if exists executors;

drop table if exists owners;

drop table if exists complaints;

drop table if exists supervisors;

/*==============================================================*/
/* Table: administrators                                        */
/*==============================================================*/
create table administrators
(
   id             int not null AUTO_INCREMENT,
   username				varchar(30),
   password				varchar(256),
   name           varchar(50),
   surname        varchar(50),
   rut            varchar(12),
   primary key (id)
);

/*==============================================================*/
/* Table: apartments                                            */
/*==============================================================*/
create table apartments
(
   id             int not null AUTO_INCREMENT,
   building_id    int not null,
   owner_id       int,
   num            int not null,
   primary key (id)
);

/*==============================================================*/
/* Table: buildings                                             */
/*==============================================================*/
create table buildings
(
   id                int not null AUTO_INCREMENT,
   supervisor_id     int not null,
   num               int not null,
   name              varchar(70) not null,
   direccion         varchar(70) not null,
   street            varchar(70) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: surveys                                              */
/*==============================================================*/
create table surveys
(
   id                   int not null AUTO_INCREMENT,
   complaint_id         int,
   status               int not null,
   description          varchar(300),
   primary key (id)
);

/*==============================================================*/
/* Table: executors                                             */
/*==============================================================*/
create table executors
(
   id                int not null AUTO_INCREMENT,
   username				varchar(30),
   password				varchar(256),
   name              varchar(50),
   surname           varchar(50),
   rut               varchar(12),
   primary key (id)
);

/*==============================================================*/
/* Table: owners                                                */
/*==============================================================*/
create table owners
(
   id                   int not null AUTO_INCREMENT,
   username				   varchar(30),
   password			    	varchar(256),
   apartment_id         int not null,
   name                 varchar(50),
   surname              varchar(50),
   rut                  varchar(50),
   primary key (id)
);

/*==============================================================*/
/* Table: complaints                                            */
/*==============================================================*/
create table complaints
(
   id                 int not null AUTO_INCREMENT,
   survey_id          int not null,
   owner_id           int,
   executor_id        int,
   priority           int,
   status             int,
   name               varchar(50),
   description        varchar(300),
   availability_date  datetime,
   emission_date      datetime,
   primary key (id)
);

/*==============================================================*/
/* Table: supervisors                                           */
/*==============================================================*/
create table supervisors
(
   id             int not null AUTO_INCREMENT,
   username			varchar(30),
   password	      varchar(256),   
   building_id    int,
   name           varchar(50),
   surname        varchar(50),
   rut            varchar(50),
   primary key (id)
);


alter table apartments add constraint FK_POSEE2 foreign key (owner_id)
      references owners (id) on delete restrict on update restrict;

alter table apartments add constraint FK_SE_COMPONE_DE foreign key (building_id)
      references buildings (id) on delete restrict on update restrict;

alter table buildings add constraint FK_ADMINISTRA2 foreign key (supervisor_id)
      references supervisors (id) on delete restrict on update restrict;

alter table surveys add constraint FK_PROCEDE_A2 foreign key (complaint_id)
      references complaints (id) on delete restrict on update restrict;

alter table owners add constraint FK_POSEE foreign key (apartment_id)
      references apartments (id) on delete restrict on update restrict;

alter table complaints add constraint FK_PROCEDE_A foreign key (survey_id)
      references surveys (id) on delete restrict on update restrict;

alter table complaints add constraint FK_REALIZA foreign key (owner_id)
      references owners (id) on delete restrict on update restrict;

alter table complaints add constraint FK_REPARA foreign key (executor_id)
      references executors (id) on delete restrict on update restrict;

alter table supervisors add constraint FK_ADMINISTRA foreign key (building_id)
      references buildings (id) on delete restrict on update restrict;


/*===============================*/
/*  Poblado de la Base de datos  */
/*===============================*/

INSERT INTO administrators(username, password, name, surname, rut) VALUES
('admin_1', 'pass_1', 'Pedro', 'Nutella', 45678945);
INSERT INTO administrators(username, password, name, surname, rut) VALUES
('admin_2', 'pass_2', 'Paula', 'Fetuccini', 95645785);

INSERT INTO supervisors(username, password, name, surname, rut) VALUES
('super_1', 'pass_1', 'Johnathan', 'Brando', 12385476);
INSERT INTO supervisors(username, password, name, surname, rut) VALUES
('super_2', 'pass_2', 'Jolyne', 'Pucci', 186224213);
INSERT INTO supervisors(username, password, name, surname, rut) VALUES
('super_3', 'pass_3', 'Jhan', 'Fando', 12312476);
INSERT INTO supervisors(username, password, name, surname, rut) VALUES
('super_4', 'pass_4', 'Jone', 'Pui', 186132213);


INSERT INTO executors(username, password, name, surname, rut) VALUES
('exec_1', 'pass_1', 'Ghawarm', 'Aesdef', 12385476);
INSERT INTO executors(username, password, name, surname, rut) VALUES
('exec_2', 'pass_2', 'Totallyar', 'Ealname', 45648678);

INSERT INTO buildings(name, street, num, supervisor_id) VALUES ('Eco futuro I', 'Radal', 066, 1);
INSERT INTO buildings(name, street, num, supervisor_id) VALUES ('Eco horizonte', 'Luis Bascuñan', 1866, 2);
INSERT INTO buildings(name, street, num, supervisor_id) VALUES ('Eco solar', 'Santa Elena', 840, 3);
INSERT INTO buildings(name, street, num, supervisor_id) VALUES ('Eco urbe II', 'Mujica', 99, 4);

UPDATE supervisors SET building_id=1 WHERE id=1;
UPDATE supervisors SET building_id=2 WHERE id=2;
UPDATE supervisors SET building_id=3 WHERE id=3;
UPDATE supervisors SET building_id=4 WHERE id=4;

INSERT INTO apartments(building_id, num) VALUES (1, 666);
INSERT INTO apartments(building_id, num) VALUES (2, 420);
INSERT INTO apartments(building_id, num) VALUES (3, 133);
INSERT INTO apartments(building_id, num) VALUES (4, 773);

INSERT INTO owners(username, password, name, surname, rut, apartment_id) VALUES
('owner_1', 'pass_1', 'Gyro', 'Zeppeli', 84576594, 1);
INSERT INTO owners(username, password, name, surname, rut, apartment_id) VALUES
('owner_2', 'pass_2', 'Mister', 'Speedwagon', 45484913, 2);
INSERT INTO owners(username, password, name, surname, rut, apartment_id) VALUES
('owner_3', 'pass_3', 'Straits', 'Evil', 48451316, 3);
INSERT INTO owners(username, password, name, surname, rut, apartment_id) VALUES
('owner_4', 'pass_4', 'Joseph', 'Joestar', 89495616, 4);

INSERT INTO surveys(description, status) VALUES ('No sé que va aquí en realidad, esto es como un placeholder
   salu2.', 1);
INSERT INTO surveys(description, status) VALUES ('Otro placeholder, supongo que podría empezar a decir datos
   interesantes acá, o mejor no.', 1);
INSERT INTO surveys(description, status) VALUES ('Buena encuesta, +10 y a favoritos', 1);
INSERT INTO surveys(description, status) VALUES ('Terrible encuesta, te deberían banear. Reportado.', 1);

INSERT INTO complaints(survey_id, owner_id, executor_id, priority, status, name, description) VALUES
(1, 3, 2, 5, 1, 'Arreglo de cañeria', 'La cañeria del baño del propietario ha sido tapada con un objeto
   desconocido, esta se debe limpiar a la brevedad.');
INSERT INTO complaints(survey_id, owner_id, executor_id, priority, status, name, description) VALUES
(2, 1, 1, 2, 2, 'Reparaciones a puerta de dormitorio', 'La puerta del dormitorio del propietario ha sido 
   dañada en un sismo, esta debe ser reemplazada.');
INSERT INTO complaints(survey_id, owner_id, executor_id, priority, status, name, description) VALUES
(1, 4, 1, 5, 0, 'Papel mural quemado', 'La cocina del propietario explotó al haber expuesto una sustancia
   inflamable a uno de los quemadores. Se debe reemplazar el papel mural del área.');