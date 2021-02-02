USE Collaborate;

insert into Users(name, surname, password, email) VALUES
("Jan","Napieralski", "abecadło123", "janek@wp.pl"),
("Kamil", "Paczkowski","coscoslorem456", "kamiloo@onet.pl"),
("Kuba","Stępkowski", "siddoloro678", "kubaa@interia.pl");

insert into technology(name, color) values 
("HTML", "#e34c26"),
("CSS", "#2965f1"),
("Python","#4B8BBE"),
("Java", "#f89820"),
("Javascript", "#f0db4f RGB"),
("C#", "#8442f5"),
("C++", "#42a7f5"),
("Rust", "#933A16"),
("Goolang", "#2fedd1"),
("Flutter", "#1a66bd"),
("Kotlin", "#f58f1b"),
("Django", "#124f1c"),
("React", "#2eeaff"),
("ASP.NET", "#025dcc"),
("Angular", "#dd1b16"),
("Vue.js", "#41B883"),
("PHP", "#8993be"),
("Electron", "#0c3b47"),
("Android studio", "#2dde0d");

insert into Project_category(name, color) VALUES
("Desktop", "#d92c11"),
("Mobile", "#caf035"),
("Web", "#ab0ca8"),
("Mixed", "#78d6b4"),
("Other", "#f3f56c"),
("Undefined", "#000000");

insert into Media(name) VALUES
("Github"),
("Portfolio"),
("Facebook"),
("Instagram"),
("Linkedln"),
("Twitter");
