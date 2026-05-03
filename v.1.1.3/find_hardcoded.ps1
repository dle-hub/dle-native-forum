$path = "c:\Users\xxx\Desktop\Dle_Forum\v.1.1.3\dle-native-forum-ultimate-core-v113.xml"
$lines = Get-Content $path -Encoding UTF8
$hardcoded = @()

for ($i=0; $i -lt $lines.Count; $i++) {
    $line = $lines[$i]
    # Regex to find potential hardcoded Turkish words
    # Looking for words with Turkish chars or common admin words
    # Not preceded by fl( and not a comment
    if ($line -match "['\>](Düzenle|Sil|Kaydet|Hata|Başarı|Gönder|İşlem|Kategori|Ayarlar|Forum|Konu|Üye|Cevap|Mesaj|Tarih|Durum|Ara|Giriş|Yetki|Sabit|Kilit|Önek|Etiket|Açıklama|Başlık)['\<]" -and $line -notmatch "fl\(") {
        $hardcoded += "$($i+1): $($line.Trim())"
    }
}

$hardcoded | Out-File "c:\Users\xxx\Desktop\Dle_Forum\v.1.1.3\hardcoded_words.txt"
