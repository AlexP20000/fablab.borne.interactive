/* t_compte_cmp */
	INSERT INTO t_compte_cmp VALUES ('yves-quere','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('mathieu-cariou','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('alexandre-peretjatko','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('adamou-amadouSouley','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('tomo-murovec','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('anne-legars','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('pierre-yves-jaouen','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('claire-branellec','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');
	INSERT INTO t_compte_cmp VALUES ('sonia-jezequel','c9f4c517139ef5e72f903f21614258587fd23077e25c9e3d7767e831d8650453','Actif');

/* t_responsble_res */
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Quere','Yves','yves.quere@univ-brest.fr', 'yves-quere.jpeg', 'yves-quere');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Cariou','Mathieu','mathieu.cariou@univ-brest.fr', 'mathieu-cariou.jpeg', 'mathieu-cariou');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Peretjatko','Alexandre','alexandre.peretjatko@univ-brest.fr', 'alexandre-peretjatko.jpeg', 'alexandre-peretjatko');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('AmadouSouley','Adamou','Adamou.AmadouSouley@univ-brest.fr', 'adamou-amadouSouley.jpeg', 'adamou-amadouSouley');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Murovec','Tomo','Tomo.Murovec@univ-brest.fr', 'tomo-murovec.jpeg', 'tomo-murovec');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Legars','Anne','anne.legars@univ-brest.fr', 'anne-legars.jpeg', 'anne-legars');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Jaouen','Pierre-Yves','Pierre-Yves.Jaouen@univ-brest.fr', 'pierre-yves-jaouen.jpeg', 'pierre-yves-jaouen');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Branellec','Claire','Claire.branellec@univ-brest.fr', 'claire-branellec.jpeg', 'claire-branellec');
	INSERT INTO t_responsable_res(res_nom, res_prenom, res_contact, res_photo, cmp_pseudo) VALUES ('Jezequel','Sonia','Sonia.Jezequel@univ-brest.fr', 'sonia-jezequel.jpeg', 'sonia-jezequel');

/* rubric types */
	INSERT INTO t_rubrique_rub (rub_id, rub_libelle, rub_description) VALUES ('1', 'Actualité', 'Description');
	INSERT INTO t_rubrique_rub (rub_id, rub_libelle, rub_description) VALUES ('2', 'Evenement', 'Description');
	INSERT INTO t_rubrique_rub (rub_id, rub_libelle, rub_description) VALUES ('3', 'Projet', 'Description');
	INSERT INTO t_rubrique_rub (rub_id, rub_libelle, rub_description) VALUES ('4', 'Stage', 'Description');
	INSERT INTO t_rubrique_rub (rub_id, rub_libelle, rub_description) VALUES ('5', 'U.E', 'Description');

/* link types */
	INSERT INTO t_type_lien_tln(tln_libelle) VALUES ('HyperTexte');
	INSERT INTO t_type_lien_tln(tln_libelle) VALUES ('Imagette');
	INSERT INTO t_type_lien_tln(tln_libelle) VALUES ('Image');
	INSERT INTO t_type_lien_tln(tln_libelle) VALUES ('Video');

/* pages */
	INSERT INTO t_page_pag(pag_id, pag_titre, pag_description, pag_date, pag_statut, res_id, rub_id) VALUES (
		'1',
		'Panneau de leds pour course bmx',
		'<div class="description text-justify">
<h2>Voici les instructions pour faire un panneaux d&#39;affichage &agrave; LED.</h2>
<a id="eztoc8240_2_1" name="eztoc8240_2_1"></a>

<h3>Ce qu&#39;il vous faut</h3>

<ul>
	<li>Des LEDs adressables WS2812b (&nbsp;<a href="https://fr.aliexpress.com/item/1m-4m-5m-30-60leds-m-ws2812b-Waterproof-IP30-IP65-IP67-led-strip-addressable-Black-White/32391161913.html?spm=a2g0w.search0104.3.244.ksDKny&amp;ws_ab_test=searchweb0_0,searchweb201602_3_10152_10065_10151_10068_10084_10308_10083_10305_10080_10304_10082_10306_10081_10177_10110_10137_10111_10302_10060_10112_10113_10155_10114_10154_438_10056_10055_10054_10182_10059_10184_100031_10099_10078_10079_10210_10103_10073_10102_5360020_10052_10053_10142_10107_10050_10051-10050,searchweb201603_16,ppcSwitch_5&amp;btsid=8a224703-4f83-45f7-b862-ee25edb77b96&amp;algo_expid=d6f24b9e-7f28-4130-8e00-ba67e35870dd-29&amp;algo_pvid=d6f24b9e-7f28-4130-8e00-ba67e35870dd" target="_blank">de 2 &agrave; 30 &euro; chez Aliexpress</a>&nbsp;par exemple ). Il en faut un multiple de 8.</li>
	<li>Une alimentation pouvant supporter le nombre de LEDs voulu (5v/30 A que j&#39;ai trouv&eacute;&nbsp;<a href="https://fr.aliexpress.com/item/free-shipping-AC110v-220v-to-DC5V-2A-3A-4A-5A-6A-8A-10A-12A-20A-30A/32690093708.html?spm=2114.13010608.0.0.OFHa4X" target="_blank">chez Aliepxress )</a></li>
	<li>Un Arduino M&eacute;ga.</li>
	<li>Une plaque d&#39;opaline (disponible dans tout magasin de bricolage).</li>
	<li>Une grande planche qui servira de support pour les LEDs.</li>
</ul>
<a id="eztoc8240_2_2" name="eztoc8240_2_2"></a>

<h3>Principe de fonctionnement</h3>

<div class="object-right"><img alt="" src="https://uboopenfactory.univ-brest.fr/var/fablab/storage/images/media/images/bmx-scema-de-principe/4213-2-fre-FR/BMX-Scema-de-principe_large.jpg" /></div>

<p>Le panneau de LED sera pilot&eacute; par un Arduino. L&#39;Arduino recevra ses instructions d&#39;affichage d&#39;une application Java (le serveur). Des applications clientes sur smartphone Android seront capable d&#39;envoyer des instructions au serveur (comme un message d&#39;urgence pour stopper la course suite &agrave; une chute, ou la reprise de la course).</p>

<div class="separator">
<div class="separator-design">&nbsp;</div>
</div>
<a id="eztoc8240_2_3" name="eztoc8240_2_3"></a>

<h3>Calcul de l&#39;amp&eacute;rage des leds W2812b</h3>

<p>Une leds a besoin de 60 mA. Le calcul de l&#39;amp&eacute;rage n&eacute;cessaire au panneaux de Led est donc&nbsp;<strong> x 0.06 A.</strong></p>

<p>Dans notre cas il faut donc un amp&eacute;rage de : (750 x 0.06) = 45A ce qui est l&#39;amp&eacute;rage maximum qu&#39;il est possible de d&eacute;livrer.</p>

<p>Pour l&#39;amp&eacute;rage il vaut mieux prendre plus que pas assez et on trouve des alim de 5v 70A pour environ 100&euro;&nbsp;<a href="https://www.amazon.fr/200-W-400-W-commutateur-dalimentation-dadaptateur-imperm%C3%A9able/dp/B01LYAWZ5Z" target="_blank">sur amazon</a>&nbsp;ou pour 27&euro; chez&nbsp;<a href="https://fr.aliexpress.com/item/free-shipping-AC110v-220v-to-DC5V-2A-3A-4A-5A-6A-8A-10A-12A-20A-30A/32690093708.html?spm=2114.13010208.99999999.263.tsNOuy" target="_blank">aliexpress</a>.</p>
<a id="eztoc8240_2_4" name="eztoc8240_2_4"></a>

<h3>Montage des bandes de leds</h3>

<p>Le principe de c&acirc;blage est en &quot;peigne&quot; pour l&#39;alimentation (rouge et noir) et en ligne pour les datas des LEDs (vert).</p>

<p><img alt="" src="https://uboopenfactory.univ-brest.fr/var/fablab/storage/images/media/images/schema-de-cablage/3747-1-fre-FR/Schema-de-cablage_large.jpg" /></p>

<div class="separator">
<div class="separator-design">&nbsp;</div>
</div>
<a id="eztoc8240_3" name="eztoc8240_3"></a>

<h2>Programme Arduino</h2>

<p><strong>Librairie Arduino utilis&eacute;e</strong>&nbsp;: adafruit_neomatrix. Son avantage r&eacute;side dans sa simplicit&eacute; d&#39;utilisation. Il est possible d&#39;afficher du texte d&eacute;filant et des caract&egrave;res fixes, c&#39;est tout ce qu&#39;il nous faut !</p>

<p>Attention : avec cette librairie, un&nbsp;<strong>Arduino UNO ne peut allumer que 623 LEDs</strong>&nbsp;(ceci est d&ucirc; &agrave; une limitation m&eacute;moire de l&#39;Arduino)!!! C&#39;est pour cela que nous avons choisi un Arduino M&eacute;ga.</p>
<a id="eztoc8240_4" name="eztoc8240_4"></a>

<h2>Installation des logiciels</h2>

<p>Comme vue dans le principe de fonctionnement, il nous faut installer deux logiciels :</p>

<ol>
	<li><strong>Client Arduino</strong>&nbsp;: T&eacute;l&eacute;charger le sketch Arduino &agrave; partir du&nbsp;<a href="https://github.com/crawelsky/BMXArduino" target="_blank">d&eacute;p&ocirc;t Github&nbsp;</a>et le transf&eacute;rer dans l&#39;Arduino M&eacute;ga. Il faudra peut-&ecirc;tre installer les librairies Adafruit GFX, Adafruit Neomatrix (Croquis &gt; Inclure une biblioth&egrave;que &gt; G&eacute;rer les biblioth&egrave;ques &gt; Filtre : Adafruit).</li>
	<li><strong>Serveur (PC ou autre)</strong>&nbsp;: T&eacute;l&eacute;charger le programme java (<a href="https://github.com/crawelsky/BMXJavaFX/tree/master/out/artifacts/bmxOfficiel_jar" id="d2d3bd66ae8bdad6d0ac1c552964c401-3f74d66fcfb787a994c8172e0cda15d090407969" target="_self" title="This path skips through empty directories">bmxOfficiel_jar</a>) du serveur &agrave; partir du&nbsp;<a href="https://github.com/crawelsky/BMXJavaFX/" target="_blank">d&eacute;p&ocirc;t Github</a>.</li>
</ol>
<a id="eztoc8240_5" name="eztoc8240_5"></a>

<h2>Utilisation</h2>

<p>D&eacute;marrage du serveur</p>

<ol>
	<li>Connecter l&#39;Arduino et le Serveur &agrave; l&#39;aide d&#39;un c&acirc;ble RJ45 (c&acirc;ble r&eacute;seau standard). en veillant &agrave; ce que la connexion wifi du PC soit partag&eacute;e,&nbsp;<strong>m&ecirc;me si elle n&#39;est pas utilis&eacute;e</strong>&nbsp;(sinon le PC ne verra pas l&#39;Arduino via le c&acirc;ble r&eacute;seau filaire).</li>
	<li>Mettre le panneaux sous tension pour d&eacute;marrer l&#39;Arduino.</li>
	<li>Executer l&#39;application Java &quot;BMXJavaFX.jar&quot; en double cliquant dessus ou en lan&ccedil;ant la commande DOS :&nbsp;<strong>jar -j</strong>&nbsp;<strong>BMXJavaFX.jar</strong></li>
	<li>Si tout se passe bien, le panneau affiche alors &quot;OK&quot; et l&#39;application est pr&ecirc;te &agrave; fonctionner.</li>
</ol>

<p>Utilisation courante</p>

<ol>
	<li>Au lancement du serveur un flash code s&#39;affiche. Il permet de t&eacute;l&eacute;charger l&#39;application Android &agrave; installer sur les smartphones des utilisateurs.</li>
	<li>Le serveur demande ensuite si l&#39;on veut cr&eacute;er un point d&#39;acc&egrave;s WIFI. Si le PC est d&eacute;j&agrave; connect&eacute; &agrave; un r&eacute;seau WIFI, il suffira que les smartphones et le serveur soit sur le m&ecirc;me r&eacute;seau (dans ce cas il ne faut pas cocher &quot;Activez WIFI&quot;).</li>
	<li>Lorsque tout se passe bien, on voit alors dans la fen&ecirc;tre principale du serveur la liste des clients (qui doit contenir au moins &quot;Arduino&quot;) et le panneau doit afficher &quot;OK&quot;.</li>
</ol>

<p>Ajout d&#39;un client (smartphone)</p>

<ol>
	<li>Lancer l&#39;app BMXSmart,</li>
	<li>Saisir un Pseudo (c&#39;est ce nom qui apparaitra dans la liste des clients du serveur).</li>
	<li>Flasher le QR-code sur le PC pour connecter automatiquement le client au serveur (son pseudo apparait alors dans la liste des clients). Si le client n&#39;apparait pas c&#39;est probablement qu&#39;il n&#39;est pas sur le m&ecirc;me r&eacute;seau WIFI que le serveur.</li>
</ol>
</div>

<h2>Partenaires</h2>

<div class="description text-justify">
<p>Club BMX Plougastell.</p>

<p><a href="http://plougastelbmx.pagesperso-orange.fr/" target="_blank">Site</a>&nbsp;&amp; <a href="https://fr-fr.facebook.com/PlouGasteLBMX/" target="_blank">FaceBook</a></p>
</div>

<h2>Labs et projets associ&eacute;s</h2>

<div class="description text-justify">
<div class="Tags"><a href="https://uboopenfactory.univ-brest.fr/tags/view/Arduino">Arduino</a> , <a href="https://uboopenfactory.univ-brest.fr/tags/view/Capteurs">Capteurs</a></div>
</div>',
		'2018-05-28',
		'Publiée',
		'3',
		'3'
	);

/* pages links */
	INSERT INTO t_lien_lie(lie_id, lie_libelle, lie_valeur, tln_id, pag_id) VALUES ('1','Youtube','https://wwww.youtube.com','1','1');
	INSERT INTO t_lien_lie(lie_id, lie_libelle, lie_valeur, tln_id, pag_id) VALUES ('2','Facebook','https://wwww.facebook.com','1','1');
	INSERT INTO t_lien_lie(lie_id, lie_libelle, lie_valeur, tln_id, pag_id) VALUES ('3','Twitter','https://wwww.twitter.com','1','1');
	INSERT INTO t_lien_lie(lie_id, lie_libelle, lie_valeur, tln_id, pag_id) VALUES ('4','Google','https://wwww.google.com','1','1');