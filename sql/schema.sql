CREATE TABLE Time(
    time_id int primary key,
    start_time int,
    end_time int
);

CREATE TABLE Game(
    game_id int primary key,
    active bool,
    description varchar(50),
    max_participants int,
    building varchar(50),
    room_number int,
    game_type varchar(50),
    time_id int,
    foreign key (time_id) references Time(time_id)
);

CREATE TABLE Player(
    player_id int primary key,
    first_name varchar(50),
    last_name varchar(50),
    email varchar(50)
);

CREATE TABLE Registration(
    reg_id int primary key,
    start_time varchar(5),
    end_time varchar (5)
);


CREATE TABLE Plays(
    player_id int,
    reg_id int,
    game_id int,
    primary key (player_id, reg_id, game_id),
    foreign key (player_id) references Player(player_id),
    foreign key (reg_id) references Registration(reg_id),
    foreign key (game_id) references Game(game_id)
);
