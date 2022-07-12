## サイトurl
https://bicpema.ms2n-xxx.com/

## 「Bic Pema」とは
理科や数学を「視覚的に」学習することができるWEBアプリケーションです。理科や数学の実験をWEBページで行うことができます。   
名前は「**bi**ology」、「**c**hemistry」、「**p**hysics」、「**e**arth」、「**ma**th」の頭文字をとっています。  
## 作った経緯
理科教育を専攻している友達に誘われて作りました。  
役割としては私がWEBページの機能を、友達は教材作りを担当しています。
## サービスの機能
主な機能は2つです。  
- 実験の実行
- 実験の投稿
## 実験の表示方法
実験に関しては「[p5.js](https://p5js.org/)」というJavaScriptライブラリを用いて表示しています。  
投稿する際もp5.jsで動くコード(jsファイル)であれば投稿して動かすことができます。
　　
## 使用技術
- Laravel 8.x
- [p5.js](https://p5js.org/)
- Vue.js(Vue3)
- [PrimeVue](https://www.primefaces.org/primevue/)

## シードデータの追加方法
`database\seeders\PostSeeder.php`を編集
```
git add .
git commit -m "コミットメッセージ"
git push origin master
```
https://bicpema.ms2n-xxx.com/posts
で追加されているか確認