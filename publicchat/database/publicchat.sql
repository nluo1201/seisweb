create table chat (
    line integer primary key,
    userid char(50),
	message text,
    timeprint timestamp default current_timestamp not null
);
select userid, count(*) from chat group by userid;
insert into chat(userid, message) values('SITE-ADMIN', 'WELCOME TO PUBLIC CHAT!');