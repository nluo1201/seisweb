create table chat (
    line integer primary key autoincrement not null,
    userid char(50),
	message text,
    timeprint timestamp default current_timestamp not null
);

insert into chat(userid, message) values('SITE-ADMIN', 'WELCOME TO PUBLIC CHAT!');