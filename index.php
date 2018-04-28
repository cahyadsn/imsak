<?php
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
filename  : index.php
purpose  :
create  : 2015/07/02
last edit  : 180428,180216,170329,150702
author  : cahya dsn
================================================================================
This program is free software; you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

copyright (c) 2015-2018 by cahya dsn; cahyadsn@gmail.com
================================================================================
*/
?>
<!DOCTYPE html><html lang="en"><head><title>Imsakiyah ver 0.2.2 </title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta http-equiv="content-language" content="en" /><meta name="author" content="Cahya DSN" /><meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" /><meta name="keywords" content="Imsakiyah, Islamic, Prayertime, Google maps, jQuery, plugin, mobile, iphone, ipad, android, HTML5" /><meta name="description" content="Imsakiyah ver 0.2.1 islamic imsakiyah/prayertime schedule with Qibla direction created by cahya dsn" /><meta name="robots" content="index, follow" /><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css"><script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC50pxURhVUYxNOxOSqwR_RYm2HLjnRdsA&sensor=false&libraries=geometry"></script><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script><?php $h=isset($_GET['h'])?$_GET['h']:'1439'; ?><script src="js/imsyak.php?h=<?php echo $h;?>&v=<?php echo md5(filemtime('js/imsyak.php'));?>"></script></head><body onload="initialize('Jakarta');codeAddress();"><div class="w3-container"><div class="w3-top"><div class="w3-bar w3-theme-d5"><span class="w3-bar-item">:: IMSAKv0.2</span><a href="#" class="w3-bar-item w3-button">Home</a><a href="#about" class="w3-bar-item w3-button">About</a></div></div><div class="w3-card-4"><h2>&nbsp;</h2><form name="controller" id="controller" class="w3-container w3-right"><input type="hidden" name="dir_data" id="dir_data" value="295.15" /><div class="w3-row-padding" id="search"><div class="w3-col s8"><select id="address" name="address" class="w3-select inp" onChange="codeAddress();  "><?php $cities=array("Ambarawa","Ambon","Amlapura","Amuntai","Argamakmur","Atambua","Babo","Bagan Siapiapi","Bajawa","Balige","Balik Papan","Banda Aceh","Bandarlampung","Bandung","Bangkalan","Bangkinang","Bangko","Bangli","Banjar","Banjar Baru","Banjarmasin","Banjarnegara","Bantaeng","Banten","Bantul","Banyuwangi","Barabai","Barito","Barru","Batam","Batang","Batu","Baturaja","Batusangkar","Baubau","Bekasi","Bengkalis","Bengkulu","Benteng","Biak","Bima","Binjai","Bireuen","Bitung","Blitar","Blora","Bogor","Bojonegoro","Bondowoso","Bontang","Boyolali","Brebes","Bukit Tinggi","Bulukumba","Buntok","Cepu","Ciamis","Cianjur","Cibinong","Cilacap","Cilegon","Cimahi","Cirebon","Curup","Demak","Denpasar","Depok","Dili","Dompu","Donggala","Dumai","Ende","Enggano","Enrekang","Fakfak","Garut","Gianyar","Gombong","Gorontalo","Gresik","Gunung Sitoli","Indramayu","Jakarta","Jambi","Jayapura","Jember","Jeneponto","Jepara","Jombang","Kabanjahe","Kalabahi","Kalianda","Kandangan","Karanganyar","Karawang","Kasungan","Kayuagung","Kebumen","Kediri","Kefamenanu","Kendal","Kendari","Kertosono","Ketapang","Kisaran","Klaten","Kolaka","Kota Bumi","Kota Jantho","Kota Mobagu","Kuala Kapuas","Kuala Tungkal","Kudus","Kuningan","Kupang","Kutacane","Kutoarjo","Labuhan","Lahat","Lamongan","Langsa","Larantuka","Lawang","Lhoseumawe","Limboto","Lubuk Basung","Lubuk Linggau","Lubuk Pakam","Lubuk Sikaping","Lumajang","Luwuk","Madiun","Magelang","Magetan","Majalengka","Majene","Makale","Makassar","Malang","Mamuju","Manna","Manokwari","Marabahan","Maros","Martapura","Masohi","Mataram","Maumere","Medan","Mempawah","Menado","Mentok","Merauke","Metro","Meulaboh","Mojokerto","Muara Bulian","Muara Bungo","Muara Enim","Muara Teweh","Muaro Sijunjung","Muntilan","Nabire","Negara","Nganjuk","Ngawi","Nunukan","Pacitan","Padang","Padang Panjang","Padang Sidempuan","Pagaralam","Painan","Palangkaraya","Palembang","Palopo","Palu","Pamekasan","Pandeglang","Pangkajene","Pangkajene Sidenreng","Pangkalanbun","Pangkalpinang","Panyabungan","Pare","Parepare","Pariaman","Pasuruan","Pati","Payakumbuh","Pekalongan","Pekan Baru","Pemalang","Pematangsiantar","Pendopo","Pinrang","Pleihari","Polewali","Pondok Gede","Ponorogo","Pontianak","Poso","Prabumulih","Praya","Probolinggo","Purbalingga","Purukcahu","Purwakarta","Purwodadigrobogan","Purwokerto","Purworejo","Putussibau","Raha","Rangkasbitung","Rantau","Rantauprapat","Rantepao","Rembang","Rengat","Ruteng","Sabang","Salatiga","Samarinda","Sampang","Sampit","Sanggau","Sawahlunto","Sekayu","Selong","Semarang","Sengkang","Serang","Serui","Sibolga","Sidikalang","Sidoarjo","Sigli","Singaparna","Singaraja","Singkawang","Sinjai","Sintang","Situbondo","Slawi","Sleman","Soasiu","Soe","Solo","Solok","Soreang","Sorong","Sragen","Stabat","Subang","Sukabumi","Sukoharjo","Sumbawa Besar","Sumedang","Sumenep","Sungai Liat","Sungai Penuh","Sungguminasa","Surabaya","Surakarta","Tabanan","Tahuna","Takalar","Takengon","Tanah Grogot","Tangerang","Tanjung Balai","Tanjung Enim","Tanjung Pandan","Tanjung Pinang","Tanjung Selor","Tapak Tuan","Tarakan","Tarutung","Tasikmalaya","Tebing Tinggi","Tegal","Temanggung","Tembilahan","Tenggarong","Ternate","Tolitoli","Tondano","Trenggalek","Tual","Tuban","Tulung Agung","Ujung Berung","Ungaran","Waikabubak","Waingapu","Wamena","Watampone","Watansoppeng","Wates","Wonogiri","Wonosari","Wonosobo","Yogyakarta");for($i=0;$i<count($cities);$i++){echo "<option value=\"".$cities[$i]."\"".($cities[$i]==(isset($_GET['a'])?$_GET['a']:'Jakarta')?" selected":"")." >".$cities[$i]."</option>";}?></select></div><div class="w3-col s4"><a href="#" id="inp" name="inp" title="input address" class="w3-button w3-round-xlarge w3-theme-d2">input</a></div></div><div id="searchbox" class="w3-row-padding" style="display:none;"><div class="w3-col s8"><input id="address" type="text" value="<?php echo isset($_GET['a'])?$_GET['a']:'Jakarta';?>" class="w3-input"/></div><div class="w3-col s2"><input type="button" value="Go" onclick="codeAddress();"  class="w3-button w3-round-xlarge w3-theme-d2"></div><div class="w3-col s2"><a href="#" id="inps" name="inps" title="dropdown city"  class="w3-button w3-round-xlarge w3-theme-d2">list</a></div></div></form><div style="clear:both"></div><h2 class="w3-center w3-theme-d3">Imsakiyah <?php echo $h.'H';?></h1><div style="clear:both"></div><div id="maincontent"><div style="clear:both"></div><div id="maincolumn" class='w3-center'><div id="table"></div></div></div></div><script>$(function(){$( "#inp" ).click(function(){$('div#search select#address').removeClass('inp');$('#search').hide();$('div#searchbox input#address').addClass('inp');$('#searchbox').show();});$( "#inps" ).click(function(){$('div#searchbox input#address').removeClass('inp');$('#searchbox').hide();$('div#search select#address').addClass('inp');$('#search').show();});});</script><div class="w3-card-4"><h2 class="w3-theme-d3 w3-center"><a name="#about"></a>About</h2><div id="about" class="w3-center">Imsakiyah v0.2 <br />copyright &copy; 2015 - <?php echo date('Y');?> by <a href="mailto:cahyadsn@gmail.com">cahya dsn</a><br /><p>google api v3<br />jquery 1.7.1 (cdn from google)<br />w3.css 4.0</p><p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K6YRM43CZ44UQ" class="w3-button w3-round-xlarge w3-theme-d4">donasi</a><br />BCA 1451332193<br /><br /><script src="https://apis.google.com/js/plusone.js"></script><g:plusone size="small"></g:plusone></p></div></div><h2>&nbsp;</h2><div class="w3-bottom"><div class="w3-bar w3-theme-d4 w3-center">Imsakiyah v0.2 copyright &copy; 2015 - <?php echo date('Y');?> by <a href="mailto:cahyadsn@gmail.com">cahya dsn</a><br /></div></div></div></body></html>
