DROP TABLE ED_COMPC cascade constraint PURGE;
DROP TABLE ED_JENISCOMPLAIN cascade constraint PURGE;
DROP TABLE ED_COMPB cascade constraint PURGE;
DROP TABLE ED_COMPA cascade constraint PURGE;
DROP TABLE ED_JENISSPK cascade constraint PURGE;
DROP TABLE ED_SPKB cascade constraint PURGE;
DROP TABLE ED_JENISUNIT cascade constraint PURGE;
DROP TABLE ED_SPKD cascade constraint PURGE;
DROP TABLE ED_SPKC cascade constraint PURGE;
DROP TABLE ED_PETUGAS cascade constraint PURGE;
DROP TABLE ED_SPKA cascade constraint PURGE;
DROP TABLE ED_STATUS cascade constraint PURGE;
DROP TABLE ED_USERE cascade constraint PURGE;
DROP TABLE ED_STARTSTOP cascade constraint PURGE;

create table ED_STATUS
(
	STATUS char(1) primary key not null,
	nama_status varchar2(25),
	usere char(8)
);

create table ED_JENISSPK(
	jenis_spk char(10) primary key,
	nama_spk varchar2(50),
	menit number(6,0),
	usere char(6)
);

create table ED_JENISCOMPLAIN (
	jenis_complain number(2,0) primary key,
	nama_complain varchar2(25),
	USERE char(6)
);

create table ED_SPKA (
	NO_SPK char(10)  primary key not null,
	NO_COMPLAIN char(10) not null,
	TGL_SPK DATE,
	JAM_SPK char(5),
	TGLCHAR_SPK char(8),
	PERALATAN char(200),
	STATUS Char(1) REFERENCES ED_STATUS(status),
	KODE_REPAIR Char(2),
	TGL_VENDOR DATE,
	JAM_VENDOR Char(5),
	TGLVENDOR_CHAR char(8),
	TGL_T DATE,
	JAM_T char(5),
	TGLCHAR_T char(8),
	USERE char(6),
	TGL_BATAL DATE,
	JAM_BATAL char(5),
	TGLCHAR_BATAL char(8),
	USERE_BATAL char(6)
);

create table ED_PETUGAS(
	PETUGAS char(6) primary key not null,
	NAMA_PETUGAS varchar2(25),
	USERE char(6),
	AKTIF char(1),
	JAM_KERJA number,
	JAM_KERJA_BARU number
);

create table ED_SPKC
(
	NO_SPK char(10) REFERENCES ED_SPKA(NO_SPK) not null,
	URUT Number(2,0) ,
	PETUGAS char(6) REFERENCES ED_PETUGAS(PETUGAS),
	POINT number(6,2),
	SPK number(6,2),
	AKTIF varchar2(1),
	TGL_MUTASI DATE, 
	constraint pk_ed_spkc primary key ( NO_SPK, URUT )
);

create table ED_SPKD
(
	NO_SPK  char(10) REFERENCES ED_SPKA(NO_SPK) not null,
	SUB_SPK number(2,0) not null,
	jenis_spk char(10) REFERENCES ED_JENISSPK(JENIS_SPK),
	realisasi number(6,0),
	ket varchar2(250),
	TGL_OSD DATE , 
	constraint pk_ed_spkd primary key (NO_SPK, SUB_SPK)
);

create table ED_JENISUNIT(
	JENIS_UNIT char(2) primary key not null,
	NAMA_JU varchar2(50),
	USERE char(6),
	JENIS_COMPLAIN char(1)
);

create table ED_SPKB (
	NO_SPK char(10) REFERENCES ED_SPKA(NO_SPK) not null,
	SUB_SPK number(2,0),
	jenis_unit char(2) REFERENCES ED_JENISUNIT(JENIS_UNIT),
	pekerjaan varchar2(50),
	constraint PK_ED_SPKB primary key (NO_SPK, SUB_SPK) 
);



create table ED_COMPA(
	NO_COMPLAIN char(10) primary key not null,
	TGL date,
	JAM char(5),
	TGLCHAR char(8),
	KODEDIV char(2),
	USERE char(6),
	KODE_UNIT char(4),
	STATUS char(1) REFERENCES ED_STATUS (status),
	URAIAN varchar2(150),
	TGL_S DATE,
	JAM_S char(5),
	TGL_SAH DATE,
	JAM_SAH char(5),
	KODE_REPAIR char(2),
	TGL_VENDOR date,
	JAM_VENDOR char(5),
	TGLVENDOR_CHAR char(8),
	TGL_BATAL Date,
	JAM_BATAL char(5),
	TGLCHAR_BATAL char (8),
	USERE_BATAL char(6),
	TGLCHAR_S char(8),
	USERE_S char(6), 
	TGLCHAR_SAH char(8),
	USERE_SAH char(6),
	KET_VENDOR varchar2(100),
	TGL_PENDING date,
	JAM_PENDING char(5),
	TGLCHAR_PENDING char(8),
	USERE_PENDING char (6),
	KET_PENDING varchar2(100), 
	NAMA_UC varchar2(25),
	RUSAK varchar2(1)
);

create table ED_COMPB (
	NO_COMPLAIN char(10) REFERENCES ED_COMPA(NO_COMPLAIN) not null,
	SUB_COMPLAIN number(2,0),
	JENIS_UNIT char(2) ,
	JENIS_COMPLAIN number(2,0) REFERENCES ED_JENISCOMPLAIN(JENIS_COMPLAIN),
	KET varchar2(50), 
	USERE char(6),
	CONSTRAINT PK_ED_COMPB primary key (NO_COMPLAIN, SUB_COMPLAIN),
	CONSTRAINT FK_ED_COMPB Foreign key (JENIS_UNIT) REFERENCES ED_JENISUNIT (JENIS_UNIT)
);


create table ED_COMPC (
	NO_COMPLAIN char(10) REFERENCES ED_COMPA (no_complain) not null,
	sub_complain number(2,0) not null,
	jenis_spk char(10) REFERENCES ED_JENISSPK(JENIS_SPK),
	realisasi number(6,0),
	CONSTRAINT PK_ED_COMPC primary key (NO_COMPLAIN, SUB_COMPLAIN)
);


create table ED_USERE (
	id char(10) primary key,
	username varchar2(20),
	password varchar2(20),
	nama varchar2(20),
	role varchar2(1)
);

create table ED_STARTSTOP (
	NO_SPK char(10) REFERENCES ED_SPKA(NO_SPK) not null,
	sub_spk number(2,0),
	TGL_START DATE,
	TGL_STOP DATE,
	USER_START char(6),
	USER_STOP char(6),
	KET varchar2(250),
	PETUGAS char(6) REFERENCES ED_PETUGAS(PETUGAS)
);

INSERT INTO ED_USERE (ID, USERNAME, PASSWORD, NAMA, ROLE) VALUES (1, "admin", "admin", "admin", 0);
