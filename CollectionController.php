<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        dump($collection);

    }

    public function collectionDua()
    {   //Collectoin dari berbagai type data
        $collection = collect(["Belajar","Laravel","Enak Banget", 1, 2, 3, 4]);
        echo $collection;

        echo "<br>";

        //Collection dari associative array
        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "SMA Negeri 1 Muara Enim",
            "Kota" => "Muara Enim",
            "Jurusan" => "IPA",
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        //  berguna untuk mengurutkan isi collection
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump( $collection->sort() );
        // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}

    }

    public function collectionEmpat()
    {
        // berguna untuk mengganti nilai yang ada di dalam collection

        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "Universitas Indonesia",
            "Kota" => "Jakarta",
            "Jurusan" => "PJJ Informatika",
            ]);

            dump( $collection->forget('Sekolah') );
    }

    public function collectionLima()
    {
        //... isi method collectionLima
    }
    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}
