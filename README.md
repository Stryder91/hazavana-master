# Hazavana Master

## QUESTIONS A PAPA
Envoi d'email ? 

C'est quoi les champs d'une résa ? 
	- id (auto)
	- contact email
	- nom du contact
	- prénom du contact
	- téléphone
	- date d'entrée
	- date de sortie
	- nombre adultes
	- nombre enfants
	- type de chambre (chambre ou classique ou bungalow)


# Architecture

## BDD 

- table admin (pour le hash du mdp)
- table resa moramanga
- table resa lodge (foulpointe)

## Fichiers PHP

Point de départ : 
	- config.php pout se connecter à la BDD
	- fonctions.php qui appelle config.php et ajoute des échappements de caractères
	- add_resa pour ajouter une résa


# Composants

index.php -> form pour créer une résa

### Couleur principale : 
#D7B141 (jaune)

### PRIX
80k / 95k
100k / 130k