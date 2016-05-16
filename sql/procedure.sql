delimiter //

CREATE PROCEDURE search(game_name varchar(255))
begin
    select description, game_type from Game where game_type like concat('%',game_name);
end //
delimiter ;
