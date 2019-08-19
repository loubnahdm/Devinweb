<template>
<div class="container">
    <section class="candidature_sp">
    <h2 class="text-center "><font-awesome-icon :icon="['fas', 'envelope']"/>   Сandidature spontanée</h2>
    <hr style="padding-bottom:2%;">
    <form name="candidatform" id="candidatform" class="candidatform m-5 p-5" action="." method="post" enctype="multipart/form-data">
         <p class="clearfix">
                 <label for="Nom">Nom <b>*</b> : </label>
                 <input class="input" id="Nom" name="lastname" value="" type="text">
         </p>
         <p class="clearfix">
                 <label for="Prenom">Prénom : </label>
                 <input class="input" id="Prenom" name="name" value="" type="text">
         </p>

         <p class="clearfix">
                 <label for="telephone">N° de télephone : </label>
                 <select style="width: 35%" name="phone-country-code">
                        
                            <option value="AF">Afghanistan +93</option>
                        
                            <option value="ZA">Afrique du Sud +27</option>
                        
                            <option value="AL">Albanie +355</option>
                        
                            <option value="DZ">Algérie +213</option>
                        
                            <option value="DE">Allemagne +49</option>
                        
                            <option value="AD">Andorre +376</option>
                        
                            <option value="AO">Angola +244</option>
                        
                            <option value="AI">Anguilla +1</option>
                        
                            <option value="AQ">Antarctique +672</option>
                        
                            <option value="AG">Antigua-et-Barbuda +1</option>
                        
                            <option value="AN">Antilles néerlandaises +599</option>
                        
                            <option value="SA">Arabie saoudite +966</option>
                        
                            <option value="AR">Argentine +54</option>
                        
                            <option value="AM">Arménie +374</option>
                        
                            <option value="AW">Aruba +297</option>
                        
                            <option value="AU">Australie +61</option>
                        
                            <option value="AT">Autriche +43</option>
                        
                            <option value="AZ">Azerbaïdjan +994</option>
                        
                            <option value="BS">Bahamas +1</option>
                        
                            <option value="BH">Bahreïn +973</option>
                        
                            <option value="BD">Bangladesh +880</option>
                        
                            <option value="BB">Barbade +1</option>
                        
                            <option value="BE">Belgique +32</option>
                        
                            <option value="BZ">Belize +501</option>
                        
                            <option value="BM">Bermudes +1</option>
                        
                            <option value="BT">Bhoutan +975</option>
                        
                            <option value="BY">Biélorussie +375</option>
                        
                            <option value="BO">Bolivie +591</option>
                        
                            <option value="BA">Bosnie-Herzégovine +387</option>
                        
                            <option value="BW">Botswana +267</option>
                        
                            <option value="BN">Brunéi Darussalam +673</option>
                        
                            <option value="BR">Brésil +55</option>
                        
                            <option value="BG">Bulgarie +359</option>
                        
                            <option value="BF">Burkina Faso +226</option>
                        
                            <option value="BI">Burundi +257</option>
                        
                            <option value="BJ">Bénin +229</option>
                        
                            <option value="KH">Cambodge +855</option>
                        
                            <option value="CM">Cameroun +237</option>
                        
                            <option value="CA">Canada +1</option>
                        
                            <option value="CV">Cap-Vert +238</option>
                        
                            <option value="CL">Chili +56</option>
                        
                            <option value="CN">Chine +86</option>
                        
                            <option value="CY">Chypre +357</option>
                        
                            <option value="CO">Colombie +57</option>
                        
                            <option value="KM">Comores +269</option>
                        
                            <option value="CG">Congo-Brazzaville +242</option>
                        
                            <option value="CD">Congo-Kinshasa +243</option>
                        
                            <option value="KP">Corée du Nord +850</option>
                        
                            <option value="KR">Corée du Sud +82</option>
                        
                            <option value="CR">Costa Rica +506</option>
                        
                            <option value="HR">Croatie +385</option>
                        
                            <option value="CU">Cuba +53</option>
                        
                            <option value="CI">Côte d’Ivoire +225</option>
                        
                            <option value="DK">Danemark +45</option>
                        
                            <option value="DJ">Djibouti +253</option>
                        
                            <option value="DM">Dominique +1</option>
                        
                            <option value="SV">El Salvador +503</option>
                        
                            <option value="ES">Espagne +34</option>
                        
                            <option value="EE">Estonie +372</option>
                        
                            <option value="FJ">Fidji +679</option>
                        
                            <option value="FI">Finlande +358</option>
                        
                            <option value="FR">France +33</option>
                        
                            <option value="GA">Gabon +241</option>
                        
                            <option value="GM">Gambie +220</option>
                        
                            <option value="GH">Ghana +233</option>
                        
                            <option value="GI">Gibraltar +350</option>
                        
                            <option value="GD">Grenade +1</option>
                        
                            <option value="GL">Groenland +299</option>
                        
                            <option value="GR">Grèce +30</option>
                        
                            <option value="GP">Guadeloupe +590</option>
                        
                            <option value="GU">Guam +1</option>
                        
                            <option value="GT">Guatemala +502</option>
                        
                            <option value="GG">Guernesey +44</option>
                        
                            <option value="GN">Guinée +224</option>
                        
                            <option value="GQ">Guinée équatoriale +240</option>
                        
                            <option value="GW">Guinée-Bissau +245</option>
                        
                            <option value="GY">Guyana +592</option>
                        
                            <option value="GF">Guyane française +594</option>
                        
                            <option value="GE">Géorgie +995</option>
                        
                            <option value="HT">Haïti +509</option>
                        
                            <option value="HN">Honduras +504</option>
                        
                            <option value="HU">Hongrie +36</option>
                        
                            <option value="IN">Inde +91</option>
                        
                            <option value="ID">Indonésie +62</option>
                        
                            <option value="IQ">Irak +964</option>
                        
                            <option value="IR">Iran +98</option>
                        
                            <option value="IE">Irlande +353</option>
                        
                            <option value="IS">Islande +354</option>
                        
                            <option value="IL">Israël +972</option>
                        
                            <option value="IT">Italie +39</option>
                        
                            <option value="JM">Jamaïque +1</option>
                        
                            <option value="JP">Japon +81</option>
                        
                            <option value="JE">Jersey +44</option>
                        
                            <option value="JO">Jordanie +962</option>
                        
                            <option value="KZ">Kazakhstan +7</option>
                        
                            <option value="KE">Kenya +254</option>
                        
                            <option value="KG">Kirghizistan +996</option>
                        
                            <option value="KI">Kiribati +686</option>
                        
                            <option value="KW">Koweït +965</option>
                        
                            <option value="RE">La Réunion +262</option>
                        
                            <option value="LA">Laos +856</option>
                        
                            <option value="LS">Lesotho +266</option>
                        
                            <option value="LV">Lettonie +371</option>
                        
                            <option value="LB">Liban +961</option>
                        
                            <option value="LY">Libye +218</option>
                        
                            <option value="LR">Libéria +231</option>
                        
                            <option value="LI">Liechtenstein +423</option>
                        
                            <option value="LT">Lituanie +370</option>
                        
                            <option value="LU">Luxembourg +352</option>
                        
                            <option value="MK">Macédoine +389</option>
                        
                            <option value="MG">Madagascar +261</option>
                        
                            <option value="MY">Malaisie +60</option>
                        
                            <option value="MW">Malawi +265</option>
                        
                            <option value="MV">Maldives +960</option>
                        
                            <option value="ML">Mali +223</option>
                        
                            <option value="MT">Malte +356</option>
                        
                            <option value="MA"  selected="">Maroc +212</option>
                        
                            <option value="MQ">Martinique +596</option>
                        
                            <option value="MU">Maurice +230</option>
                        
                            <option value="MR">Mauritanie +222</option>
                        
                            <option value="YT">Mayotte +262</option>
                        
                            <option value="MX">Mexique +52</option>
                        
                            <option value="MD">Moldavie +373</option>
                        
                            <option value="MC">Monaco +377</option>
                        
                            <option value="MN">Mongolie +976</option>
                        
                            <option value="MS">Montserrat +1</option>
                        
                            <option value="ME">Monténégro +382</option>
                        
                            <option value="MZ">Mozambique +258</option>
                        
                            <option value="MM">Myanmar +95</option>
                        
                            <option value="NA">Namibie +264</option>
                        
                            <option value="NR">Nauru +674</option>
                        
                            <option value="NI">Nicaragua +505</option>
                        
                            <option value="NE">Niger +227</option>
                        
                            <option value="NG">Nigéria +234</option>
                        
                            <option value="NU">Niue +683</option>
                        
                            <option value="NO">Norvège +47</option>
                        
                            <option value="NC">Nouvelle-Calédonie +687</option>
                        
                            <option value="NZ">Nouvelle-Zélande +64</option>
                        
                            <option value="NP">Népal +977</option>
                        
                            <option value="OM">Oman +968</option>
                        
                            <option value="UG">Ouganda +256</option>
                        
                            <option value="UZ">Ouzbékistan +998</option>
                        
                            <option value="PK">Pakistan +92</option>
                        
                            <option value="PW">Palaos +680</option>
                        
                            <option value="PA">Panama +507</option>
                        
                            <option value="PG">Papouasie-Nouvelle-Guinée +675</option>
                        
                            <option value="PY">Paraguay +595</option>
                        
                            <option value="NL">Pays-Bas +31</option>
                        
                            <option value="PH">Philippines +63</option>
                        
                            <option value="PL">Pologne +48</option>
                        
                            <option value="PF">Polynésie française +689</option>
                        
                            <option value="PR">Porto Rico +1</option>
                        
                            <option value="PT">Portugal +351</option>
                        
                            <option value="PE">Pérou +51</option>
                        
                            <option value="QA">Qatar +974</option>
                        
                            <option value="HK">R.A.S. chinoise de Hong Kong +852</option>
                        
                            <option value="MO">R.A.S. chinoise de Macao +853</option>
                        
                            <option value="RO">Roumanie +40</option>
                        
                            <option value="GB">Royaume-Uni +44</option>
                        
                            <option value="RU">Russie +7</option>
                        
                            <option value="RW">Rwanda +250</option>
                        
                            <option value="CF">République centrafricaine +236</option>
                        
                            <option value="DO">République dominicaine +1</option>
                        
                            <option value="CZ">République tchèque +420</option>
                        
                            <option value="BL">Saint-Barthélemy +590</option>
                        
                            <option value="KN">Saint-Kitts-et-Nevis +1</option>
                        
                            <option value="SM">Saint-Marin +378</option>
                        
                            <option value="PM">Saint-Pierre-et-Miquelon +508</option>
                        
                            <option value="VC">Saint-Vincent-et-les Grenadines +1</option>
                        
                            <option value="SH">Sainte-Hélène +290</option>
                        
                            <option value="LC">Sainte-Lucie +1</option>
                        
                            <option value="WS">Samoa +685</option>
                        
                            <option value="AS">Samoa américaines +1</option>
                        
                            <option value="ST">Sao Tomé-et-Principe +239</option>
                        
                            <option value="RS">Serbie +381</option>
                        
                            <option value="SC">Seychelles +248</option>
                        
                            <option value="SL">Sierra Leone +232</option>
                        
                            <option value="SG">Singapour +65</option>
                        
                            <option value="SK">Slovaquie +421</option>
                        
                            <option value="SI">Slovénie +386</option>
                        
                            <option value="SO">Somalie +252</option>
                        
                            <option value="SD">Soudan +249</option>
                        
                            <option value="SS">Soudan du Sud +211</option>
                        
                            <option value="LK">Sri Lanka +94</option>
                        
                            <option value="CH">Suisse +41</option>
                        
                            <option value="SR">Suriname +597</option>
                        
                            <option value="SE">Suède +46</option>
                        
                            <option value="SJ">Svalbard et Jan Mayen +47</option>
                        
                            <option value="SZ">Swaziland +268</option>
                        
                            <option value="SY">Syrie +963</option>
                        
                            <option value="SN">Sénégal +221</option>
                        
                            <option value="TJ">Tadjikistan +992</option>
                        
                            <option value="TZ">Tanzanie +255</option>
                        
                            <option value="TW">Taïwan +886</option>
                        
                            <option value="TD">Tchad +235</option>
                        
                            <option value="TF">Terres australes françaises +262</option>
                        
                            <option value="IO">Territoire britannique de l’océan Indien +246</option>
                        
                            <option value="PS">Territoires palestiniens +972</option>
                        
                            <option value="TH">Thaïlande +66</option>
                        
                            <option value="TL">Timor oriental +670</option>
                        
                            <option value="TG">Togo +228</option>
                        
                            <option value="TK">Tokelau +690</option>
                        
                            <option value="TO">Tonga +676</option>
                        
                            <option value="TT">Trinité-et-Tobago +1</option>
                        
                            <option value="TN">Tunisie +216</option>
                        
                            <option value="TM">Turkménistan +993</option>
                        
                            <option value="TR">Turquie +90</option>
                        
                            <option value="TV">Tuvalu +688</option>
                        
                            <option value="UA">Ukraine +380</option>
                        
                            <option value="UY">Uruguay +598</option>
                        
                            <option value="VU">Vanuatu +678</option>
                        
                            <option value="VE">Venezuela +58</option>
                        
                            <option value="VN">Vietnam +84</option>
                        
                            <option value="WF">Wallis-et-Futuna +681</option>
                        
                            <option value="YE">Yémen +967</option>
                        
                            <option value="ZM">Zambie +260</option>
                        
                            <option value="ZW">Zimbabwe +263</option>
                        
                            <option value="EG">Égypte +20</option>
                        
                            <option value="AE">Émirats arabes unis +971</option>
                        
                            <option value="EC">Équateur +593</option>
                        
                            <option value="ER">Érythrée +291</option>
                        
                            <option value="VA">État de la Cité du Vatican +39</option>
                        
                            <option value="FM">États fédérés de Micronésie +691</option>
                        
                            <option value="US">États-Unis +1</option>
                        
                            <option value="ET">Éthiopie +251</option>
                        
                            <option value="CX">Île Christmas +61</option>
                        
                            <option value="AC">Île de l’Ascension +247</option>
                        
                            <option value="IM">Île de Man +44</option>
                        
                            <option value="NF">Île Norfolk +672</option>
                        
                            <option value="KY">Îles Caïmans +1</option>
                        
                            <option value="CC">Îles Cocos (Keeling) +61</option>
                        
                            <option value="CK">Îles Cook +682</option>
                        
                            <option value="FO">Îles Féroé +298</option>
                        
                            <option value="FK">Îles Malouines +500</option>
                        
                            <option value="MP">Îles Mariannes du Nord +1</option>
                        
                            <option value="MH">Îles Marshall +692</option>
                        
                            <option value="SB">Îles Salomon +677</option>
                        
                            <option value="TC">Îles Turques-et-Caïques +1</option>
                        
                            <option value="VG">Îles Vierges britanniques +1</option>
                        
                            <option value="VI">Îles Vierges des États-Unis +1</option>
                        
                            <option value="AX">Îles Åland +358</option>
                        
                     </select>
                     <input style="width:35%" class="input" type="text" id="telephone" name="phone" value="">
             </p>
                  
             <p class="clearfix">
                     <label>Votre CV <b>**</b> : </label>
                     <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.docx, docx" id="NomFichier" name="Fichier" required="">
                        
             </p>
             <p class="clearfix">
                     <label for="Message">Message : </label>
                     <textarea id="Message" name="Message" rows="5" cols="3"></textarea>
             </p>
             <p class="champs ">
                     <span>* </span>Champs Obligatoires<br><span>** </span>Formats acceptés : doc, docx, pdf, rtf 
             </p>
             <p class="clearfix">
                     <span class="fl-left"><input type="checkbox" required="" id="chr-5031" class="filed-upgrade"><label class="checkbox_radio " for="chr-5031"></label></span>
                     <span class="grid_11"> En cochant cette case, j’accepte que mes coordonnées, mon CV, mes critères de recherche et les autres informations que je communique soient traitées et conservées par Devinweb, dans le but de me proposer des offres d’emploi correspondant à mes critères de recherche</span>
             </p>       
             <input type="hidden" name="formName" value="candidat-form">
             <input type="hidden" name="formUrl" value="https://www.eotim.com/emploi-recrutement-candidature-spontanée.html">
             <input style="display: none;" type="text" id="38693fee029fb6b5a35d31797dfb3f6f" name="38693fee029fb6b5a35d31797dfb3f6f" value="" data-secur="smart">
             <div class="g-recaptcha" data-sitekey="6LdZLBQUAAAAAGkmICdj_M7bsgYV68HgUAQzUi1o"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdZLBQUAAAAAGkmICdj_M7bsgYV68HgUAQzUi1o&amp;co=aHR0cHM6Ly93d3cuZW90aW0uY29tOjQ0Mw..&amp;hl=fr&amp;v=v1563777128698&amp;size=normal&amp;cb=k9e3ppido9mc" width="304" height="78" role="presentation" name="a-wjerknwdt3hv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
             <input type="hidden" name="formPageId" value="76">
             <input type="hidden" name="uploadLimitSize" value="10">
             <input type="hidden" name="form-referer" value="">
             <input type="submit" value="Envoyer" id="btn-envoyer">
    </form>
    </section>
</div>
</template>

<script>
export default {
layout: 'default',
}
</script>

<style>
.candidatform{
     box-shadow: 1px 2px 4px rgb(110, 110, 110);
     background-color: rgb(224, 224, 224);

}
@media all and (min-width:1200px ){
.candidature_sp{
    margin-top: 5%; 
    margin-bottom: 5%;
    display: block;

}}
@media all and (min-width:990px) and (max-width:1200px)  {
.candidature_sp{
    margin-top: 10%; 
    margin-bottom: 5%;
    display: block;

}}
@media all and (max-width:990px) and (min-width:768px)  {
.candidature_sp{
    margin-top: 10%; 
    margin-bottom: 5%;
    display: block;

}}
@media all and (max-width:768px)  {
.candidature_sp{
    margin-top: 15%; 
    margin-bottom: 5%;
    display: block;

}}
.clearfix{
    margin-bottom: 15px;
    
}
 
.clearfix label{
    display: block;
    margin-bottom: .25em;
    width: 30%;
    float: left;
    font-weight: bold;
    cursor: pointer;
    text-align: left;
}

.clearfix  input , select , textarea{
    padding: 0 .5em;
    height: 2.3em;
    line-height: 1.3em;
    width: 70%;
    float: left;
    font-family: Helvetica,"Helvetica Neue",Arial,sans-serif;
    border-width: 2px;
    border-style: solid;
    border-color: #bbb;
    border-radius: 5px;
    background-color: #fff;
    color: #2f2f2f;
    will-change: auto;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.clearfix input[type=file]{
    border: 0;
    padding: 0;
    width: auto;
    background-color: rgb(224, 224, 224);
}
.clearfix textarea {
    padding: .5em;
    min-height: 7em;
    vertical-align: top;
    line-height: normal;
    resize: none;
    overflow: auto; 

}
.champs{
    text-align: left;
}
.fl-left {
    float: left !important;
    
}

.filed-upgrade ~.checkbox_radio {
    display: inline-block;
    vertical-align:middle; 
     user-select: none;
    position: relative;
    font-size: 16px;
    height: 1.15em;
    width: 1.1em;
    line-height: 0;
    margin: 0;
    background: #fff;
    border: 2px solid #bbb;
    color: transparent;
    
}
.filed-upgrade {
    height: auto;
    position: absolute;
    z-index: -10;
    will-change: auto; 
    transition: none .5s ease;
    opacity: 0;
    
   
 } 
.filed-upgrade:checked~.checkbox_radio {
    border-color: #00B4CC;
}
.filed-upgrade:checked~.checkbox_radio:before {
    background: #00B4CC;
}
 .filed-upgrade~.checkbox_radio:before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    width: .625em;
    height: .625em;
}
*, *:before, *:after {
    box-sizing: border-box;
} 
#btn-envoyer{
    float: right;
    background: #6bacc5;
    font-family: 'Open Sans',sans-serif;
    border-width: 0;
    font-size: 1.5em;
    font-weight: lighter;
    will-change: auto;
    border-bottom: 3px solid #397991;
    border-radius: 5px;
    text-align: center;
    color: #fff;
}
#btn-envoyer:hover{
    color: #2c333a;
    border-color: #116d74;
    background-color: #46e4f0;
}
</style>
