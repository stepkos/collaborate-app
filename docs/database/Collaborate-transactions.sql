

--transakcja na wstawianie nowych ofert
--




--transakcja na dodawanie wiadomości chatu
--
START TRANSACTION;

	INSERT INTO chat(id_recipent, id_sender, message, time_sended) VALUES
    (1,2,"Hello there general kenobi", now());
    
COMMIT;



--
/*START TRANSACTION;

    SET @user_id = (SELECT id FROM Users WHERE full_name="Jan Napieralski" AND email="janek@wp.pl");
    INSERT INTO Users_Technology(id_technology, id_user)
    SELECT id, @user_id FROM technology WHERE name="React" OR name="HTML"; 

COMMIT;
*/


--dodanie projektów użytkownika 
-- usuwanie ofert i usuwanie wszystkiego
--
--UWAGA DODAĆ DYNAMICZNE DODAWANIE TECHNOLOGII A NIE NA SZTYWNO!!!!!!!!!!!!
--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

--problem z usuwaniem i dodawaniem ofert, id

delimiter //
CREATE PROCEDURE insert_new_offert (IN id_user_inserting INT, IN category_name VARCHAR(20), IN offert_name VARCHAR(60), IN offert_description TEXT)
       BEGIN
            SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
            START TRANSACTION;

                SET @current_id_offert = (SELECT max(id) FROM offert) +1;
                SET @category_id = (SELECT id FROM project_category WHERE name=category_name);
                
                
                INSERT INTO offert(name, description, owner_id) VALUES 
                (offert_name, offert_description, id_user_inserting);
                
                IF @category_id IS NOT NULL THEN
                    INSERT INTO offert_category(id_offert, id_category) VALUES
                    (@current_id_offert, @category_id);
                ELSE
                    INSERT INTO offert_category(id_offert, id_category) VALUES
                    (@current_id_offert, 6);
                END IF;

                

                INSERT INTO offert_technology(id_technology,id_offert)
                SELECT id, @current_id_offert FROM technology WHERE name="React" OR name="HTML";  
                
            COMMIT;
    END//
delimiter ;


--do wyciągania historii czatów użytkownika
select id_sender, id_recipent, message from chat where id_sender = 1 or id_recipent = 1 order by time_sended;






--procedura do uaktualniania polubień ofert i polubień potencjalnych osób do projektu, automatycznie sprawdza też czy nastąpił "match"
-- wywoływać call insert_match(parametr1, parametr2)
-- 

--pomyśl czy nie można automatycznie dodawać collaboratora;

delimiter //
CREATE PROCEDURE insert_match (IN id_user_inserted INT, IN id_offert1 INT)
       BEGIN
            SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
            START TRANSACTION;

                SET @setmatch = (SELECT count(*) FROM liked_Offert WHERE id_offert=id_offert1 AND id_user=id_user_inserted);

                
                IF @setmatch < 2 THEN
                    INSERT INTO liked_Offert(id_user, id_offert) VALUES(id_user_inserted,id_offert1);
                END IF;
                

                IF @setmatch + 1 = 2 THEN
                    SELECT 'true' AS 'match';
                ELSE
                    SELECT 'false' AS 'match'; 
                END IF;

            COMMIT;
       END//
delimiter ;




-- można dodać dodatkowe sprawdzenie matcha i jego usunięcie
--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
delimiter //
CREATE PROCEDURE insert_collaborator (IN id_user_inserting INT, IN id_user_inserted INT, IN id_offert_destination INT)
       BEGIN
        SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
            START TRANSACTION;
               
                SET @check_ownership = (SELECT count(offert.id) FROM offert INNER JOIN users ON offert.owner_id = users.id WHERE offert.owner_id = id_user_inserting AND users.id = id_user_inserting);

                IF @check_ownership = 1 THEN
                    INSERT INTO collabolators_Offert(id_user, id_offert) VALUES (id_user_inserted, id_offert_destination);
                    SELECT 'true' AS 'done';
                ELSE    
                    SELECT 'false' AS 'done';
                END IF;      

            COMMIT;
       END//
delimiter ;




--transakcja na dodawanie poznanych technologii usera
--
delimiter //
CREATE PROCEDURE insert_technology_user (IN id_user_inserting INT, IN technology VARCHAR(40))
       BEGIN
            SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
            START TRANSACTION;
               
                SET @check_technology = (SELECT id from Technology where name=technology);

                IF @check_technology IS NOT NULL THEN
                    INSERT INTO Users_Technology(id_user, id_technology) VALUES (id_user_inserting, @check_technology);
                    SELECT 'true' AS 'done';
                ELSE
                    SELECT 'false' AS 'done';
                END IF;

            COMMIT;
       END//
delimiter ;









    

