# Laravel 11 Raygun 錯誤追蹤

引入 mindscape 的 raygun4php 套件來擴增使用 Raygun 讓您即時了解網頁和手機應用程式的品質和效能，可檢測並診斷應用程式中的錯誤和異常，並將其顯示在儀表板上，更快地檢測、複製和解決問題，為您的客戶提供更好的體驗。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/debug` 來進行錯誤例外觸發。

## 畫面截圖
![](https://i.imgur.com/EFucivZ.png)
> 觸發錯誤例外以中斷程式流程

![](https://i.imgur.com/MoeXkDc.png)
> 使用 Raygun 確認程式錯誤的偵測
