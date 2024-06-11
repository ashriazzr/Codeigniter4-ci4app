<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController menyediakan tempat yang nyaman untuk memuat komponen
 * dan melakukan fungsi yang dibutuhkan oleh semua kontroler Anda.
 * Perluas kelas ini di kontroler baru:
 *     class Home extends BaseController
 *
 * Untuk keamanan, pastikan mendeklarasikan metode baru sebagai protected atau private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance dari objek Request utama.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Array helper yang akan dimuat secara otomatis
     * saat instansiasi kelas. Helper ini akan tersedia
     * untuk semua kontroler lain yang memperluas BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Properti untuk menyimpan nama.
     *
     * @var string
     */
    protected $nama = "Ashri";

    /**
     * Pastikan untuk mendeklarasikan properti untuk properti yang Anda inisialisasi.
     * Pembuatan properti dinamis tidak disarankan di PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Jangan Mengedit Baris Ini
        parent::initController($request, $response, $logger);

        // Muat model, library, dll, di sini.

        // Contoh: $this->session = \Config\Services::session();
        $this->nama = 'Ashri';
    }
}
