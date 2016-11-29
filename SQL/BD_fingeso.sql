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
   NAME_ADMIN           varchar(50),
   AGE_ADMIN            int,
   RUT_ADMIN            varchar(12),
   primary key (id)
);

/*==============================================================*/
/* Table: apartments                                          */
/*==============================================================*/
create table apartments
(
   id             int not null AUTO_INCREMENT,
   building_id          int not null,
   owner_id             int,
   DIR_DEPTO            varchar(70) not null,
   NUMERO_DEPTO         int not null,
   primary key (id)
);

/*==============================================================*/
/* Table: buildings                                              */
/*==============================================================*/
create table buildings
(
   id          int not null AUTO_INCREMENT,
   supervisor_id        int not null,
   NUM_EDIFICIO         int not null,
   DIR_EDIFICIO         varchar(70) not null,
   primary key (id)
);

/*==============================================================*/
/* Table: surveys                                              */
/*==============================================================*/
create table surveys
(
   id          int not null AUTO_INCREMENT,
   complaint_id           int,
   DESCRIPCION_ENCUESTA varchar(300),
   primary key (id)
);

/*==============================================================*/
/* Table: executors                                             */
/*==============================================================*/
create table executors
(
   id         int not null AUTO_INCREMENT,
   username				varchar(30),
   password				varchar(256),
   NAME_EX              varchar(50),
   AGE_EX               int,
   RUT_EX               varchar(12),
   primary key (id)
);

/*==============================================================*/
/* Table: owners                                                */
/*==============================================================*/
create table owners
(
   id             int not null AUTO_INCREMENT,
   username				varchar(30),
   password				varchar(256),
   apartment_id             int,
   NAME_OWNER           varchar(50),
   RUT_OWNER            varchar(50),
   AGE_OWNER            int,
   primary key (id)
);

/*==============================================================*/
/* Table: complaints                                               */
/*==============================================================*/
create table complaints
(
   id           int not null AUTO_INCREMENT,
   survey_id          int not null,
   executor_id         int,
   owner_id             int,
   DESCRIPCION_RECLAMO  varchar(300),
   PRIORIDAD_RECLAMO    int,
   primary key (id)
);

/*==============================================================*/
/* Table: supervisors                                           */
/*==============================================================*/
create table supervisors
(
   id             int not null AUTO_INCREMENT,
   username				varchar(30),
   password				varchar(256),   
   building_id          int,
   NAME_SUPER           varchar(50),
   RUT_SUPER            varchar(50),
   AGE_SUPER            int,
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

