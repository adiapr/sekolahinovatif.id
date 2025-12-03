<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class LandingpageController extends Controller
{
    public function index()
    {
        // SEO Meta Tags
        SEOMeta::setTitle('Sekolah Inovatif - Platform Digitalisasi Manajemen Sekolah Modern')
            ->setDescription('Sekolah Inovatif adalah solusi digital terpadu untuk manajemen sekolah modern. Kelola absensi PKL, monitoring guru piket, silabus, pelanggaran siswa, dashboard BK, dan poin siswa dalam satu platform.')
            ->setKeywords([
                'sistem manajemen sekolah',
                'digitalisasi sekolah',
                'absensi siswa digital',
                'monitoring guru piket',
                'manajemen silabus',
                'sistem pelanggaran siswa',
                'dashboard BK',
                'platform sekolah indonesia',
                'administrasi sekolah digital',
                'sekolah inovatif'
            ])
            ->setCanonical(url()->current())
            ->addMeta('robots', 'index, follow')
            ->addMeta('author', 'Sekolah Inovatif')
            ->addMeta('viewport', 'width=device-width, initial-scale=1.0');

        // Open Graph Tags (Facebook, LinkedIn)
        OpenGraph::setTitle('Sekolah Inovatif - Digitalisasi Manajemen Sekolah')
            ->setDescription('Transformasi digital untuk sekolah modern. Kelola semua aspek administrasi sekolah dalam satu platform terintegrasi.')
            ->setUrl(url()->current())
            ->setType('website')
            ->setSiteName('Sekolah Inovatif')
            ->addImage(asset('logo/SI_merahputih_kotak01.png'), [
                'width' => 1200,
                'height' => 630,
                'alt' => 'Sekolah Inovatif Platform'
            ]);

        // Twitter Card
        TwitterCard::setTitle('Sekolah Inovatif - Platform Digitalisasi Sekolah')
            ->setDescription('Solusi digital terpadu untuk manajemen sekolah modern di Indonesia')
            ->setType('summary_large_image')
            ->setUrl(url()->current())
            ->setImage(asset('logo/SI_merahputih_kotak01.png'));

        // JSON-LD Structured Data
        JsonLd::setTitle('Sekolah Inovatif')
            ->setDescription('Platform digitalisasi manajemen sekolah terlengkap di Indonesia')
            ->setType('Organization')
            ->addValue('url', url()->current())
            ->addValue('logo', asset('logo/SI_merahputih_kotak01.png'))
            ->addValue('contactPoint', [
                '@type' => 'ContactPoint',
                'telephone' => '+62-xxx-xxxx-xxxx',
                'contactType' => 'Customer Service',
                'areaServed' => 'ID',
                'availableLanguage' => ['Indonesian']
            ])
            ->addValue('sameAs', [
                'https://www.facebook.com/sekolahinovatif',
                'https://www.instagram.com/sekolahinovatif',
                'https://twitter.com/sekolahinovatif',
                'https://www.linkedin.com/company/sekolahinovatif'
            ]);

        return view('pages.landingpage.home');
    }
}
