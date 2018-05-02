create table t_compte_cmp(
	cmp_pseudo								varchar(20),
	cmp_mot_de_passe					varchar(64) not null,
	cmp_statut								varchar(7) not null,	/* Actif | Inactif */
	constraint cmp_pk 				primary key (cmp_pseudo)
) ENGINE=InnoDB;
INSERT INTO `t_compte_cmp`(`cmp_pseudo`, `cmp_mot_de_passe`, `cmp_statut`) VALUES ('shadowalker','','Actif');

create table t_responsable_res(
	res_id										integer auto_increment,
	res_nom										varchar(20) not null,
	res_prenom								varchar(20) not null,
	res_contact								text not null,
	cmp_pseudo								varchar(20) not null,
	constraint res_pk 				primary key (res_id),
	constraint res_cmp_fk			foreign key (cmp_pseudo) references t_compte_cmp (cmp_pseudo)
) ENGINE=InnoDB;

create table t_rubrique_rub(
	rub_id										integer auto_increment,
	rub_libelle								text not null,
	rub_description						text not null,
	constraint rub_pk 				primary key (rub_id)
) ENGINE=InnoDB;

create table t_contenu_cnt(
	cnt_id										integer auto_increment,
	cnt_intitule 							text not null,
	cnt_description_courte		text not null,
	cnt_description_complete	text not null,
	cnt_date									date not null,
	res_id										integer not null,
	rub_id 										integer not null,
	constraint cnt_pk 				primary key (cnt_id),
	constraint cnt_res_fk 		foreign key (res_id) references t_responsable_res (res_id),
	constraint cnt_rub_fk			foreign key (rub_id) references t_rubrique_rub (rub_id)
) ENGINE=InnoDB;

create table t_type_lien_tln(
	tln_id										integer auto_increment,
	tln_libelle 							text not null,
	constraint tln_pk					primary key (tln_id)
) ENGINE=InnoDB;

create table t_lien_lie(
	lie_id										integer auto_increment,
	lie_libelle								text not null,
	tln_id 										integer not null,
	cnt_id 										integer not null,
	constraint lie_pk					primary key (lie_id),
	constraint lie_tln_fk			foreign key (tln_id) references t_type_lien_tln (tln_id),
	constraint lie_cnt_fk			foreign key (cnt_id) references t_contenu_cnt (cnt_id)
) ENGINE=InnoDB;