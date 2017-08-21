<?php
Class Lang{
    public static function getLang($a)
    {
        $value = array(
            "welcome" 					=> "Hoş geldiniz",
            "myCompany" 				=> "Bizim Şirket",
            "invoiceFrom" 				=> "Kimden",
            "invoiceTo" 				=> "Kime",
            "paid" 					=> "Ödenen",
            "currency" 					=> "Para Kuru",
            "all" 					=> "Tümü",
            "addBuyPayment" 				=> " numaralı alım faturası ödemesi",
            "addInvPayment" 				=> " numaralı fatura ödemesi",
            "payToProvidersDesc" 			=> " hizmet ödemesi",
            "company" 				        => "Şirket",
            "returnPayOut" 				=> " numaralı faturanın iade tutarıdır.",
            "returnPayIn" 				=> " numaralı faturanın tahsil tutarıdır.",
            
            
            
            //Providers
            "connectedPerson" 				=> "İlgili Kişi",
            
            
            //Event
            "invoice_added" 				=> "Fatura Ekleme",
            "payment_added" 				=> "Ödeme Yapıldı",
            "providersPayment_added" 			=> "Ödeme Yapıldı",
            
            //Login form
            "signin" 					=> "Giriş",
            "login" 					=> "Giriş Yap",
            "password" 					=> "Şifreniz",
            "email" 					=> "E-Posta adresiniz",
            
            //Notifications
            "mainPage" 					=> "Anasayfa",
            "validateDiscount" 				=> "İndirim miktarı toplamdan büyük olamaz!",
            "validateDate" 				=> "Lütfen geçerli bir tarih formatı giriniz! Örn: 2017-01-01",
            "validateIBAN" 				=> "Lütfen geçerli bir IBAN formatı giriniz!",
            "validateText" 				=> "Lütfen geçerli bir içerik giriniz!",
            "contentExist" 				=> "Böyle bir içerik zaten var!",
            "cantBlank" 			        => "Bu alan boş olamaz!",
            "proccessSuccess" 				=> "İşlem başarıyla tamamlandı",
            "checkSuccess" 				=> "Denetim başarılı",
            "checkFailed" 				=> "Denetimde sorun var!",
	    "changedView" 				=> "Görünüm değiştirildi",
            "validatePassword" 			        => "Şifreniz 5-20 karakter arasında olmalı ve enaz bir harf ve sayı içermelidir",
            "keyError" 			                => "Anahtar uyuşmuyor",
            "notAnyFile" 			        => "Lütfen bir resim yollayınız!",
            "fileVeryBig" 			        => "Maksimum yükleme boyutu 2 Mb olmalıdır",
            "fileNotJpg" 			        => "Dosya türü olarak JPEG seçiniz!",
            "writeDBError" 			        => "Veritabanına yazılırken hata oluştu!",
            "doLogin" 			                => "Giriş yapıldı anasayfaya yönlendiiriliyorsunuz",
            "cantLogin" 			        => "Kullanıcı adı yada şifre yanlış!",
            "validateShortInput" 		        => "Geçerli sayıda karakter girmediniz!",
            "dueDateCantSmall" 		                => "Vade tarihi oluşturma tarihinden önce olamaz!",
            "payCantBigTotal" 		                => "Ödeme miktarı toplam miktardan büyük olamaz!",
            "notEnoughStock" 		                => "Stokta yeterli ürün yok!",
            "productNotFound" 		                => "Ürün bulunamadı!",
            "invoiceNotFound" 		                => "Fatura bulunamadı!",
            "payTypeNotFound" 		                => "Bilinmeyen ödeme yöntemi!",
            "cashNotFound" 		                => "Bilinmeyen kasa!",
            "errorChangeValue" 		                => "Gönderilen veri değiştirildi yada gönderilemedi!",
            "errorUpdateRow" 		                => "Tablo güncellenemedi!",
            "customerNotFound" 		                => "Müşteri Bulunamadı!",
            "sellerNotFound" 		                => "Satıcı Bulunamadı!",
            "taxNotFound" 		                => "Vergi Bulunamadı!",
            "areYouSureForDelete" 		        => "Silme işlemini onaylıyor musunuz?",
            "areYouSureForChange" 		        => "İçerik kaydelicek onaylıyor musunuz?",
            "cantDeleteDefault" 		        => "Öntanımlı içeriği silemezsiniz!",
            "validateStar" 		                => "Yıldız sayısı 0 ile 5 arasında olmalıdır!",
            "validatePercent" 		                => "İndirim oranı 0 ile 100 arasında olmalıdır!",
            "ifCheckDontPay" 		                => "(Seçilirse ödeme yapılmadan ürün eklenecektir)",
            "productAddedToCart" 		        => "Ürün sepetinize eklendi",
            "productAddedToBuyCart" 		        => "Ürün satın alma sepetinize eklendi",
            "productAlreadyInCart" 		        => "Ürün zaten sepetinizde",
            "writeProductStatusError" 		        => "Lütfen içerik olarak 'passive' yada 'active' yazınız.",
            "selectContents" 		                => "Lütfen gerekli içeriği seçiniz!",
            "selectColors" 		                => "Lütfen gerekli rengi seçiniz!",
            "selectColorOrContents" 		        => "Lütfen öznitelik yada renk seçiniz!",
            "providersExist" 		                => "Hizmet sağlayıcı daha önce eklenmiş!",
            "cantAddServiceInvoicePaid" 		=> "Ödeme yapılmış bir faturaya servis ekleyemezsiniz!",
            "cantAddServiceInvoiceCompromise" 		=> "Uzlaşılmış bir faturaya servis ekleyemezsiniz!",
            "pleaseAddServiceFirst" 		        => "Lütfen önce servis ekleyiniz!",
            "cantPaidDeactiveInvoice" 		        => "Pasif faturaya ödeme yapamazsınız!",
            "feeOfProviders" 		                => "Hizmet sağlayıcıya aktarılacak ücret",
            "cantFeeBigToTotal" 		        => "Fatura toplamından büyük bir ödeme girdiniz",
            "currency_error" 		                => "Para Kodu Eklenmemiş",
            
            //Left Menu
            "index" 					=> "Anasayfa",
            "invoices" 					=> "Faturalar",
            "invoiceList" 				=> "Fatura Listesi",
            "addInvoice" 				=> "Fatura Ekle",
            "addBuyInvoice" 				=> "Alım Faturası Ekle",
            "current" 					=> "Cari",
            "customers" 				=> "Müşteriler",
            "addCustomer" 				=> "Müşteri Ekle",
            "sellers" 					=> "Satıcılar",
            "addSeller" 				=> "Satıcı Ekle",
            "serviceProviders" 				=> "Hizmet Sağlayıcılar",
            "stockManagements" 				=> "Stok Yönetimi",
            "stockLists" 				=> "Stok Listesi",
            "addStock" 					=> "Stok Ekle",
            "payments" 					=> "Ödemeler",
            "providers" 				=> "Hizmet Sağlayıcı",
            "addProviders" 				=> "Hizmet Sağlayıcı Ekle",
            "cash" 				        => "Kasa Hesapları",
            "addCash" 				        => "Kasa Hesabı Ekle",
            "settings" 				        => "Ayarlar",
            "addServiceInvoice" 			=> "Hizmet Faturası Ekle",
            "serviceFirstStep" 			        => "Ürün Kabul",
            "serviceDetail" 			        => "Servis Faturası",
            "services" 			                => "Servisler",
            "addServices" 			        => "Servis Ekle",
            "selectServices" 			        => "Servis Seçiniz",
            
            //Colors
            "green" 				        => "Yeşil",
            "blue" 				        => "Mavi",
            "red" 				        => "Kırmızı",
            "orange" 				        => "Turuncu",
            "white" 				        => "Beyaz",
            "purple" 				        => "Mor",
            "blue-sky" 				        => "Açık Mavi",
            
            //Products
            "products" 				        => "Ürünler",
            "productsList" 				=> "Ürün Listesi",
            "addProducts" 				=> "Ürün Ekle",
            "productDetail" 				=> "Ürün Ayrıntısı",
            "productAct" 				=> "Satış hareketleri",
            "exTax" 				        => "Vergi hariç",
            "incTax" 				        => "Vergi dahil",
            "cost" 				        => "Maliyet",
            "addToCart" 				=> "Sepete Ekle",
            "addToStock" 				=> "Satın Al",
            "productName" 				=> "Ürünün Adı",
            "sellerName" 				=> "Satıcı Adı",
            "eachPrice" 				=> "Birim Fiyat",
            "paidTotal" 				=> "Toplam Ödenen",
            "colors" 				        => "Renk Seçenekleri",
            "sizes" 				        => "Beden Ölçüleri",
            "capacities" 				=> "Kapasite",
            "weight" 				        => "Ağırlık",
            "shortDesc" 				=> "Kısa Açıklama",
            "cart" 				        => "Sepet",
            "prefix" 				        => "Önek",
            
            
            //Pagination
            "previous" 					=> "Önceki",
            "next" 					=> "Sonraki",
            "lastPage" 					=> "Son Sayfa",
            "firstPage" 				=> "İlk Sayfa",
            
            //Page Names
            "pageTitleBlank" 				=> " ",
            "productAdd" 				=> "Yeni Ürün Ekle",
            "addInvoice" 				=> "Yeni Fatura Oluştur",
            "profile" 				        => "Hesabım",
            "customerProfile" 				=> "Müşteri Ayrıntısı",
            "addOptions" 				=> "Öznitelik Ekle",
            "brand" 				        => "Marka",
            "providerProfile" 				=> "Hizmet Sağlayıcı",
            "cancelInvoice" 				=> "Faturayı İptal Et",
            
            //Buttons and labels
            "cancel" 					=> "İptal",
            "submit" 					=> "Tamam",
            "addNewProduct" 				=> "Yeni Ürünü Ekle",
            "finishUpload" 				=> "Yüklemeyi Bitir",
            "category" 				        => "Kategori",
            "addCategory" 				=> "Kategori Ekle",
            "uploadImages" 				=> "Resim Yükle",
            "productInfs" 				=> "Ürün Bilgileri",
            "mainCategory" 				=> "Ana Kategori",
            "subCategory" 				=> "Alt Kategori",
            "refresh" 				        => "Listeyi yenile",
            "web" 				        => "Web Adresi",
            "connectedPerson" 				=> "Sorumlu Kişi",
            "iban" 				        => "IBAN",
            "updateInf" 				=> "Bilgileri Güncelle",
            "infos" 				        => "Bilgiler",
            "edit" 				        => "Düzenle",
            "add" 				        => "Yeni Ekle",
            "currencyName" 				=> "Kur Adı",
            "currencyCode" 				=> "Kur Kodu",
            "addCurrency" 				=> "Yeni Kur Ekle",
            "addPrefix" 				=> "Yeni Önek Ekle",
            "doDefault" 				=> "Öntanımlı Yap",
            "addPaytype" 				=> "Ödeme Yöntemi Ekle",
            "payType" 				        => "Ödeme Yöntemi",
            "addCompanyInfs" 				=> "Şirk. Bil. Ekle",
            "companyInfs" 				=> "Şirket Bilgileri",
            "companyName" 				=> "Şirket Adı",
            "addGroup" 				        => "Grup Ekle",
            "star" 				        => "Yıldız",
            "customersGroups" 				=> "Müşteri Grupları",
            "virtualProduct" 				=> "Sanal Ürün",
            "payAmount" 				=> "Ödeme Miktarı",
            "priceIn" 				        => "Alış Fiyatı",
            "priceOut" 				        => "Satış Fiyatı",
            "addRow" 				        => "Satır Ekle",
            "options" 				        => "Öznitelikler",
            "outOfStock" 				=> "Stokta Yok!",
            "topSearchButton" 				=> "Bul!",
            "topSearchContent" 				=> "Birşeyler yaz...",
            "profit" 				        => "Kar",
            "profitType" 				=> "Arttırma Türü",
            "wrongProfitType" 				=> "Hatalı arttırma türü!",
            "percent" 				        => "Yüzde",
            "back" 				        => "Geri",
            "finish" 				        => "Bitir",
            "unpaid" 				        => "Ödenmedi",
            "waiting" 				        => "Beklemede",
            "cancelled" 				=> "İptal/İade",
            "new" 				        => "Yeni",
            "stock" 				        => "Stok",
            "order" 				        => "Satış",
            "select" 				        => "Seçiniz",
            "status" 				        => "Durum",
            "complaint" 				=> "Şikayet",
            "addPayment" 				=> "Ödeme Yap",
            "payToProviders" 				=> "Hizmet Sağlayıcıya Ödeme Yap",
            "compromise" 				=> "Müşteriyle Uzlaş",
            "discountType" 				=> "İndirim Türü",
            "reason" 				        => "Gerekçe",
            "insert" 				        => "Ekle",
            "value" 				        => "İsim giriniz",
            "what" 				        => "Ekleme Türü",
            "wrongWhat" 				=> "Yanlış Ekleme Türü",
            "amountType" 				=> "Miktar Türü",
            "attributes" 				=> "Kod/Öznitelik",
            "language" 				        => "Dil",
            "configs" 				        => "Yapılandırma",
            "themes" 				        => "Temalar",
            "sale" 				        => "Ürünü Sat",
            "other" 				        => "Ürünü Sat",
            
            
            //Payments
            "Cash" 				        => "Peşin",
            "EFT" 				        => "EFT",
            "CreditCard" 				=> "Kredi Kartı",
            "PayAtTheDoor" 				=> "Kapıda Ödeme",
            "Cheque" 				        => "Çek",
            
            
            //Invoice List
            "invoiceNo" 				=> "Fatura No",
            "customer" 					=> "Müşteri",
            "cashName/providersName" 		        => "Kasa/H. Sağlayıcı",
            "remain" 					=> "Kalan",
            "invoiceExpiry" 				=> "Ödeme Tarihi",
            "addInvoice" 				=> "Fatura Oluştur",
            
            //Invoice Detail
            "invoiceDetail" 				=> "Fatura Detayı",
            "invoice" 					=> "Fatura",
            "amount" 					=> "Miktar",
            "tax" 					=> "Vergi",
            "subTotal" 					=> "Ara Toplam",
            "desc" 					=> "Açıklama",
            "shipping" 					=> "Kargo",
            "discount" 					=> "İndirim",
            "total" 					=> "Toplam",
            "print" 					=> "Yazdır",
            "generatePDF" 				=> "PDF olarak kaydet",
            "date" 					=> "Tarih",
            "dueDate" 					=> "Vade Tarihi",
            "sku" 					=> "SKU",
            "delete" 					=> "Kaldır",
            "price" 					=> "Fiyat",
            "fee" 					=> "Ücret",
            "salePrice" 				=> "Satış Fiyatı",
            "buy" 					=> "Satın Al",
            "cartList" 					=> "Ürün Listesi",
            "descOfAddInvoice" 				=> " tarihli satın alım faturası",
            "allThingsReady" 				=> "Herşey hazır!",
            
            //Customers
            "discountRate" 				=> "İndirim Oranı",
            "noGroup" 					=> "Grup Yok",
            "address" 					=> "Adres",
            "viewProfil" 				=> "Profile Bak",
            
            //Add Customers
            "customerInfs" 				=> "Müşteri Bilgileri",
            "name" 				        => "İsim",
            "surname" 				        => "Soyisim",
            "phone" 				        => "Telefon Numarası",
            "mail" 				        => "E-Posta adresi",
            "city" 				        => "Şehir",
            "country" 				        => "Ülke",
            "group" 				        => "Grup",

            //Mouths
            "01" 				        => "Ocak",
            "02" 				        => "Şubat",
            "03" 				        => "Mart",
            "04" 				        => "Nisan",
            "05" 				        => "Mayıs",
            "06" 				        => "Haziran",
            "07" 				        => "Temmuz",
            "08" 				        => "Ağustos",
            "09" 				        => "Eylül",
            "10" 				        => "Ekim",
            "11" 				        => "Kasım",
            "12" 				        => "Aralık",

            //Admin Status or access informations
            "superuser" 				=> "Yetkili Kullanıcı",
            "admin" 				        => "Kullanıcı",
            "adminLevel" 				=> "Kullanıcı Seviyesi",
            "cannotAccess" 				=> "Bu işlem için yetkili değilsiniz!",

            //Errors
            "errorname" 				=> "Lütfen geçerli bir isim giriniz!<br />",
            "errorconnectedPerson" 			=> "Lütfen geçerli bir isim giriniz!<br />",
            "erroraddress" 				=> "Lütfen geçerli bir adres formatı giriniz!<br />",
            "errorweb" 				        => "Lütfen geçerli bir web adresi giriniz!<br />",
            "errormail" 				=> "Lütfen geçerli bir mail adresi giriniz!<br />",
            "errorphone" 				=> "Lütfen geçerli bir telefon numarası giriniz!<br />",
            "connectionErrorCustomers" 			=> "Müşteri listesine bağlantı hatası",
            "connectionErrorSettings" 			=> "Ayarlar tablosuna bağlantı hatası",
            "connectionErrorInvoice" 			=> "Faturalar tablosuna bağlantı hatası",
            "connectionErrorService" 			=> "Servis tablosuna bağlantı hatası",
            
            );
            return $value[$a];
    }
}
?>