## 概要

Lumen の docker 開発環境、触ってみる

## version

- Lumen 10
- MySQL 8

## サーバーの環境構築

```
// git clone 後、以下の Make コマンドにて環境構築が完結します。
// TODO: makeコマンド調整中
$ make first

// コンテナ作り直し等
$ make install

// テストの実行
docker compose exec app vendor/bin/phpunit

// MySQLログイン
docker compose exec db bash
bash-4.4# mysql -uroot -p
```

以下のパスにアクセスして TOP 画面が表示できていれば正常

http://localhost:8000/

## 公式サイト

https://lumen.laravel.com/docs/10.x/testing
