<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<b>requirement/persyaratan</b>
---
> #### Php versi 8
>> - Cara menginstal php dalam bahasa indonesia : https://youtu.be/Uw3ZGIMvIdA?si=mBVZ-lBnoCilASzo
>> - Cara menginstal php dalam bahasa inggris : https://youtu.be/MPRLUd8Pmyo?si=FqN54nVr4duH4Keg
---
> #### Laravel versi 9.1.10
>> - cara menginstal laravel yang versi yang sama 
```
   Composer Create-project laravel\laravel=v9.1.10 nama-folder
```
>> - Cara tahu laravel sekarang versi berapa : https://packagist.org/packages/laravel/laravel
---
<b>Cara Menjalankan/Run Project ini</b>
---
> - clone
>  ```
>  git clone git@github.com:Usmanganteng/belajar-laravel-eloquent-api-resource.git
> ```
>  - npm
> ```
> npm Instal
> ```
> ```
> npm update
> ```
> - Database
> ```
> php artisan migrate
> ```
> - Run
> ```
> php artisan serve
> ```
---
<b>Materi</b>
---
> #### Comment
> - Comment dalam Laravel Blade adalah cara untuk menambahkan catatan di dalam kode Blade yang tidak akan ditampilkan di output HTML. Gunakan sintaks `{{-- --}}` untuk menandai komentar dalam kode Blade."
> - berikut adalah contoh code nya :
> ```
> <html>
> <head>
>   <title>Comment</title>
> </head>
> <body>
> {{-- Muhamad Aldizar Ilham --}} -> code yang ini tidak akan di baca
> <h1>Comment</h1>
> </body>
> </html>
> ```
> #### HTML Encoding
> - HTML Encoding adalah proses mengubah karakter-karakter khusus dalam kode HTML menjadi entitas HTML yang sesuai, seperti < untuk < dan & untuk &. Ini diperlukan agar karakter-karakter tersebut ditampilkan dengan benar oleh browser dan tidak diinterpretasikan sebagai kode HTML.
> - berikut adalah contoh code nya :
> ```
> <html>
> <head>
>   <title>HTML Encoding</title>
> </head>
> <body>
> {!! $name !!}
> </body>
> </html>
> ```
> #### Disabled Blade
> - Disabled Blade adalah fitur di Laravel yang memungkinkan Anda untuk menonaktifkan pemrosesan Blade pada bagian tertentu dari file Blade. Ini dilakukan dengan menggunakan direktif `@verbatim`, yang memungkinkan Anda menulis kode sebagai teks biasa tanpa diinterpretasikan oleh Blade.
> - berikut adalah contoh code nya :
> ```
> <html>
> <body>
> 
> <h1>Hello @{{ $name }}</h1>
>
>
> @verbatim
>    <p>
>        Hello Aldizar
>        Hello Aldizar
>        Hello Aldizar
>        Hello Aldizar
>    </p>
> @endverbatim
>
> </body>
></html>
> ```
> #### If Statement
> - Pernyataan `if` digunakan untuk menjalankan blok kode berdasarkan kondisi yang diberikan. Dalam Laravel Blade, Anda dapat menggunakan `@if`, `@else`, dan `@elseif`
> - berikut adalah contoh code nya :
> ```
> <html>
>  <body>
>    <p>
>     @if(count($hobbies) == 1)
>         I have one hobby!
>     @elseif(count($hobbies) > 1)
>         I have multiple hobbies!
>     @else
>         I don't have any hobbies!
>     @endif
>   </p>
>  </body>
> </html>
> ```
> #### Unless Statement
> - Pernyataan `unless` dalam Laravel Blade adalah cara untuk mengevaluasi kebalikan kondisi. Artinya, blok kode di dalamnya akan dieksekusi jika kondisi yang diberikan bernilai salah (false).
> - berikut adalah contoh code nya :
> ```
> <html>
>
> <body>
> 
> @unless($isAdmin)
>    Anda bukan seorang administrator .
> @endunless
>
> </body>
>
> </html>
> ```
> #### Isset dan Empty
> - `isset` digunakan untuk memeriksa apakah suatu variabel telah diatur dan tidak bernilai null, sementara `empty` digunakan untuk memeriksa apakah suatu variabel kosong (tidak diatur, bernilai null, false, 0, "", atau array kosong).
> - berikut adalah contoh code nya :
> ```
> <html>
>  <body>
>
>   <p>
>    @isset($name)
>        Halo, nama saya {{$name}}
>    @endisset
>  </p>
> 
>   <p>
>     @empty($hobbies)
>         Saya tidak punya hobi.
>    @endempty
>  </p>
>
>  </body>
> </html>
> ```
> #### Env
> - File `.env` digunakan untuk menyimpan variabel lingkungan yang digunakan oleh aplikasi Laravel, seperti konfigurasi database dan kunci rahasia. Ini memungkinkan pengaturan yang mudah untuk berbagai lingkungan (development, testing, production) dengan nilai-nilai yang dapat diakses melalui fungsi `env()`.
> #### Switch Statement
> - Switch statement adalah cara untuk menjalankan kode yang berbeda tergantung pada nilai dari suatu ekspresi atau variabel. Ini memungkinkan kita untuk menentukan serangkaian kondisi yang berbeda dan melakukan tindakan berdasarkan kondisi tersebut.
> - berikut contoh code nya :
> ```
> <html>
>
> <body>
>
> @switch($value)
>    @case('A')
>        Memuaskan
>        @break
>    @case('B')
>        Bagus
>        @break
>    @case('C')
>        Cukup
>        @break
>    @default
>        Tidak Lulus
> @endswitch
>
> </body>
>
> </html>
> ```
> #### For Loop
> - For loop adalah cara untuk mengeksekusi blok kode berulang kali berdasarkan suatu kondisi atau rentang nilai tertentu. Itu terdiri dari tiga bagian: inisialisasi, kondisi, dan iterasi. Loop akan terus dieksekusi selama kondisi bernilai true.
> - berikut contoh code nya :
> ```
> <html>
> <body>
> <ul>
>     @for($i = 0; $i < $limit; $i++)
>        <li>{{$i}}</li>
>     @endfor
> </ul>
> </body>
> </html>
> ```
> #### Raw PHP
> - Raw PHP adalah penggunaan PHP langsung tanpa menggunakan kerangka kerja atau pustaka eksternal. Dalam pengembangan web, Anda menulis kode PHP langsung untuk menangani semua aspek pengembangan seperti routing, interaksi dengan basis data, dan tampilan.
> - berikut contoh code nya :
> ```
> <html>
> <body>
> @php
>
>    class Person {
>        public string $name;
>        public string $address;
>    }
>
>    $person = new Person();
>    $person->name = "Aldizar";
>    $person->address = "Indonesia";
>
> @endphp
>
> <p>{{$person->name}}</p>
> <p>{{$person->address}}</p>
> 
> </body>
> </html>
>```
---
  <b align = "center"><h3>TERIMA KASIH</h3></b>
