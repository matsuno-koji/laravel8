# Laravel8 お試し

## 参考

- https://www.ritolab.com/entry/217

## 書式とか

- 初回(docker-compose が内包されており、自動的に環境構築までやってくれる)
  `curl -s https://laravel.build/<YOUR_PROJECT_NAME> | bash`

- 起動
  `./vendor/bin/sail up`

- publish
  `sail artisan sail:publish`

## 備考

- 基本的に docker-compose とかの命令をラップしているだけなので、普通にそっちのコマンドでも良い
- 便利

## ユーザー認証について

### 参考

- https://qiita.com/manbolila/items/498aae00f3574c72f031

### Jetstream

- Laravel8 用の認証ライブラリ Laravel/ui から変更された
- ログイン
- 新規登録
- メール検証
- ２段階認証
- セッション管理
- API サポート(Laravel Sanctum)
- チーム管理(権限管理)
- めっちゃやるやん・・・

### JS のパッケージ

- livewire
- inertia
- まだあんまり調べていない(Vue とか React とかを使う場合は inertia？)
