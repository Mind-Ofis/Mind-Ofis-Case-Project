<?php

if (\Illuminate\Support\Facades\Session::get('dil')=="tr"){
    //Eğer dil Türkçe ise bu kısım dönüyor.
    return [
        'anasayfa' => 'Anasayfa',
        'hakkimizda' => 'Hakkımızda',
        'urunler' => 'Ürünler',
        'sarapoloji' => 'Şarapoloji',
        'markalar' => 'Markalar',
        'kurumsal' => 'Kurumsal',
        'sektorler' => 'Sektörler',
        'haberler' => 'Haberler',
        'blog' => 'Blog',
        'avukatlar' => 'Avukatlar',
        'hizmetlerimiz' => 'Hizmetlerimiz',
        'iletisim' => 'İletişim',
        'tarihce' => 'Tarihçe',
        'nakliye' => 'Nakliye',
        'isimsoyisim' => 'İsim Soyisim',
        'ad' => 'Ad',
        'soyad' => 'Soyad',
        'adres' => 'Adres',
        'telefon' => 'Telefon',
        'email' => 'E-Posta',
        'konu' => 'Konu',
        'mesajiniz' => 'Mesajınız',
        'sifre' => 'Şifre',
        'sifretekrari' => 'Şifrenizi Tekrar Girin',
        'gizliliksozlesmesi' => 'Gizlilik Sözlesmesi',
        'kvkk' => 'KVKK',
        'servisler' => 'Servisler',
        'sektorlermetin' => 'Doğa Group olarak sizlere sunduğumuz hizmetlere gelin birlikte bakalım.',
        'incele' => 'İncele',
        'bizeulasin' => 'Bize Ulaşın',
        'bizemesajbirakin' => 'Bize Bir Mesaj Bırakın',
        'gonder' => 'Gönder',
        'emailiburayagiriniz' => 'E-Posta Adresinizi Buraya Giriniz',
        'bulten' => 'Bülten',
        'vizyonmisyon' => 'Vizyon & Misyon',
        'vizyonmisyonmetin' => 'Doğa Group, faaliyet gösterdiği her alanda topluma karşı sorumluluklarının bilincinde hareket etmeyi temel prensip olarak kabul etmektedir. Topluma karşı sorumluluğun ise insana saygıyla başladığına inanmaktadır. <br><br> Doğa Group ailesi olarak halkımıza, çalışanlarımıza ve paydaşlarımıza sabır ve sağlıklı günler diliyor; umut ve başarı dolu yıllar temenni ediyoruz.',
        'vizyonmisyonlink' => '/kurumsal/vizyon-misyon',
        'footermetin' => '20 yılı aşkın tecrübeye sahip hukuk büromuz; alanında uzman avukat kadrosu, hukuki danışmanları ve müvekkil öncelikli anlayışı ile ulusal ve uluslararası alanda şirketlere, kuruluşlara ve kişilere tam kapsamlı hukuki hizmet vermektedir.',
        'footeraciklama' => 'ŞARAPLARA İLİŞKİN BİLGİLER YER ALMAKTADIR. <br> BURADA BULUNAN HİÇBİR YAZIDA, HİÇBİR MARKANIN REKLAM VE TANITIMINA YÖNELİK <br> DEĞİLDİR VE HİÇ KİMSEYİ ALKOL KULLANIMINA ÖZENDİRMEYİ AMAÇLAMAZ.',
        'saraplar' => 'Şaraplar',
        'sonurunler' => 'Son Ürünler',
        'tumurunler' => 'Tüm Ürünler',
        'linkler' => "Linkler",
        'hosgeldiniz' => 'Hoşgeldiniz',
        'devaminioku' => 'Devamını Oku',
        'tumhizmetlerimiz' => 'Tüm Hizmetlerimiz',
        'bizidahayakindantaniyin' => 'Bizi Daha Yakından Tanıyın',
        'ofislokasyonumuz' => 'Ofis Lokasyonumuz',
        'telefonnumaralarimiz' => '24/7 Telefon Numaralarımız',
        'emailbilgilerimiz' => 'Email Bilgilerimiz',
        'uzmanlikalanlari' => 'Uzmanlık Alanları',
        'digerhaberler' => 'Diğer Haberler',
        'anasayfahakkimizdakisa' => 'Keskin Hukuk İhtiyaca Uygun Hukuki Çözümler',
        'yil' => 'Yıl',
        'aciliskapanis' => 'Açılış / Kapanış',
        'tumetkinlikler' => 'Tüm Etkinlikler',
        'etkinlikler' => 'Etkinlikler',
        'menu' => 'Menü',
        'kiralama' => 'Kiralama',
        'sanalofis' => 'Sanal Ofis',
        'girisyap' => 'Giriş Yap',
        'kayitol' => 'Kayıt Ol',
        'uyekategorisi' => 'Üyesi Olduğunuz Topluluk',
        'uyelikkategoriindirimi' => 'Topluluk İndirim Oranı',


    ];

}elseif (\Illuminate\Support\Facades\Session::get('dil')=="en") {
    //Eğer dil İngilizce seçilmişse bu kısım dönüyor.
    return [
        'anasayfa' => 'Home',
        'hakkimizda' => 'About Us',
        'kurumsal' => 'Institutional',
        'urunler' => 'Products',
        'sarapoloji' => 'Wineology',
        'markalar' => 'Brands',
        'sektorler' => 'Sectors',
        'haberler' => 'News',
        'blog' => 'Blog',
        'avukatlar' => 'Lawyers',
        'hizmetlerimiz' => 'Services',
        'iletisim' => 'Contact',
        'tarihce' => 'History',
        'nakliye' => 'Transport',
        'isimsoyisim' => 'Name Surname',
        'ad' => 'Name',
        'soyad' => 'Surname',
        'adres' => 'Address',
        'telefon' => 'Phone',
        'email' => 'Email',
        'konu' => 'Subject',
        'mesajiniz' => 'Message',
        'sifre' => 'Password',
        'sifretekrari' => 'Reenter password',
        'gizliliksozlesmesi' => 'Confidentiality Agreement',
        'kvkk' => 'KVKK',
        'servisler' => 'Services',
        'sektorlermetin' => 'Let\'s take a look at the services we offer to you as Doğa Group.',
        'incele' => 'Review',
        'bizeulasin' => 'Contact us',
        'bizemesajbirakin' => 'Leave Us A Message',
        'gonder' => 'Send',
        'emailiburayagiriniz' => 'Enter Your E-Mail Address Here',
        'bulten' => 'Bulletin',
        'vizyonmisyon' => 'Vision & Mission',
        'vizyonmisyonmetin' => 'Doğa Group accepts acting with the awareness of its responsibilities towards the society as a basic principle in every field in which it operates. He believes that responsibility towards society begins with respect for people. <br><br> As Doğa Group family, we wish patience and healthy days to our people, employees and stakeholders; We wish you many years of hope and success.',
        'vizyonmisyonlink' => '/kurumsal/vision-mission',
        'footermetin' => 'Our law firm with more than 20 years of experience; It provides full-range legal services to national and international companies, organizations and individuals with its expert lawyer staff, legal advisors and client-priority understanding.',
        'footeraciklama' => 'INFORMATION ABOUT WINES IS INCLUDED. <br> ANY ARTICLE AVAILABLE HERE IS NOT FOR ADVERTISING AND PROMOTION OF ANY BRANDS, <br> AND IT IS NOT INTENDED TO MENTION ANYONE TO USE ALCOHOL.',
        'saraplar' => 'Wines',
        'sonurunler' => 'Latest Products',
        'tumurunler' => 'All products',
        'linkler' => "Links",
        'hosgeldiniz' => 'Welcome',
        'devaminioku' => 'Read more',
        'tumhizmetlerimiz' => 'All Services',
        'bizidahayakindantaniyin' => 'Get to Know Us Better',
        'ofislokasyonumuz' => 'Our Office Location',
        'telefonnumaralarimiz' => 'Our 24/7 Phone Numbers',
        'emailbilgilerimiz' => 'Email Information',
        'uzmanlikalanlari' => 'Areas of expertise',
        'digerhaberler' => 'Other News',
        'anasayfahakkimizdakisa' => 'Keskin Law Legal Solutions Suitable for Needs',
        'yil' => 'Years',
        'aciliskapanis' => 'Opening / Closing',
        'tumetkinlikler' => 'All Events',
        'etkinlikler' => 'Events',
        'menu' => 'Menu',
        'kiralama' => 'Office Rental',
        'sanalofis' => 'Virtual office',
        'girisyap' => 'Login',
        'kayitol' => 'Register',
        'uyekategorisi' => 'Community You Are A Member Of',
        'uyelikkategoriindirimi' => 'Community Discount Rate',


    ];
}else{
    return [
        'anasayfa' => 'Anasayfa',
        'hakkimizda' => 'Hakkımızda',
        'kurumsal' => 'Kurumsal',
        'sektorler' => 'Sektörler',
        'haberler' => 'Haberler',
        'iletisim' => 'İletişim',
        'tarihce' => 'Tarihçe',
        'nakliye' => 'Nakliye',
        'isimsoyisim' => 'İsim Soyisim',
        'adres' => 'Adres',
        'telefon' => 'Telefon',
        'email' => 'E-Posta',
        'mesajiniz' => 'Mesajınız',
        'gizliliksozlesmesi' => 'Gizlilik Sözlesmesi',
        'kvkk' => 'KVKK',
        'servisler' => 'Servisler',
        'sektorlermetin' => 'Doğa Group olarak sizlere sunduğumuz hizmetlere gelin birlikte bakalım.',
        'incele' => 'İncele',
        'bizeulasin' => 'Bize Ulaşın',
        'gonder' => 'Gönder',
        'emailiburayagiriniz' => 'E-Posta Adresinizi Buraya Giriniz',
        'bulten' => 'Bülten',
        'vizyonmisyon' => 'Vizyon & Misyon',
        'vizyonmisyonmetin' => 'Doğa Group, faaliyet gösterdiği her alanda topluma karşı sorumluluklarının bilincinde hareket etmeyi temel prensip olarak kabul etmektedir. Topluma karşı sorumluluğun ise insana saygıyla başladığına inanmaktadır. <br><br> Doğa Group ailesi olarak halkımıza, çalışanlarımıza ve paydaşlarımıza sabır ve sağlıklı günler diliyor; umut ve başarı dolu yıllar temenni ediyoruz.',
        'vizyonmisyonlink' => '/kurumsal/vizyon-misyon',
        'footermetin' => 'Doğa Group ailesi olarak halkımıza, çalışanlarımıza ve paydaşlarımıza sabır ve sağlıklı günler diliyor; umut ve başarı dolu yıllar temenni ediyoruz.',
        'tarihcemetin1' => 'Türkiye\'nin en önemli iç giyim üreticisi ve markası olan Er-os Çamaşırları A.Ş. kuruldu. <br> <br> Modern Karton Sanayi ve Ticaret A.Ş., grubun kağıt sektöründeki ilk yatırımı olarak 24.000 tonluk kapasiteyle kuruldu.',
        'tarihcemetin2' => 'Doğa Group, Modern Enerji Elektrik Üretim Otoprodüktör Grubu A.Ş.ile doğalgaz ve LPG kullanarak 24MW/saatkapasiteli üretimle enerji sektörüne girdi.<br><br>Mandalya Turizm İşletmeleri A.Ş.tarafından Bodrum\'da kurulan 930 yataklı deluxe otel, Rixos Hotel Bodrumadıyla hizmete açıldı.',
        'tarihcemetin3' => 'Türki Cumhuriyetleri\'nin yanı sıra 2004 yılında Rusya, Ukrayna, Belarus, Ermenistan, Letonya, Estonya ve Litvanya\'daLacosteürünlerinin dağıtım ve mümessillik hakları alındı.<br><br>Eren Perakende, İngiltere\'nin dünyaca ünlü lüks markası Burberry\'nin Türkiye distribütörü oldu.',
        'tarihcemetin4' => 'Eren EnerjiZonguldak\'ta, 1360MW gücündeki, kömürle çalışan elektrik santrali inşaatına başladı ve bu proje içinTürkiye Garanti Bankası ve Türkiye İş Bankasıile 850 milyon dolarlık kredi anlaşması imzalandı.<br><br> Modern Karton, 400.000 ton/yıl kapasiteli makinesinin devreye girmesiyle toplam üretim kapasitesini 700.000 ton/yıla yükseltti.',


    ];
}
?>