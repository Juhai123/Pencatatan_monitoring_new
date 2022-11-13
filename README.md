## Instalasi Laravel

- Pastikan sudah berada di folder htdocs.
- Ketikkan perintah composer –v untuk membuat composer.
- Kemudian composer create-project laravel/laravel namaproject untuk membuat project laravel.


## Instalasi Bootstrap Auth Scaffolding Laravel UI

- Ketikkan perintah  :
- composer require laravel/ui
- php artisan ui bootstrap --auth
- Jalankan dengan php artisan serve 	
- Menginstal npm untuk menampilkan bootstrap caranya yaitu :
- npm install
- npm run dev
- Kemudian refresh halaman dibuat. 

## Autorisasi Spatie Laravel

- <b>Menambahkan spatie ke migration</b>
<p><b>composer require spatie/laravel-permission</b></p>
<p><b>php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"</b></p>
<p><b>php artisan migrate</b></p>
- <b>Membuat hak akses</b>
<p><b>Menambahkan use HashRole ke model user</b></p>
<p><b>Menambahkan use HashRole ke model user</b></p>
<p>Buat file Seeser untuk menambahkan user dengan cara :
<b>php artisan make:seeder RoleSeeder</b></p>
<p>Tambahkan role ke function run RoleSeeder</p>
<p>Buat file Seeser untuk menambahkan user dengan cara :
<b>php artisan make:seeder UserSeeder</b></p>
<p>Tambahkan data user ke function run UserSeeder</p>
<p>Panggil UserSeeder dan RoleSeeder di dalam DatabaseSeeder</p>
<p>Jalankan seeder dengan <b>php artisan db:seed</b></p>
<p>Tambahkan middleware ke dalam file app/Http/Kernel.php.<p>
<p>Buat route di file routes/web.php</p>
<p>Buat Controller dengan nama AdminController dengan <b>php artisan make:controller AdminController</b> untuk menjalankan tampilan view</p>
<p>Buat folder admin di dalam view</p>
<p>Buka file app/Http/Controllers/Auth/LoginController.php. Kemudian kita akan override method authenticated yang ada 
    di berada trait AuthenticatesUsers</p>
 <p>jaankan <b>php artisan serve</b></p>





