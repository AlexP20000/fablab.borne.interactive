create user 'admin' identified by '123456789';
grant all on open_mag.* to 'admin';

create database open_mag character set utf8 collate utf8_general_ci;
use open_mag;

create table t_compte_cmp(
	cmp_pseudo								varchar(20),
	cmp_mot_de_passe					varchar(64) not null,
	cmp_statut								varchar(7) not null,	/* Actif | Inactif */
	constraint cmp_pk 				primary key (cmp_pseudo) 
) ENGINE=InnoDB;

create table t_responsable_res(
	res_id										integer auto_increment,
	res_nom										varchar(20) not null,
	res_prenom								varchar(20) not null,
	res_contact								text not null,
	res_photo									text not null,
	cmp_pseudo								varchar(20) not null,
	constraint res_pk 				primary key (res_id),
	constraint res_cmp_fk			foreign key (cmp_pseudo) references t_compte_cmp (cmp_pseudo) on update cascade
) ENGINE=InnoDB;

create table t_rubrique_rub(
	rub_id										integer auto_increment,
	rub_libelle								text not null,
	rub_description						text not null,
	constraint rub_pk 				primary key (rub_id)
) ENGINE=InnoDB;

create table t_page_pag(
	pag_id										integer auto_increment,
	pag_titre		 							text not null,
	pag_description						text not null,
	pag_date									date,
	pag_statut								varchar(11) not null,
	res_id										integer not null,
	rub_id 										integer not null,
	constraint pag_pk 				primary key (pag_id),
	constraint pag_res_fk 		foreign key (res_id) references t_responsable_res (res_id),
	constraint pag_rub_fk			foreign key (rub_id) references t_rubrique_rub (rub_id)
) ENGINE=InnoDB;

create table t_type_lien_tln(
	tln_id										integer auto_increment,
	tln_libelle 							text not null,
	constraint tln_pk					primary key (tln_id)
) ENGINE=InnoDB;

create table t_lien_lie(
	lie_id										integer auto_increment,
	lie_libelle								text not null,
	lie_valeur								text not null,
	tln_id 										integer not null,
	pag_id 										integer not null,
	constraint lie_pk					primary key (lie_id),
	constraint lie_tln_fk			foreign key (tln_id) references t_type_lien_tln (tln_id),
	constraint lie_pag_fk			foreign key (pag_id) references t_page_pag (pag_id)
) ENGINE=InnoDB;