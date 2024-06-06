<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravelフォームテンプレート
## プロジェクト概要

Laravelでシンプルなフォームを実装しています。  
これをもとに確認画面の追加実装、Discordへの通知などサンドボックスとしてご自由に使っていただいて構いません。

## 開発環境構築
Laravel Sailを使って開発環境を簡単に構築できます(Docker必須)  
### composerパッケージのインストール
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

### .envファイルの作成
[.env.example](.env.example)を参考にご自身の環境に合わせて作成して下さい。  
複合キーを共有されている場合は [.env.encrypted](.env.encrypted)を復号化して作成することもできます。

### 開発環境の起動
```bash
./venfor/bin/sail up -d
```

### 開発環境の停止
```bash
./venfor/bin/sail down
```

### サイト
http://localhost

### メール(Mailpit)
http://localhost:8025

### Dependencies
* Laravel 11
* PHP 8.3
* sqlite
* Mailpit

## 作成者
Kent Koyama  
Udemy: https://www.udemy.com/user/kent-koyama/
