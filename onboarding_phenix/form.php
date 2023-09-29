  <?php

     require_once('vendor/autoload.php');

     \Stripe\Stripe::setApiKey('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');
              
              $customer = \Stripe\Customer::create([
                           'description' => 'sepa_debit',
                                                   ]);
              $customer_id = $customer->id;

      $setup_intent = \Stripe\SetupIntent::create([
                        'payment_method_types' => ['sepa_debit'],
                        'customer' => $customer_id,
                      ]);

      $setup_id = $setup_intent->id;

      $client_secret = $setup_intent->client_secret;
  
    ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr-FR"  class="supernova"><head>
  <script src="https://js.stripe.com/v3/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F232416481012142" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F232416481012142" title="oEmbed Form">
<meta property="og:title" content="NEW SEPA PAYMENT" >
<meta property="og:url" content="https://form.jotform.com/232416481012142" >
<meta property="og:description" content="Veuillez cliquer sur ce lien pour terminer de remplir ce formulaire." >
<meta name="slack-app-id" content="AHNMASS8M">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/landing/opengraph.png" />
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<link rel="apple-touch-icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<script>
          var favicon = document.querySelector('link[rel="shortcut icon"]');
          window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
          if(favicon && window.isDarkMode) {
              favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
          }
      </script><link rel="canonical" href="https://form.jotform.com/232416481012142" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>NEW SEPA PAYMENT</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link id="custom-font" type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/fonts/?family=Muli" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.44917&themeRevisionID=63e6805f64383509e31513f4"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.44917" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.44917" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/donationBox.css?v=3.3.44917">
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

/* Begining of advanced designer */
/* 17 - INPUT WIDTHS */
/*  20 - FORM PADDING */
.form-section {
  padding: 0px 38px;
}
.form-textbox,
.form-textarea,
li[data-type=control_fileupload] .qq-upload-button,
.signature-wrapper {
  border-width: 1px;
  width: 100% !important;
  color: #00963d;
}
/* Heights */
li[data-type="control_textbox"] div[data-layout="half"],
li[data-type="control_dropdown"] div[data-layout="half"],
li[data-type="control_email"] div[data-layout="half"],
li[data-type="control_number"] div[data-layout="half"],
li[data-type="control_phone"] div[data-layout="half"],
li[data-type="control_datetime"] div[data-layout="half"],
li[data-type="control_signature"] div[data-layout="half"] {
  width: 100% !important;
  max-width: 280px;
}
.form-label {
  margin-bottom: 10px;
  margin-right: 0;
}
/* 11 - LINE PADDING */
/* LABEL STYLE */
.form-label {
  position: relative;
}
.form-label:after {
  content: 'This label will not be seen on the form.';
  background: #FFFFE0;
  position: absolute;
  left: 0;
  top: 110%;
  width: 90px;
  opacity: 0;
  padding: 6px 9px 8px;
  border-radius: 3px;
  font-size: 10px;
  font-weight: normal;
  border: 1px solid rgba(0, 0, 0, 0.2);
}
.form-label:hover:after {
  opacity: 0.8;
}
.form-label {
  display: none;
}
.form-label:after {
  display: none;
}
/* 12 - ROUNDED INPUTS */
.form-textbox:not(#productSearch-input),
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input,
.form-pagebreak-back,
.form-pagebreak-next,
.qq-upload-button,
.signature-wrapper,
.form-error-message {
  border-radius: 6px;
}
.form-textarea {
  border-radius: 6px;
  padding: 10px;
}
.form-checkbox-item label,
.form-checkbox-item span,
.form-radio-item label,
.form-radio-item span {
  color: #007b32;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.form-radio-item:not(#foo),
.form-checkbox-item:not(#foo) {
  position: relative;
}
.form-radio-item:not(#foo) .form-radio + span:before,
.form-checkbox-item:not(#foo) .form-radio + span:before,
.form-radio-item:not(#foo) .form-radio + span:after,
.form-checkbox-item:not(#foo) .form-radio + span:after,
.form-radio-item:not(#foo) .form-radio:checked + span div:after,
.form-checkbox-item:not(#foo) .form-radio:checked + span div:after,
.form-radio-item:not(#foo) .form-checkbox + span:before,
.form-checkbox-item:not(#foo) .form-checkbox + span:before,
.form-radio-item:not(#foo) .form-checkbox + span:after,
.form-checkbox-item:not(#foo) .form-checkbox + span:after {
  display: none;
}
.form-radio-item:not(#foo) label:before,
.form-checkbox-item:not(#foo) label:before {
  background-color: transparent;
  border: 2px solid #18bd5b;
}
.form-radio-item:not(#foo) label:focus:before,
.form-checkbox-item:not(#foo) label:focus:before {
  border-color: #588ee6;
}
.form-radio-item:not(#foo) .form-radio:checked + label:after,
.form-checkbox-item:not(#foo) .form-radio:checked + label:after,
.form-radio-item:not(#foo) .form-checkbox:checked + label:after,
.form-checkbox-item:not(#foo) .form-checkbox:checked + label:after {
  background: none;
  border-bottom: 3px solid #18bd5b;
  border-left: 3px solid #18bd5b;
  display: inline-block;
  transform: rotate(-45deg) !important;
  height: 9px;
  width: 18px;
  top: 0;
  border-radius: 2px;
}
.form-radio-item:not(#foo) .form-radio-other,
.form-radio-item:not(#foo) .form-checkbox-other {
  display: inline-block;
  margin-right: 13px;
  margin-top: 0px;
}
.form-radio-item:not(#foo) .form-radio-item label,
.form-radio-item:not(#foo) .form-radio-item label {
  float: left;
  margin-left: 0;
  outline: none;
}
.form-radio-item:not(#foo) label:before {
  content: '';
  position: absolute;
  display: inline-block;
  vertical-align: baseline;
  margin-right: 4px;
  border-radius: 50%;
  left: 4px;
  width: 20px;
  height: 20px;
  cursor: pointer;
}
.form-radio-item:not(#foo) label:after {
  content: '';
  position: absolute;
  display: inline-block;
  top: 4px;
  left: 8px;
  width: 10px;
  height: 10px;
}
.form-radio-item:not(#foo) input:checked + label:after {
  opacity: 1;
}
.form-checkbox-item:not(#foo) .form-radio-other,
.form-checkbox-item:not(#foo) .form-checkbox-other {
  display: inline-block;
  margin-right: 13px;
  margin-top: 0px;
}
.form-checkbox-item:not(#foo) .form-radio-item label,
.form-checkbox-item:not(#foo) .form-radio-item label {
  float: left;
  margin-left: 0;
  outline: none;
}
.form-checkbox-item:not(#foo) label:before {
  content: '';
  position: absolute;
  display: inline-block;
  vertical-align: baseline;
  margin-right: 4px;
  border-radius: 2px;
  left: 4px;
  width: 20px;
  height: 20px;
  cursor: pointer;
}
.form-checkbox-item:not(#foo) label:after {
  content: '';
  position: absolute;
  display: inline-block;
  top: 6px;
  left: 10px;
  width: 4px;
  height: 4px;
}
.form-checkbox-item:not(#foo) input:checked + label:after {
  opacity: 1;
}
.submit-button {
  font-size: 16px;
  font-weight: normal;
  font-family: inherit;
}
.submit-button {
  min-width: 180px;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-family: "Muli", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  min-width: 128px;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
.form-header-group {
  font-family: "false", sans-serif;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  margin: 0px -38px;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  padding: 40px 52px;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: -1;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-active {
  background-color: rgba(255, 255, 255, 0);
}
/* 29 - FORM COLUMNS */
/*PREFERENCES STYLE*/
/*  1 - Preferences style */
/*  1 - FONT FAMILY */
.form-all {
  font-family: "Muli", sans-serif;
}
/* 2 - FORM WIDTH */
.form-all {
  max-width: 752px;
}
/* 5 - FONT SIZE */
.form-all {
  font-size: 16px;
}
/* 5 - input bg color */
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: rgba(255, 255, 255, 0);
}
/* 10 - LINE SPACING */
.form-line {
  margin-top: 10px;
  margin-bottom: 10px;
  padding-top: 0;
  padding-bottom: 0;
}
.supernova .form-all,
.form-all {
  background-color: #ffffff;
}
.supernova {
  background-color: rgba(0, 0, 0, 0);
}
.supernova body {
  background-color: transparent;
}
.form-all,
.form-label-top,
.form-label-left,
.form-label-right,
.form-html,
.form-checkbox-item label,
.form-radio-item label,
span.FITB .qb-checkbox-label,
span.FITB .qb-radiobox-label,
span.FITB .form-radio label,
span.FITB .form-checkbox label,
[data-blotid][data-type=checkbox] [data-labelid],
[data-blotid][data-type=radiobox] [data-labelid],
span.FITB-inptCont[data-type=checkbox] label,
span.FITB-inptCont[data-type=radiobox] label,
.form-sub-label {
  color: #00481d;
}
.form-all {
  margin: 72px auto;
}
.form-all:before {
  content: none;
}
/*PREFERENCES STYLE*/

/*__INSPECT_SEPERATOR__*/

    /* Injected CSS Code */
</style>

<script src="https://cdn02.jotfor.ms/static/prototype.forms.js?3.3.44917" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.44917" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn01.jotfor.ms/js/payments/validategateways.js?v=3.3.44917" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/js/vendor/math-processor.js?v=3.3.44917" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = true;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;

   JotForm.setCalculations([{"decimalPlaces":"2","equation":"[3900\u002F{18}]","ignoreHiddenFields":"0","insertAsText":"0","newCalculationType":"1","operands":"18","readOnly":"0","replaceText":"","resultField":"68","showBeforeInput":"0","showEmptyDecimals":"0","useCommasForDecimals":"0"},{"decimalPlaces":"2","equation":"[{18}]","ignoreHiddenFields":"0","insertAsText":"0","newCalculationType":"1","operands":"18","readOnly":"0","replaceText":"","resultField":"70","showBeforeInput":"0","showEmptyDecimals":"0","useCommasForDecimals":"0"},{"decimalPlaces":"2","equation":"{34}","ignoreHiddenFields":"0","insertAsText":"0","newCalculationType":"1","operands":"34","readOnly":"0","replaceText":"","resultField":"71","showBeforeInput":"0","showEmptyDecimals":"0","useCommasForDecimals":"0"}]);
   JotForm.setConditions([{"action":[{"id":"action_1687088268789","visibility":"Hide","isError":false,"field":"45"},{"id":"action_0_1687088251339","visibility":"Hide","isError":false,"field":"50"}],"disabled":"1","id":"1686850412259","index":"0","link":"Any","priority":"0","terms":[{"id":"term_0_1687088251339","field":"47","operator":"equals","value":"CB","isError":false},{"id":"term_1_1687088251339","field":"47","operator":"equals","value":"Virement","isError":false}],"type":"field"},{"action":[{"id":"action_1686850171377","visibility":"Show","isError":false,"field":"48"}],"disabled":"1","id":"1686850239917","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1686850171377","field":"47","operator":"equals","value":"Lenbox","isError":false}],"type":"field"},{"action":[{"id":"action_0_1686850138344","visibility":"Show","isError":false,"field":"46"}],"disabled":"1","id":"1686847967470","index":"2","link":"Any","priority":"2","terms":[{"id":"term_0_1686850138344","field":"47","operator":"equals","value":"Virement","isError":false}],"type":"field"},{"action":[{"id":"action_0_1686850160979","visibility":"ShowMultiple","isError":false,"fields":["43","45"]}],"id":"1686840152845","index":"3","link":"Any","priority":"3","terms":[{"id":"term_0_1686850160979","field":"44","operator":"equals","value":"Société","isError":false}],"type":"field"}]);	JotForm.clearFieldOnHide="dontClear";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_61').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_61').hint('Prénom');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_62').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_62').hint('NOM');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_43').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_43').hint('Nom de la société');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_50').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_50', 'IBAN' );
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
      JotForm.description('input_19', 'Numéro et Rue');
if (window.JotForm && JotForm.accessible) $('input_20').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_20').hint('Ville');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_21').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_21').hint('Code Postal');
       }, 20);
      setTimeout(function() {
          $('input_5').hint('Email');
       }, 20);
      JotForm.description('input_5', 'Pour envoyer les accès');
if (window.JotForm && JotForm.accessible) $('input_49').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_49').hint('Téléphone');
       }, 20);
      JotForm.description('input_49', 'Utile pour la coach');
      JotForm.alterTexts({"ageVerificationError":"Vous devez avoir plus de {Ageminimum} ans pour envoyer ce formulaire.","alphabetic":"Ce champ ne peut contenir que des lettres","alphanumeric":"Ce champ ne peut contenir que des lettres et des chiffres.","appointmentSelected":"Vous avez sélectionné {time} le {date}","ccDonationMinLimitError":"Le montant minimum est de {minAmount} {currency}","ccInvalidCVC":"Le numéro CVC est invalide.","ccInvalidExpireDate":"La date d&amp;#039;expiration est invalide.","ccInvalidNumber":"Le numéro de la carte bancaire est invalide.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Veuillez saisir des valeurs numériques pour le montant des dons.","ccMissingProduct":"Veuillez sélectionner au moins un produit.","characterLimitError":"Trop de caractères. La limite est de","characterMinLimitError":"Nombre de caractères insuffisant. Le nombre minimum est de","confirmClearForm":"Êtes-vous certain de vouloir supprimer les inscriptions de ce formulaire ?","confirmEmail":"L&amp;#039;adresse e-mail ne correspond pas","currency":"Ce champ ne peut contenir que des valeurs monétaires.","cyrillic":"Ce champ ne peut contenir que des caractères cyrilliques","dateInvalid":"Ce format de date n&amp;#039;est pas valide. Le format de la date est {format}","dateInvalidSeparate":"Cette date n&amp;#039;est pas valide. Veuillez saisir une date valide {element}.","dateLimited":"Cette date est indisponible.","disallowDecimals":"Veuillez entrer un nombre entier.","dragAndDropFilesHere_infoMessage":"Glissez-déposez des fichiers ici","email":"Saisir une adresse courriel valide","fillMask":"La valeur du champ doit remplir le masque.","freeEmailError":"Les comptes e-mail gratuits ne sont pas autorisés","generalError":"Ce formulaire contient des erreurs. Veuillez les corriger avant de continuer.","generalPageError":"Cette page contient des erreurs. Veuillez les corriger avant de continuer.","gradingScoreError":"Le score total devrais être moins ou égal à","incompleteFields":"Des champs obligatoires ne sont pas remplis. Veuillez les compléter.","inputCarretErrorA":"Le nombre saisi ne peut pas être inférieur à la valeur minimum :","inputCarretErrorB":"Vous ne pouvez pas saisir une valeur supérieure à la valeur maximum :","justSoldOut":"Tout juste épuisé","lessThan":"Votre note doit être inférieure ou égale à","maxDigitsError":"Le nombre de chiffres maximum autorisé est de","maxFileSize_infoMessage":"Taille de fichier max.","maxSelectionsError":"The maximum number of selections allowed is ","minSelectionsError":"Le nombre minimum requis de sélections est de","multipleFileUploads_emptyError":"{file} est vide, veuillez sélectionner à nouveau les fichiers sans celui-ci.","multipleFileUploads_fileLimitError":"Seuls {fileLimit} téléchargements de fichiers sont autorisés.","multipleFileUploads_minSizeError":"{file} est trop petite, la taille de fichier minimale est {minSizeLimit}.","multipleFileUploads_onLeave":"Les fichiers sont en cours de téléchargement, si vous quittez maintenant le téléchargement sera annulé.","multipleFileUploads_sizeError":"{file} est trop volumineux, la taille maximale d&amp;#039;un fichier est de {sizeLimit}.","multipleFileUploads_typeError":"L&amp;#039;extension de {file} est invalide. Seules les extensions {extensions} sont autorisées.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","noSlotsAvailable":"Aucun emplacement disponible","notEnoughStock":"Pas assez de stock pour la sélection actuelle","notEnoughStock_remainedItems":"Pas assez de stock pour la sélection actuelle ({count} articles restants)","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"Ce champ ne peut contenir que des valeurs numériques","pastDatesDisallowed":"La date ne doit pas se situer dans le passé.","pleaseWait":"Veuillez patienter.","required":"Ce champ est obligatoire.","requireEveryCell":"Toutes les cellules sont nécessaires.","requireEveryRow":"Chaque ligne est obligatoire.","requireOne":"Au moins un champ est requis","restrictedDomain":"This domain is not allowed","selectionSoldOut":"Sélection épuisée","slotUnavailable":"{heure} le {date} a été pris.Veuillez sélectionner un autre emplacement.","soldOut":"Epuisé","subProductItemsLeft":"({count} articles restants)","uploadExtensions":"Vous ne pouvez uploader que les fichiers suivants :","uploadFilesize":"La taille du fichier ne peut pas dépasser :","uploadFilesizemin":"la taille du fichier ne peut pas être inférieure à :","url":"Ce champ peut uniquement contenir une URL valide","validateEmail":"Vous devez valider cet e-mail","wordLimitError":"Trop de mots. Le nombre max. de mots est de","wordMinLimitError":"Nombre de mots insuffisants. Le minimum est de"});
      JotForm.alterTexts({"couponApply":"Appliquer","couponBlank":"Entrez un code coupon.","couponChange":"","couponEnter":"Entrez le code coupon","couponExpired":"Ce code de réduction a expiré, veuillez en choisir un autre.","couponInvalid":"Code de réduction invalide","couponValid":"Le code coupon est valide.","shippingShipping":"Livraison","taxTax":"Taxes","totalSubtotal":"Sous-total","totalTotal":"Total"}, true);
	/*INIT-END*/
	});

   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Prete a embarquer ?","type":"control_head"},null,{"description":"","name":"nom","qid":"3","text":"","type":"control_fullname"},null,{"description":"Pour envoyer les acces","name":"verifierEmail","qid":"5","subLabel":"","text":"Email","type":"control_email"},null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"montant","qid":"18","text":"","type":"control_radio"},{"description":"Numero et Rue","name":"adressePostale","qid":"19","subLabel":"","text":"number + street","type":"control_textbox"},{"description":"","name":"ville","qid":"20","subLabel":"","text":"city","type":"control_textbox"},{"description":"","name":"codePostal","qid":"21","subLabel":"","text":"Code Postal","type":"control_textbox"},null,null,null,null,null,null,null,{"name":"go","qid":"29","text":"GO !","type":"control_button"},null,null,null,null,{"description":"","name":"saisissezUne","qid":"34","subLabel":"","text":"PAYS","type":"control_dropdown"},null,null,null,null,null,null,null,null,{"description":"","name":"saisissezUne43","qid":"43","subLabel":"","text":"Nom de la societe","type":"control_textbox"},{"description":"","name":"saisissezUne44","qid":"44","text":"","type":"control_checkbox"},{"name":"input45","qid":"45","text":"👉 IBAN de la societe 👉 Adresse du siege","type":"control_text"},null,null,null,{"description":"Utile pour la coach","name":"saisissezUne49","qid":"49","subLabel":"","text":"Telephone","type":"control_textbox"},{"description":"","name":"saisissezUne50","qid":"50","subLabel":"","text":"IBAN","type":"control_textarea"},null,null,null,null,null,{"description":"","labelText":"","name":"image","qid":"56","text":"Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.53.02.648f1cb5e86c99.18618386","type":"control_image"},{"description":"","labelText":"","name":"image57","qid":"57","text":"Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.53.45.648f1ce7a1a280.46177145","type":"control_image"},null,{"description":"","labelText":"","name":"image59","qid":"59","text":"Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.54.50.648f1d24162368.30118492","type":"control_image"},{"description":"","labelText":"","name":"image60","qid":"60","text":"Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2015.48.06.648f1d40f05d39.73267059","type":"control_image"},{"description":"","name":"saisissezUne61","qid":"61","subLabel":"Prenom","text":"Prenom","type":"control_textbox"},{"description":"","name":"saisissezUne62","qid":"62","subLabel":"NOM","text":"NOM","type":"control_textbox"},null,null,null,null,null,{"description":"","name":"saisissezUne68","qid":"68","subLabel":"","text":"Number of cycles (monthly)","type":"control_calculation"},null,{"description":"","name":"numberOf","qid":"70","subLabel":"","text":"amount (monthly)","type":"control_calculation"},{"description":"","name":"calcul","qid":"71","subLabel":"","text":"Country code","type":"control_calculation"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" id="payment-form" autocomplete="on">

  <input type="hidden" id="customer_id" name="customer_id" 
          value="<?php echo"$customer->id"; ?>">

  <input type="hidden" id="Setup_id" name="setup_iD" 
          value="<?php echo"$setup_id"; ?>">


  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
          <div class="header-text httac htvam">
            <h3 id="header_1" class="form-header" data-component="header">Prête à embarquer ?</h3>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18" aria-hidden="true"> 
        </label>
        <div id="cid_18" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_18" data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item"></span>

   <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_0" name="amount" checked=""                                value="price_1NoenNDTzonyyZ7rueo43D2Y" data-calcvalue="3900" />
              <label id="label_input_18_0" for="input_18_0">3900€</label></span><span class="form-radio-item"><span class="dragger-item"></span>

              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_1" name="amount"                value="price_1NoenNDTzonyyZ7rfkouyFze" data-calcvalue="1950" />
              <label id="label_input_18_1" for="input_18_1">2 x 1950€</label></span><span class="form-radio-item"><span class="dragger-item"></span>

              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_2" name="amount"                value="price_1NoenNDTzonyyZ7rzsLtr2Gh" data-calcvalue="1300" /><label id="label_input_18_2" for="input_18_2">3 x 1300€</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>

              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_3" name="amount"                value="price_1NoenNDTzonyyZ7rsDYpeuaA" data-calcvalue="975" /><label id="label_input_18_3" for="input_18_3">4 x 975€</label></span><span class="form-radio-item"><span class="dragger-item"></span>

              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_4" name="amount"                value="price_1NoenNDTzonyyZ7rDtpiP3ZQ" data-calcvalue="780" /><label id="label_input_18_4" for="input_18_4">5 x 780€</label></span><span class="form-radio-item"><span class="dragger-item"></span>

              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_5" name="amount"                 value="price_1NoenNDTzonyyZ7rm1RO8ARi" data-calcvalue="650" /><label id="label_input_18_5" for="input_18_5">6 x 650€</label></span><span class="form-radio-item formRadioOther">

                <input type="radio" data-calcvalue="" class="form-radio-other form-radio" name="amount" id="other_18" value="other" tabindex="0" aria-label="Plan sur mesure" /><label id="label_other_18" style="text-indent:0" for="other_18">Plan sur mesure</label><span id="other_18_input" class="other-input-container" style="display:none">

                  <input type="text" class="form-radio-other-input form-textbox" name="q18_montant[other]" data-otherhint="Plan sur mesure" size="15" id="input_18" data-placeholder="Veuillez saisir une autre option ici" placeholder="Veuillez saisir une autre option ici" /></span></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_calculation" id="id_68"><label class="form-label form-label-top form-label-auto" id="label_68" for="input_68" aria-hidden="false"> Number of cycles (monthly) </label>
        <div id="cid_68" class="form-input-wide" data-layout="half">      

          <input type="text" data-component="calculation" data-defaultvalue="0" class="form-textbox" data-type="input-textbox" id="input_68" name="cycles" value="0" size="20" /> 

        </div>
      </li>
      <li class="form-line" data-type="control_calculation" id="id_70"><label class="form-label form-label-top form-label-auto" id="label_70" for="input_70" aria-hidden="false"> amount (monthly) </label>
        <div id="cid_70" class="form-input-wide" data-layout="half">       
          <input type="text" data-component="calculation" data-defaultvalue="0" class="form-textbox" data-type="input-textbox" id="input_70" name="sub_amount" value="0" size="20" /> 

        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_61"><label class="form-label form-label-top" id="label_61" for="input_61" aria-hidden="false"> Prénom </label>
        <div id="cid_61" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">

          <input type="text" id="input_61" name="customer_name" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Prénom" data-component="textbox" aria-labelledby="label_61 sublabel_input_61" /><label class="form-sub-label" for="input_61" id="sublabel_input_61" style="min-height:13px" aria-hidden="false">Prénom</label></span> 
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_62"><label class="form-label form-label-top" id="label_62" for="input_62" aria-hidden="false"> NOM </label>
        <div id="cid_62" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top">     

          <input type="text" id="input_62" name="customer_last_name" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="NOM" data-component="textbox" aria-labelledby="label_62 sublabel_input_62" /><label class="form-sub-label" for="input_62" id="sublabel_input_62" style="min-height:13px" aria-hidden="false">NOM</label></span> 
           </div>
      </li>
      <li class="form-line always-hidden" data-type="control_fullname" id="id_3"><label class="form-label form-label-top" id="label_3" for="first_3" aria-hidden="true"> </label>
        <div id="cid_3" class="form-input-wide always-hidden" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">

            <input type="text" id="first_3" name="q3_nom[first]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" /><label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false">Prénom</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">

              <input type="text" id="last_3" name="q3_nom[last]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" /><label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false">NOM</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_34"><label class="form-label form-label-top" id="label_34" for="input_34" aria-hidden="false"> PAYS </label>
        <div id="cid_34" class="form-input-wide" data-layout="half">      

          <select class="form-dropdown" id="input_34" name="country" style="width:310px" data-component="dropdown" aria-label="PAYS">
            <option value="">Veuillez sélectionner</option>
            <option selected="" data-calcvalue="FR" value="🇫🇷 France">🇫🇷 France</option>
            <option data-calcvalue="CH" value="🇨🇭 Suisse">🇨🇭 Suisse</option>
            <option data-calcvalue="BE" value="🇧🇪 Belgique">🇧🇪 Belgique</option>
            <option data-calcvalue="LU" value="🇱🇺 Luxembourg">🇱🇺 Luxembourg</option>
            <option data-calcvalue="ES" value="🇪🇸 Espagne">🇪🇸 Espagne</option>
            <option value="---">---</option>
            <option data-calcvalue="GB" value="🇬🇧 Royaume-Unis">🇬🇧 Royaume-Unis</option>
            <option data-calcvalue="CA" value="🇨🇦 Canada">🇨🇦 Canada</option>
            <option data-calcvalue="US" value="🇺🇸 Etats-Unis">🇺🇸 Etats-Unis</option>
          </select> </div>
      </li>
      <li class="form-line" data-type="control_calculation" id="id_71"><label class="form-label form-label-top form-label-auto" id="label_71" for="input_71" aria-hidden="false"> Country code </label>
        <div id="cid_71" class="form-input-wide" data-layout="half"> <input type="text" data-component="calculation" data-defaultvalue="0" class="form-textbox" data-type="input-textbox" id="input_71" name="q71_calcul" value="0" size="20" /> 
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_44"><label class="form-label form-label-top" id="label_44" for="input_44" aria-hidden="true"> </label>
        <div id="cid_44" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_44" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_44" class="form-checkbox" id="input_44_0" name="q44_saisissezUne44[]" value="Société" /><label id="label_input_44_0" for="input_44_0">Société</label></span></div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 always-hidden form-field-hidden" style="display:none;" data-type="control_textbox" id="id_43"><label class="form-label form-label-top" id="label_43" for="input_43" aria-hidden="false"> Nom de la société </label>
        <div id="cid_43" class="form-input-wide always-hidden" data-layout="half"> <input type="text" id="input_43" name="company_name" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Nom de la société" data-component="textbox" aria-labelledby="label_43" /> </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_50"><label class="form-label form-label-top form-label-auto" id="label_50" for="input_50" aria-hidden="false"> IBAN </label>


        <div id="cid_50" class="form-input-wide" data-layout="full"> 
        <div id="input_50" class="form-textarea" name="" style="width:648px;height:30px" data-component="textarea" aria-labelledby="label_50"></div> 
        </div>



      </li>

      <li class="form-line always-hidden form-field-hidden" style="display:none;" data-type="control_text" id="id_45">
        <div id="cid_45" class="form-input-wide always-hidden" data-layout="full">
          <div id="text_45" class="form-html" data-component="text" tabindex="0">
            <p style="text-align: left;"><strong>👉 </strong>IBAN de la société<br /> 👉 Adresse du siège</p>
          </div>
        </div>
      </li>

      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_19"><label class="form-label form-label-top" id="label_19" for="input_19" aria-hidden="false"> number + street </label>
        <div id="cid_19" class="form-input-wide" data-layout="half"> 

          <input type="text" id="input_19" name="street_address" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_19" /> 
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_20"><label class="form-label form-label-top" id="label_20" for="input_20" aria-hidden="false"> city </label>
        <div id="cid_20" class="form-input-wide" data-layout="half"> <input type="text" id="input_20" name="city" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Ville" data-component="textbox" aria-labelledby="label_20" />
         </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_21"><label class="form-label form-label-top" id="label_21" for="input_21" aria-hidden="false"> Code Postal </label>
        <div id="cid_21" class="form-input-wide" data-layout="half"> <input type="text" id="input_21" name="postal_code" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Code Postal" data-component="textbox" aria-labelledby="label_21" /> 
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_5"><label class="form-label form-label-top" id="label_5" for="input_5" aria-hidden="false"> Email </label>
        <div id="cid_5" class="form-input-wide" data-layout="half"> 

          <input type="email" id="input_5" name="email" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Email" data-component="email" aria-labelledby="label_5" /> 

        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_49"><label class="form-label form-label-top" id="label_49" for="input_49" aria-hidden="false"> Téléphone </label>
        <div id="cid_49" class="form-input-wide" data-layout="half"> 

          <input type="text" id="input_49" name="phone" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Téléphone" data-component="textbox" aria-labelledby="label_49" /> 

        </div>
      </li>
      <li class="form-line always-hidden" data-type="control_image" id="id_56">
        <div id="cid_56" class="form-input-wide always-hidden" data-layout="full">
          <div style="text-align:center"><img alt="Image-56" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/crisesdangoisse1/form_files/Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.53.02.648f1cb5e86c99.18618386.png" tabindex="0" height="11px" width="11px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line always-hidden" data-type="control_image" id="id_57">
        <div id="cid_57" class="form-input-wide always-hidden" data-layout="full">
          <div style="text-align:center"><img alt="Image-57" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/crisesdangoisse1/form_files/Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.53.45.648f1ce7a1a280.46177145.png" tabindex="0" height="11px" width="11px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line always-hidden" data-type="control_image" id="id_59">
        <div id="cid_59" class="form-input-wide always-hidden" data-layout="full">
          <div style="text-align:center"><img alt="Image-59" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/crisesdangoisse1/form_files/Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2012.54.50.648f1d24162368.30118492.png" tabindex="0" height="11px" width="11px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line always-hidden" data-type="control_image" id="id_60">
        <div id="cid_60" class="form-input-wide always-hidden" data-layout="full">
          <div style="text-align:center"><img alt="Image-60" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/crisesdangoisse1/form_files/Capture%20d%E2%80%99e%CC%81cran%202023-06-18%20a%CC%80%2015.48.06.648f1d40f05d39.73267059.png" tabindex="0" height="11px" width="11px" data-component="image" /></div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_29">
        <div id="cid_29" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_29" type="submit" class="form-submit-button form-submit-button-gradient-8 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="" data-secret="<?php echo"$client_secret"; ?>"> GO !</button>
          </div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "0";
  </script>
  <script>
    JotForm.poweredByText = "Propulsé par Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="232416481012142" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='232416481012142'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "232416481012142-232416481012142";
    }
  </script>
</form>



<script>
  var stripe = Stripe('pk_live_MTXJw0dMA0Ey1zyPbYUQOX4K00Z2Nxq6IX');
  var elements = stripe.elements();

  var style = {
  base: {
    color: '#32325d',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    },
    ':-webkit-autofill': {
      color: '#32325d',
    },
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a',
    ':-webkit-autofill': {
      color: '#fa755a',
    },
  },
};

var options = {
  style: style,
  supportedCountries: ['SEPA'],
  // Elements can use a placeholder as an example IBAN that reflects
  // the IBAN format of your customer's country. If you know your
  // customer's country, we recommend that you pass it to the Element as the
  // placeholderCountry.
  placeholderCountry: 'DE',
};

// Create an instance of the IBAN Element
var iban = elements.create('iban', options);

// Add an instance of the IBAN Element into the `iban-element` <div>
iban.mount('#input_50');

var form = document.getElementById('payment-form');
var accountholderName = document.getElementById('input_61');
var email = document.getElementById('input_5');
var line1 = document.getElementById('input_19');
var submitButton = document.getElementById('input_29');
var clientSecret = submitButton.dataset.secret;

form.addEventListener('submit', function(event) {
  event.preventDefault();
 stripe.confirmSepaDebitSetup(
    clientSecret,
    {
      payment_method: {
        sepa_debit: iban,
        billing_details: {
          name: accountholderName.value,
          email: email.value,
          
        },
      },
    }
  ).then(function(result) { 
    console.log(result);
   if (result.setupIntent) {

    fetchCall();
   // window.location.replace("https://www.enfinlibre.info/bravoel");
  };      

  if (result.error) {
    alert(result.error.message);
  };

});  
});
      
     
function fetchCall() {
  // Create a FormData object to store the variables
  var formData = new FormData();
  formData.append('customer_id', document.getElementById('customer_id').value);
  formData.append('setup_id', document.getElementById('Setup_id').value);
  formData.append('amount', document.querySelector('input[name="amount"]:checked').value);
  formData.append('cycles', document.getElementById('input_68').value);
  formData.append('sub_amount', document.getElementById('input_70').value);
  formData.append('customer_name', document.getElementById('input_61').value);
  formData.append('customer_last_name', document.getElementById('input_62').value);
  formData.append('country', document.getElementById('input_34').value);
  formData.append('country_code', document.getElementById('input_71').value);
  formData.append('street_address', document.getElementById('input_19').value);
  formData.append('city', document.getElementById('input_20').value);
  formData.append('postal_code', document.getElementById('input_21').value);
  formData.append('email', document.getElementById('input_5').value);
  formData.append('phone', document.getElementById('input_49').value);
  formData.append('company_name', document.getElementById('input_43').value);
  formData.append('iban', document.getElementById('input_50').textContent);


  fetch('customer.php', {
    method: 'POST',
    body: formData
  })
     .then(function(response) {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.text(); // Get the response text
    })
    .then(function(text) {
      if (text !== null && text.trim() !== '') {
  window.location.href = 'https://stripe.com'; // Redirect to stripe.com
}else{
        alert('Try Again or Contact Site Owner');
        location.reload(); // Refresh the page on OK click
      }
    })
    .catch(function(error) {
      console.error('Fetch error:', error);
    });
}



</script>


</body>
</html><script type="text/javascript">JotForm.forwardToEu=true;</script><script type="text/javascript">JotForm.showAlternateHIPAABadge=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.44917"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.44917"></script>
<script type="text/javascript">JotForm.isNewSACL=true;</script>