--================= PARENTS =================================
INSERT INTO `categories`(`name`) VALUES
('LABELS ET DIÈTES'),
('LIEU DE PRODUCTION'),
('ORIGINE DES FÈVES'),
('TYPE DE CHOCOLAT');

--================= LABELS ET DIÈTES =========================
INSERT INTO `categories`(`parent_id`,`name`) VALUES
(1,'ARTISANAL'),
(1,'BEAN TO BAR'),
(1,'BIO'),
(1,'CRU / NON-CONCHÉ'),
(1,'ÉQUITABLE'),
(1,'EXCLUSIF'),
(1,'SANS SUCRE'),
(1,'VEGAN');

--================= LIEU DE PRODUCTION =========================
INSERT INTO `categories`(`parent_id`,`name`) VALUES
(2,'ALLEMAGNE'),
(2,'BELGIQUE'),
(2,'CANADA'),
(2,'ESPAGNE'),
(2,'FINLANDE'),
(2,'FRANCE'),
(2,'ISLANDE'),
(2,'SUISSE'),
(2,'USA');

--================= ORIGINE DES FÈVES =========================
INSERT INTO `categories`(`parent_id`,`name`) VALUES
(3,'BELIZE'),
(3,'BRÉSIL'),
(3,'CAMEROUN'),
(3,'COLOMBIE'),
(3,'CONGO'),
(3,'COSTA RICA'),
(3,'CUBA'),
(3,'ÉQUATEUR'),
(3,'HONDURAS'),
(3,'INDE'),
(3,'JAMAÏQUE'),
(3,'MADAGASCAR'),
(3,'MEXIQUE'),
(3,'NICARAGUA'),
(3,'PAPOUASIE-NOUVELLE-GUINÉE'),
(3,'PÉROU'),
(3,'RÉPUBLIQUE DOMINICAINE'),
(3,'TANZANIE'),
(3,'VENEZUELA'),
(3,'VIETNAM');
--================= TYPE DE CHOCOLAT =========================
INSERT INTO `categories`(`parent_id`,`name`) VALUES
(4,'AU LAIT'),
(4,'BLANC'),
(4,'BLOND'),
(4,'NOIR'),
(4,'NOIR D’ORIGINE'),
(4,'NOIR GRAND CRU '),
(4,'RUBIS');