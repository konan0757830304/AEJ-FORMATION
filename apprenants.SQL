apprenants.SQL
-- phpMyAdmin SQL Dump
- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 août 2021 à 17:04
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
COMMENCER LA TRANSACTION ;
SET fuseau horaire =  " +00:00 " ;


/* !40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */ ;
/* !40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */ ;
/* !40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */ ;
/* !40101 FIXER LES NOMS utf8mb4 */ ;

--
-- Base de données : `apprenants_igs`
--

-- ------------------------------------------------ --------

--
-- Structure de la table `apprenants`
--

CREER  TABLE ` apprenats ` (
  ` id `  int ( 10 ) NON NULL ,
  ` nom `  varchar ( 50 ) NON NULL ,
  ` prenom `  varchar ( 50 ) NON NULL ,
  ` num_aej `  int ( 10 ) NON NULL ,
  ` num_tel `  int ( 10 ) NON NULL ,
  ` email `  varchar ( 100 ) NON NULL ,
  ` fonction `  varchar ( 50 ) NON NULL ,
  ` date_inscription `  date  NON NULL ,
  ` inscription_ligne `  timestamp  NOT NULL DEFAULT current_timestamp () ON  UPDATE  current_timestamp ()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Déchargement des données de la table `apprenants`
--

INSERER DANS  ` apprenats ` ( ` id ` , ` nom ` , ` prenom ` , ` num_aej ` , ` num_tel ` , ` email ` , ` fonction ` , ` date_inscription ` , ` inscription_ligne ` ) VALEURS
( 12 , ' serge ' , ' kouassi ' , 21122221 , 7499900 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-07-28 ' , ' 2021-08-18 21:54:11 ' ),
( 13 , ' serge ' , ' kouassi ' , 21122221 , 7499900 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-07-28 ' , ' 2021-08-18 21:54:11 ' ),
( 14 , ' aaaa ' , ' zzzzzzeee ' , 11332233 , 2233443 , ' sergekouassi@gmail.com ' , ' data_ia ' , ' 2021-07-29 ' , ' 2021-08-18 21:54:11 ' ),
( 15 , ' aaaa ' , ' zzzzzzeee ' , 11332233 , 2233443 , ' sergekouassi@gmail.com ' , ' data_ia ' , ' 2021-07-29 ' , ' 2021-08-18 21:54:11 ' ),
( 16 , ' aaaa ' , ' zzzzzzeee ' , 11332233 , 2233443 , ' sergekouassi@gmail.com ' , ' data_ia ' , ' 2021-07-29 ' , ' 2021-08-18 21:54:11 ' ),
( 17 , ' ' , ' ' , 0 , 0 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-27 ' , ' 2021-08-18 21:54:11 ' ),
( 18 , ' aaaa ' , ' ' , 0 , 0 , ' ' , ' ' , ' 0000-00-00 ' , ' 2021-08-18 22:04:53 ' ),
( 19 , ' serge ' , ' kouassi ' , 2132343 , 12335 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-11 ' , ' 2021-08-19 08:51:49 ' ),
( 20 , ' aaaa ' , ' ' , 0 , 0 , ' ' , ' ' , ' 0000-00-00 ' , ' 2021-08-19 08:59:56 ' ),
( 21 , ' eeeee ' , ' eee ' , 11111222 , 333333 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-03 ' , ' 2021-08-19 09:47:17 ' ),
( 22 , ' eeeee ' , ' ' , 11 , 11111 , ' EEEEEEE@GGGG.COM ' , ' ref_dig ' , ' 0000-00-00 ' , ' 2021-08-19 11:56:00 ' ),
( 23 , ' eeeee ' , ' ' , 11 , 11111 , ' EEEEEEE@GGGG.COM ' , ' ref_dig ' , ' 0000-00-00 ' , ' 2021-08-19 14:06:18 ' ),
( 24 , ' eeeee ' , ' zzzzzz ' , 3 , 22222 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-13 ' , ' 2021-08-19 14:27:52 ' ),
( 25 , ' serge pdo ' , ' zzzzzz ' , 3 , 22222 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-05 ' , ' 2021-08-19 14:28:16 ' ),
( 26 , ' skk1 ' , ' zzzzzz ' , - 2 , 22222 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-05 ' , ' 2021-08-19 14:49:00 ' ),
( 27 , ' aaa1 ' , ' zzzzzz ' , - 1 , 22222 , ' sergekouassi@gmail.com ' , ' dev_web ' , ' 2021-08-04 ' , ' 2021-08-19 14:58:39 ' ),
( 28 , ' ssss1 ' , ' zzzzzz ' , - 1 , 22222 , ' sergekouassi@gmail.com ' , ' ref_dig ' , ' 2021-08-13 ' , ' 2021-08-19 14:59:18 ' );

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenants`
--
ALTER  TABLE  ` apprenats `
  AJOUTER LA CLÉ PRIMAIRE ( ` id ` );

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER  TABLE  ` apprenants `
  MODIFY ` id `  int ( 10 ) NON NULL AUTO_INCREMENT, AUTO_INCREMENT = 29 ;
S'ENGAGER ;

/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */ ;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */ ;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */ ;