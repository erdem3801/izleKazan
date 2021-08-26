<?php
//lang("videoAdverts.adverts.title")
// override core en language system validation or define your own en language validation message
return [
    'bannerAdvers' => [
        'link' => 'Site Linki ',
        'linkValue' => 'https://www.aksiyonyazilim.com.',
        
        'pageTitle' => 'Banner Oluştur',
        'formTitle' => 'Ana Parametreler',
        'marcos'=> '[marcos]',
        'marcosText'=>'[[site_id] - 
        kullanıcının tıkladığı web sitesinin kimliğiyle değiştirilir. Tıklama bir uzantıdan yapılırsa, bu makrolar, dizenin başında u harfiyle kullanıcı kimliğiyle değiştirilir. Örneğin, u123.
        [ad_id] - Reklam kimliğiyle değiştirildi.
        [cat_id] - Kategori kimliğiyle değiştirildi.
        [source] - Kaynak türü ile değiştirir (ext-extension, net-advertising network).
        [geo] - İki harfli biçimde ülke koduyla değiştirildi.',

      
        'groupTitle' => 'Grup',
        'groupOption' => 'Grup Yok',
        'bannerOption' => 'banners',

        'priceTitle' => 'Ödeme Ayarları',
        'priceOption1' => 'İzlenimlere öde',
        'priceOption2' => 'Tıklalara Öde',
        'priceInfo' => '99% Benzersiz kullanıcı kapasitesi',
        'priceText' => 'Fiyat teklifi afiş konumunu etkiler. Teklif ne kadar yüksek olursa konum sırasıda okadar önce gelir. İlk konum sırasında bulunan afişler en fazla benzersiz kullanıcı ile buluşan afişlerdir.
        Gösterimler için düşülen gerçek tutar, belirlediğiniz tekliften daha az olabilir. Sistem, ikinci fiyat Açık Artırma ilkesine göre çalışır: düşülen maliyet, + 0,001 ABD dolarının altındaki bir konumdaki bir banner teklifine eşittir.',
        'priceBarText' => '1000 gösterim başına maliyet',

        'optionsTittle' => 'Yayınğ Ayarları',
        'trafficTitle' => 'Trafik kaynagı',
        'trafficcheckButton1' => 'Bütün kaynaklar',
        'trafficcheckButton2' => 'Uzantı',
        'trafficcheckButton3' => 'Mobil uygulama',
        'dailyViews' => '11000 Günlük Kapasite',
        'dailyViewsInfoTitle' => 'Günlük Kapasite',
        'dailyViewsInfoText' => 'Son 24 saatteki benzersiz kullanıcı sayısı',
        'deviceOption' => 'Cihaz ayarları',
        'deviceOption1' => 'Herhangi bir cihaz',
        'deviceOption2' => 'Telefon',
        'deviceOption3' => 'Bilgisayar',
        'deviceOption4' => 'Tıkladıktan sonra gösterme($0,002)',
        'deviceOption5' => 'Sadece Gerçek kullanıcılar($0,005)',
        'deviceOption4Info' => 'Bu afiş daha öcne tıklanmış olanlara gösterilmeyecektir. Bu seçenek sizin bütçenizi korur.',
        'deviceOption5Info' => 'Kazançlarını artırmak için sistemi aldatmaya çalışan kullanıcılara insanlık puanı atarız. Puan hesaplama formülü, davranış analizini, ziyaret edilen siteler, çalışma saatleri, Google reCaptcha v3 puanını içerir. Sistemi aldatmaya çalışan kullanıcılar otomatik olarak engellenir. Bu seçeneğin etkinleştirilmesi sadece bot olmayan kullanıcılar tarafından gösterilmesine izin verir.',
        'categoriesTitle'=> 'Kategoriler',
        'categoriesInfoTitle' =>'Kategoriler',
        'categoriesInfoText' =>'Bu afiş sadece seçilenle kategori ile ilişkili web sitelerinde oynatılır',
        'geotargetingTitle' => 'Ülke',
        'geotargetingTitleInfoTitle' => 'Ülke',
        'geotargetingTitleInfoText' => 'Sadece seçtiğiniz ülke kullanıcıları tarafından görüntülenir. Ülkeler kullanıcılara IP analizi yapılarak bulunur. Bütün ülkelerde gösterilmesi için bu ayarı kullanmayınız.',
        'geortargetingCheckBoxTitle' => 'Seçilen ülkede gösterme',
        'geortargetingCheckBoxInfo' => 'Eğer liste halinde ülkeler seçmek istiyorsanız bu seçeğeni etkinleştirin',
     
        'options1Title' => '1 Kullanıcı başına gösterim sayıları',
        'options1_1' => 'Etkin değil',
        'options1_2' => '20 gösterim',
        'options1_3' => '50 gösterim',
        'options1_4' => '100 gösterim',
        'options1_5' => '150 gösterim',
        'options1_6' => '200 gösterim',
        'options1InfoTitle' => 'Göstermeyi durdur.',
        'options1InfoText' => 'Afiş gösterim sayısı bütün kullanıcılar geçerlidir. Eğer bi kullanıcı seçim sayısını tamamlarsa o kullanıcı artık bu reklamı göremez. Bu da bütçenizi daha ekonomik olmasını sağlar',
      

        'options2Title' => 'Belirli bi kullanıcı gösterim sayısını doldurduktan sonra yeniden gösterilmesi için seçilen süre',
        'options2_1' => 'Belirsiz',
        'options2_2' => '10 Dakika',
        'options2_3' => '30 Dakika',
        'options2_4' => '1 Saat',
        'options2_5' => '3 Saat',
        'options2_6' => '6 Saat',
        'options2InfoTitle' => 'Gösterimin başlaması',
        'options2InfoText' => 'Belirli bir kullanıcı gösterim sayısını tamamlarsa gösterimler o kullanıcı için askıya alınır. Bu da bütçenizi daha ekonomik kullanmanızı sağlar.',
      
        'options3Title' => 'Dil',
        'options3InfoTıtle' => 'Dil',
        'options3InfoText' => 'Reklamınız sadece seçili dili kullanan kullanılar tarafından görüntülenecektir. Kullanıcıların dil tespiti tarayıcı ayarlarından ya da site içi dil ayarlarından tespit edilir',
        'button1' => 'Geri',
        'button2' => 'Kaydet',
        'button3' => 'Başlat',
        'tarife1' => 'Tarife',
        'tarife2' => '$0,159 Her 1000 gösterim için'
    ]
];