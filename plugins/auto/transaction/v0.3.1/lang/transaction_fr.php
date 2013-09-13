<?php
if (!defined("_ECRIRE_INC_VERSION")) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	'saisie_montant_titre' => 'Saisie montant',
	'saisie_montant_explication' => 'Permet la saisie d un montant libre dans le formulaire avant redirection vers API bancaire',
	'saisie_montant_selection_titre' => 'S&eacute;lection montant',
	'saisie_montant_selection_explication' => 'Permet la s&eacute;lection d un montant parmi une liste de montants propos&eacute;s dans le formulaire avant redirection vers API bancaire',
	'saisie_montant_multiplicateur_titre' => 'S&eacute;lection multiplicateur de montant',
	'saisie_montant_multiplicateur_titre2' => 'Quantit&eacute;',
	'saisie_montant_multiplicateur_explication' => 'Permet d\'ajouter un champ multiplicateur de montant pour indiquer la quantit&eacute;',
	'saisie_montant_fixe_titre' => 'Montant fixe',
	'saisie_montant_fixe_explication' => 'Associer un montant au formulaire avant redirection vers API bancaire',
	'saisie_radio_defaut_choix1' => '15 &euro;',
	'saisie_radio_defaut_choix2' => '50 &euro;',
	'saisie_radio_defaut_choix3' => '100 &euro;',
	'traiter_paiement_cic_titre' => 'Traitement du paiement CIC',
	'traiter_paiement_cic_description' => 'Envoi des donn&eacute;es de paiement vers les serveurs CIC',
	'traiter_paiement_paypal_titre' => 'Traitement du paiement Paypal',
	'traiter_paiement_paypal_description' => 'Envoi des donn&eacute;es de paiement vers Paypal',
	'traiter_paiement_paybox_titre' => 'Traitement du paiement Paybox',
	'traiter_paiement_paybox_description' => 'Envoi des donn&eacute;es de paiement vers Paybox',
	'traiter_paiement_atos_titre' => 'Traitement du paiement Atos',
	'traiter_paiement_atos_description' => 'Envoi des donn&eacute;es de paiement vers Atos',
	'traiter_paiement_cmcic_titre' => 'Traitement du paiement CMCIC',
	'traiter_paiement_cmcic_description' => 'Envoi des donn&eacute;es de paiement vers les serveurs CMCIC',
	'traiter_choix_banque_label' => 'Choix de la banque',
	'traiter_choix_banque_explication' => 'Quelle API bancaire doit &ecirc;tre appel&eacute;e ?',
	'banque_selection_1' => 'CIC',
	'banque_selection_2' => 'Cr&eacute;dit Mutuel',
	'banque_selection_3' => 'Banque OBC',
	'traiter_choix_test_label' => 'Mode API',
	'traiter_choix_test_explication' => 'Quel mode doit &ecirc;tre utilis&eacute; pour les communications avec les serveurs de la banque ?',
	'banque_test' => 'Mode de test',
	'banque_prod' => 'Mode de production',
	'traiter_paiement_cheque_titre' => 'Paiement par ch&egrave;que',
	'traiter_paiement_cheque_description' => 'Proposer le paiement par ch&egrave;que',
	'traiter_cheque_label' => 'Message de retour',
	'traiter_cheque_explication' => 'Indiquez ici le message de retour ainsi que l\'adresse &agrave; laquelle le ch&egrave;que devra &ecirc;tre envoy&eacute;',
	'traiter_cheque_message_defaut' => '<h3>Paiement par ch&egrave;que.</h3><p>Veuillez envoyer votre r&egrave;glement de %montant% &euro; par ch&egrave;que &agrave; l\'ordre de Mon Organisme et &agrave; l\'adresse :</p> <p>adresse de votre organisme</p>',
	'traiter_paiement_virement_titre' => 'Paiement par virement',
	'traiter_paiement_virement_description' => 'Proposer le paiement par virement',
	'traiter_virement_label' => 'Message de retour',
	'traiter_virement_explication' => 'Indiquez ici le message de retour ainsi que les coordonn&eacute;es du compte sur lequel le virement devra &ecirc;tre effectu&eacute;',
	'traiter_virement_message_defaut' => '<h3>Paiement par virement.</h3><p>Veuillez effectuer votre virement bancaire de %montant% &euro; sur le compte suivant :</p> <p>coordonn&eacute;es bancaires de votre organisme</p>',
	'traiter_message_cmcic' => '<h3>Paiement s&eacute;curis&eacute;</h3><p>Notre organisme met en oeuvre tous les moyens pour assurer la s&eacute;curit&eacute; et la confidentialit&eacute; des donn&eacute;es transmises en ligne.</p><p>Dans ce but, la transaction s\'effectue via l\'&eacute;tablissement bancaire qui seul dispose des informations bancaires fournies au moment du paiement.</p>',
	'traiter_message_atos' => '<h3>Paiement s&eacute;curis&eacute;</h3><p>Notre organisme met en oeuvre tous les moyens pour assurer la s&eacute;curit&eacute; et la confidentialit&eacute; des donn&eacute;es transmises en ligne.</p><p>Dans ce but, la transaction s\'effectue via l\'&eacute;tablissement bancaire qui seul dispose des informations bancaires fournies au moment du paiement.</p>',
	'traiter_message_paypal' => '<h3>Paiement Paypal</h3><p>Notre organisme met en oeuvre tous les moyens pour assurer la s&eacute;curit&eacute; et la confidentialit&eacute; des donn&eacute;es transmises en ligne.</p><p>Dans ce but, la transaction s\'effectue  sur le site de Paypal qui seul dispose des informations bancaires fournies au moment du paiement.</p>',
	'traiter_message_paybox' => '<h3>Paiement Paybox</h3><p>Notre organisme met en oeuvre tous les moyens pour assurer la s&eacute;curit&eacute; et la confidentialit&eacute; des donn&eacute;es transmises en ligne.</p><p>Dans ce but, la transaction s\'effectue  sur le site de Paybox qui seul dispose des informations bancaires fournies au moment du paiement.</p>',
	'traiter_message_cmcic_erreur' => 'Le paiement s&eacute;curis&eacute; est actuellement en mode test, aucune transaction ne sera effectu&eacute;e sur votre carte bancaire.',
	'statut_transaction_0' => 'Non pay&eacute;',
	'statut_transaction_1' => 'Pay&eacute;',
	'reference_transaction' => 'R&eacute;f&eacute;rence',
	'statut_transaction' => 'Statut',
	'merci' => 'Merci de nous avoir fait confiance',
	'texte_merci' => 'Votre r&egrave;glement a bien &eacute;t&eacute; enregistr&eacute;. Notre organisme vous remercie de votre soutien. ',
	'regret' => 'Erreur de paiement',
	'texte_regret' => 'Nous vous informons que la proc&eacute;dure de paiement n\'a pas pu aboutir, si vous n\'&ecirc;tes pas &agrave; l\'origine de cet &eacute;chec veuillez vous renseigner aupr&egrave;s de votre &eacute;tablissement bancaire.<br/><br/>Bonne navigation et &agrave; bient&ocirc;t.',
	'valider_paiement' => 'Validez le paiement',
	'traiter_choix_compte_paypal_label' => 'Compte Paypal',
	'traiter_choix_compte_paypal_explication' => 'Indiquez ici le compte paypal qui recevra les paiements.',
	'traiter_choix_compte_paypal_message_defaut' => 'compte@votredomaine.com',
	'traiter_choix_devise_paypal_label' => 'Devise',
	'traiter_choix_devise_paypal_explication' => 'Indiquez ici la devise &agrave; utiliser pour les paiements',
	'traiter_choix_devise_paypal_message_defaut' => 'EUR',
	'prix' => 'Prix',
	'montant_transaction' => 'Montant de la transaction'
	
);

?>
