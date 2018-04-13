<p align="center"><img src="https://github.com/SUN06444/RenthouseWeb-Laravel/blob/7895cd3b04a0a26c0616b1a1dcef4393041a12f2/gif/v1.gif"></p>

## RenthouseWeb-Laravel 學生租屋網

## 1. 系統說明

專為學生所設計的租屋網，裡面所附的房屋圖片皆由[勤益科大租屋網](http://www.osa.ncut.edu.tw/2004/html/office/rent/index.asp)取得，圖片僅供系統展示用，不代表實際的租屋現況。

## 2. 其他說明

- [首頁樣板](
  https://dribbble.com/shots/1847266-Craigslist-Redesign?list=searches&tag=craigslist&offset=1)-by Tanveer Junayed  on Dec 15, 2014

- [後臺樣板](https://github.com/puikinsh/gentelella)-Free Bootstrap 3 Admin Template

## 3. 功能項目

- 註冊功能(房客、房東)、登入功能(房客、房東、管理人員)
<p align="center"><img src="https://github.com/SUN06444/RenthouseWeb-Laravel/blob/7895cd3b04a0a26c0616b1a1dcef4393041a12f2/gif/v2.gif"></p>
- 房客：房屋收藏、比較功能
<p></p>
- 房東：刊登房屋功能
<p align="center"><img src="https://github.com/SUN06444/RenthouseWeb-Laravel/blob/7895cd3b04a0a26c0616b1a1dcef4393041a12f2/gif/v3.gif"></p>
- 管理人員：審核學生身分以及審核房屋刊登資訊
<p align="center"><img src="https://github.com/SUN06444/RenthouseWeb-Laravel/blob/7895cd3b04a0a26c0616b1a1dcef4393041a12f2/gif/v4.gif"></p>

## 4. 安裝說明

- `git clone https://github.com/WISD-2017/Renthouse-For-Students.git`

- 專案復原與建置(開啟 cmder)
    ``` 
    $ cd {project name}
    
    $ composer install --no-scripts
    
    $ composer run-script post-root-package-install 
    
    $ composer run-script post-install-cmd
    
    $ composer run-script post-create-project-cmd
    ```
    
- 建立新資料庫{project name} (於 [Mysql](http://localhost:8000/adminer) 內建立)

- .env檔修改及設定
     ``` 
     //修改
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=33060
     DB_DATABASE={project name} (DB名稱，可自訂) 
     DB_USERNAME=root
     DB_PASSWORD=root

     ```
     
     ```
     //信件設定 
     MAIL_DRIVER=smtp
     MAIL_HOST=smtp.gmail.com     
     MAIL_PORT=587     
     MAIL_USERNAME=your_username@gmail.com
     MAIL_PASSWORD=your_password
     MAIL_ENCRYPTION=tls
     ```
     
- 遷移(cmder) `php artisan migrate`

- 寫入測試資料(cmder) `php artisan db:seed`

## 5. [管理人員登入](http://localhost:8000/auth/login/3)

- 帳號：`admin`
- 密碼：`12345`


